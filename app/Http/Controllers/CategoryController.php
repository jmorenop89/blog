<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // Metodo que retorna todos los registros
        #$models = Category::all();
        // Metodo para usar paginacion de datos
        $models = Category::paginate(3);
        return view('category.index',compact('models'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(CategoryRequest $request){
        /*$request->validate([
            'name' => 'required|digits:8'
        ]);*/
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $model = Category::create($data);
        #dd($model);
        return redirect()->route('category.index');
    }

    public function edit($id){
        $model = Category::findOrFail($id);
        #dd($model);
        return view('category.edit',compact('model'));
    }

    public function update(CategoryRequest $request,$id){
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
