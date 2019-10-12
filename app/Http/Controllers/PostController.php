<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $models = Post::all();
        return view('post.index',compact('models'));
    }

    public function create(){
        $categories = Category::all();
        return view('post.create',compact('categories'));
    }

    public function store(Request $request){
        $data = $request->all();
        $data['slug'] = str_slug($data['title']);
        $data['status'] = 1;
        $model = Post::create($data);
        return redirect()->route('post.index');
    }

    public function edit($id){
        $model = Category::findOrFail($id);
        return view('category.edit',compact('model'));
    }

    public function update(Request $request,$id){
        $model = Category::findOrFail($id);
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $model->update($data);
        /* Otro modo de como actualizar lo datos */
        #$model->fill($data);
        #$model->save();
        /* */
        return redirect()->route('category.index');
    }

    public function delete($id){
        $model = Category::find($id);
        $model->delete();
        return redirect()->route('category.index');
    }
}
