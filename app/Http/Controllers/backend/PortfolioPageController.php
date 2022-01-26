<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function index()
    {
        return view('backend.portfolio.create');
    }

    public function store()
    {
        return view('backend.portfolio.create');
    }

    public function create()
    {
        return view('backend.portfolio.create');
    }
}
