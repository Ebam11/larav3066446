<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|unique:categories|max:255',
    ]);
    $category = new Category();
    $category->name = $request->name;
    $category->save();

    return redirect()->route('categories.index');
    }
}
