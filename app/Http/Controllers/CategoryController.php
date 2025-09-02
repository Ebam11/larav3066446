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

    public function create()
    {
        // 👉 Aquí definimos las sugerencias
        $suggested = ['Arte', 'Deporte', 'Tecnología', 'Turismo', 'Ciencia'];
        return view('categories.create', compact('suggested'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')
                         ->with('success', 'Categoría creada exitosamente');
    }
}
