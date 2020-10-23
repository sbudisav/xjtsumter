<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

  public function path() {

    return route('blogpost', $this);
  }

  public function comments() {

    // Method post->comments() to return all of a posts comments
    return $this->hasMany(Comment::class);
  }

  protected $fillable = ['title', 'body'];
}
