<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = [];

  public function path() {

    return route('blogpost', $this);
  }

  public function comments() {

    // Method post->comments() to return all of a posts comments
    return $this->hasMany(Comment::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  // protected $fillable = ['title', 'body'];
}
