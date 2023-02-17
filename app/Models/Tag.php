<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function getHashtagAttribute(): string {
        return '#' . $this->name;
    }

    public function articles(): BelongsToMany {
        return $this->belongsToMany(Article::class)->withTimestamps();
    }
}
