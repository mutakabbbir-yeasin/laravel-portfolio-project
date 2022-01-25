<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable =[
        'designation','description','name','address','whatsapp','dob','email','skype','hours','projects','years','client','my_img'
    ];
} 
