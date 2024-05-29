<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    use HasFactory;

    // Relationships - BelongsTo
    public function assignee() {
        return $this->belongsTo(User::class);
    }

    public function owner() {
        return $this->belongsTo(User::class);
    }

    // Relationships - HasMany
    public function tags() {
        return $this->hasMany(Tag::class);
    }
}
