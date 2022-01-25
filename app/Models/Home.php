<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable =[
        'first_name','last_name','short_description','resume','phone_number','email','bg_img'
    ];
}
