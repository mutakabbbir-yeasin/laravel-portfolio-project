<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;

class PortfolioPageController extends Controller
{
    public function index()
    {
        return view('backend.portfolio.create');
    }

    public function create()
    {
        return view('backend.portfolio.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required| string',
            'catagory' => 'required| string',
            'big_image' => 'required| image',
            'small_image' => 'required| image',
            'description' => 'required| string',
            'client' => 'required| string'
        ]);

        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->catagory = $request->catagory;
        $portfolio->description = $request->description;
        $portfolio->client = $request->client;

        $big_file = $request -> file('big_image');
        Storage::putFile('public/img/', $big_file);
        $portfolio-> big_image = "storage/img/". $big_file->hashName();

        $small_file = $request -> file('small_image');
        Storage::putFile('public/img/', $small_file);
        $portfolio-> small_image = "storage/img/". $small_file->hashName();

        $portfolio ->save();
        
        return redirect()-> route('admin.portfolio.create')->with('success','New Portfolio has been created successfully, Alhamdulillah');

    }

    public function list()
    {
        $portfolio = Portfolio::all();
        return view('backend.portfolio.list', compact('portfolio'));
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('backend.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required| string',
            'catagory' => 'required| string',
            'description' => 'required| string',
            'client' => 'required| string'
        ]);

        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->title;
        $portfolio->catagory = $request->catagory;
        $portfolio->description = $request->description;
        $portfolio->client = $request->client;

        if($request -> file('big_image')){
            $big_file = $request -> file('big_image');
            Storage::putFile('public/img/', $big_file);
            $portfolio-> big_image = "storage/img/". $big_file->hashName();
        }

        if($request -> file('small_image')){
            $small_file = $request -> file('small_image');
            Storage::putFile('public/img/', $small_file);
            $portfolio-> small_image = "storage/img/". $small_file->hashName();
        }
        
        $portfolio ->save();
        return redirect()-> route('admin.portfolio.list')->with('success','Portfolio has been updated successfully, Alhamdulillah');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        @unlink(public_path($portfolio-> big_image));
        @unlink(public_path($portfolio-> small_image));
        $portfolio-> delete();

        return redirect()-> route('admin.portfolio.list')->with('success','Portfolio has been deleted successfully, Alhamdulillah');
    }
}