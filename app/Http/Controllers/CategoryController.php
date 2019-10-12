<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $models = Category::all();
        return view('category.index',compact('models'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $model = Category::create($data);
        #dd($model);
        return redirect()->route('category.index');
    }

    public function edit(){
        return view('category.edit');
    }
}
