<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'slug', 'body'];

    // Lazy loading secara default, lakukan langsung di model nya. Pilih kolom mana yang mau di biki lazy loading.
    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class); // BelongsTo ke class User
    }

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query) :void
    {
        $query->where('title', 'like', '%' . request('search') . '%');
    }
}
