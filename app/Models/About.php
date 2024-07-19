<?php

namespace App\Models;

use App\Traits\UserCreateByUpdatedBy;
use App\Traits\UserCreatedByAndUpdatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class About extends Model
{
    use HasFactory, UserCreateByUpdatedBy;
    protected $guarded = [];

    public function getImagePath($value)
    {
        return asset('storage/main_abouts_uploads/' . $value);
    }

    public function scopeActive($query)
    {
        return $query->whereStatus(1);
    }
}
