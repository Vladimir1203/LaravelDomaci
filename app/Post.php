<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['naslov','text']; // defines the fields tha can be assignable and protects from mass-assingment
}
