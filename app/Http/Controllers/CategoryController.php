<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::all();
            return DataTables::of($data)
                ->addColumn('actions', function ($data) {
                    return view('categories.actions', ['data' => $data]);
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('categories.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('categories.index')->with('success', 'Categoría creada con exito');
    }

    public function edit($category)
    {
        $category = Category::find($category);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $category)
    {
        $category = Category::find($category);
        $category->update([
            'name' => $request->name
        ]);
        return redirect()->route('categories.index')->with('success', 'Categoría actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        $data = Category::find($category);
        $data->delete();
        return redirect()->route('categories.index')->with('success', 'Categoría eliminada con exito');
    }
}
