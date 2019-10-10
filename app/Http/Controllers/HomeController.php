<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $categories = DB::table('category')->get();
        $categories = DB::table('category')
            ->select('id','name','slug')
            ->get();
        $categories = DB::table('category')
            ->where('name','like','%e%')
            ->get();
        #dd($categories);
        return view('index',compact('categories'));
    }

    public function about(){
        $categories = Category::all();
        $categories = Category::all('id','name','slug');
        $categories = Category::where('name','like','%e%')
            ->get();
        #dd($categories);
        return view('about',compact('categories'));
    }

    public function contact(){
        return view('contact');
    }
}
