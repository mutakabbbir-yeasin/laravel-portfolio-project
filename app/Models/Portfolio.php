<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable =[
        'title','catagory', 'big_image', 'small_image', 'description', 'client'
    ];
} 
