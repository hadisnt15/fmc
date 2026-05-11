<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','slug','content','thumbnail','images','is_published','published_at'
    ];

    protected $casts = [
        'images' => 'array',
        'content' => 'array',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
