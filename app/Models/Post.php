<?php
// app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
use HasFactory;

// Models: Define the structure and behavior of the Post model

// URL Generation: Define the fillable fields to allow mass assignment
protected $fillable = [
'title', 'content', 'author',
];
}
