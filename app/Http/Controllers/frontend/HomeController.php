<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Service;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index(){
        $home = Home::first();
        $about = About::first();
        $service = Service::all();
        $faq = Faq::all();
        return view('frontend.index', compact('home','service','about','faq'));
    } 
} 

