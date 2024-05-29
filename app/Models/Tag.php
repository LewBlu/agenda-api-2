<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Relationships - BelongsTo
    public function issue() {
        return $this->belongsTo(Issue::class);
    }
}
