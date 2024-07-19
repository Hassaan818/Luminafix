<?php

namespace App\Models;

use App\Traits\UserCreateByUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Service extends Model
{
    use HasFactory, UserCreateByUpdatedBy;

    protected $guarded = []; 

    public function getImagePath($value)
    {
        return asset('storage/main_services_uploads/' . $value);
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (int $value): string => ($value == 1) ? 'Active': 'In-Active',
        );
    }

    public function scopeActive($query) {
        return $query->where('status', 1);
    }


    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function generateSlug($title)
    {
        if (static::whereSlug($slug = Str::slug($title))->exists())
        {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');
  
            if (is_numeric($max[-1]))
            {
                return preg_replace_callback('/(\d+)$/', function ($mathces)
                {
                    return $mathces[1] + 1;
                }, $max);
            }
  
            return "{$slug}-2";
        }
  
        return $slug;
    }
}
