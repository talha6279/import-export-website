<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/category/add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);
        $category = new CategoriesModel;
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category = CategoriesModel::all();
        return view('dashboard/category/show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = CategoriesModel::find($id);
        return view('dashboard\category\edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        // Find the category by its ID
        $category = CategoriesModel::find($id);

        // Update the category name
        $category->name = $request->name;
        $category->description = $request->description;

        // Save the updated category details to the database
        $category->save();

        // Redirect to the index page with a success message
        return redirect()->route('category.show')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = CategoriesModel::find($id);

        // Check if there are any menus associated with this category
        // $menusWithCategory = MenuModel::where('category_id', $id)->exists();

        // if ($menusWithCategory) {
        //     return redirect()->back()->with('failure' ,'This category cannot be deleted because it is associated with one or more menu items');
        // }
        $cat->delete();

        return redirect()->back()->with('success', 'Category Deleted successfully!');
    }
}
