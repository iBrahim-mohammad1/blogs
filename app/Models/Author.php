<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
