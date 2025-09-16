<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'body'];
}
