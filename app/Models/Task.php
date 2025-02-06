<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    public function goal(): BelongsTo
    {
        return $this->belongsTo(Goal::class);
    }
}
