<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait UserCreateByUpdatedBy
{
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by')->select($this->selectedFields());
    }

    public function editor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by')->select($this->selectedFields());
    }

    private function selectedFields(): array
   {
      return [
         'id',
         'role_id',
         'name',
         'email',
      ];
   }
}
