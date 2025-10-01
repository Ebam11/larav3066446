<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    //desplegar el formulario
    public function create()
    {
        $suggested = ['Arte', 'Deporte', 'Tecnología', 'Turismo', 'Ciencia'];
        return view('categories.create', compact('suggested'));
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;

        //ADJUNTAR LA IMAGEN
        $file = $request->file("urlImg");

        $nombreArchivo = "img_".time().".".$file->guessExtension();

        //guardado del archivo
        $request->file('urlImg')->storeAs('public/images', $nombreArchivo);

        $category->urlImg = $nombreArchivo;
        $category->save();
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    { //encontrar la categoria por el ID
        return view('categories.show', compact('category'));
    }

    //Destroy
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    { //Encuentro la Categoria
        return view('categories.edit', compact('category'));
    }

    //Update
    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index');
    }
}
