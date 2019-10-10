<?php

namespace App\Http\Controllers;

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
        dd($categories);
        return view('index',compact('categories'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
