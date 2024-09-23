<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = ProductCategory::all();
        return view('dashboard.products.add')->with('product', $product);
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
        // dd($request->all());

        $request->validate([
            'itemname' => 'required|string|max:255',
            'detail' => 'required',
            'price' => 'required|numeric|min:0',
            'discounted_price' => 'required|numeric|min:0',
            'product_id' => 'required',
            'description' => 'nullable',
            'picture' => 'required|image|mimes:jpeg,webp,png,jpg,gif,webp|max:4048', // Validate the image file
            'picture1' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture2' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture3' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'color' => 'required|string',
        ]);

        // Handle the picture upload if a file is provided
        $picturePath = null;
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureName = time() .uniqid() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploads/products/images'), $pictureName);
            $picturePath = 'uploads/products/images/' . $pictureName; // Store relative path
        }
        // Handle the picture upload if a file is provided
        $picturePath1 = null;
        if ($request->hasFile('picture1')) {
            $picture1 = $request->file('picture1');
            $pictureName1 = time() .uniqid() . '.' . $picture1->getClientOriginalExtension();
            $picture1->move(public_path('uploads/products/images'), $pictureName1);
            $picturePath1 = 'uploads/products/images/' . $pictureName1; // Store relative path
        }
        // Handle the picture upload if a file is provided
        $picturePath2 = null;
        if ($request->hasFile('picture2')) {
            $picture2 = $request->file('picture2');
            $pictureName2 = time() .uniqid() . '.' . $picture2->getClientOriginalExtension();
            $picture2->move(public_path('uploads/products/images'), $pictureName2);
            $picturePath2 = 'uploads/products/images/' . $pictureName2; // Store relative path
        }
        // Handle the picture upload if a file is provided
        $picturePath3 = null;
        if ($request->hasFile('picture3')) {
            $picture3 = $request->file('picture3');
            $pictureName3 = time() .uniqid() . '.' . $picture3->getClientOriginalExtension();
            $picture3->move(public_path('uploads/products/images'), $pictureName3);
            $picturePath3 = 'uploads/products/images/' . $pictureName3; // Store relative path
        }



        // Create a new ProductModel instance with validated data
$product = new ProductModel([
    'itemname' => $request->input('itemname'),
    'detail' => $request->input('detail'),
    'price' => $request->input('price'),
    'color' => $request->input('color'),
    'description' => $request->input('description'),
    'product_id' => $request->input('product_id'),
    'in_stock' => $request->input('in_stock'),
    'discounted_price' => $request->input('discounted_price'),
    'picture' => $picturePath,        // Ensure this is set correctly earlier
    'picture1' => $picturePath1,      // Ensure this is set correctly earlier
    'picture2' => $picturePath2,      // Ensure this is set correctly earlier
    'picture3' => $picturePath3,      // Ensure this is set correctly earlier
]);

        // Save the instance to the database
        $product->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function trashshow()
    {
        $product = ProductModel::onlyTrashed()->get();
        return view('dashboard.products.trash')->with('product', $product);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = ProductModel::Paginate(30);
        return view('dashboard.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the menu item by ID
        if (ProductModel::find($id))
        {
            $product = ProductModel::find($id);

            // Get all categories for dropdown
            $categories = ProductCategory::all();

            // Return the edit form with the menu item and categories
            return view('dashboard.products.edit')->with(['product' => $product, 'categories' => $categories]);
        } else {
            return redirect()->back()->with('failure', 'Menu item not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'itemname' => 'required|string|max:255',
            'detail' => 'required',
            'price' => 'required|numeric|min:0',
            'discounted_price' => 'required|numeric|min:0',
            'product_id' => 'required',
            'description' => 'nullable',
            'picture' => 'required|image|mimes:jpeg,webp,png,jpg,gif,webp|max:4048', // Validate the image file
            'picture1' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture2' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture3' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'color' => 'required|string',
        ]);
         // Find the product by ID
    $product = ProductModel::findOrFail($id);

    // Update basic fields
    $product->itemname = $request->input('itemname');
    $product->detail = $request->input('detail');
    $product->price = $request->input('price');
    $product->discounted_price = $request->input('discounted_price');
    $product->product_id = $request->input('product_id');
    $product->color = $request->input('color');
    $product->description = $request->input('description');

    // Handle file uploads and update picture paths
    
    if ($request->hasFile('picture')) {
        // Delete the old picture if exists
        if ($product->picture && file_exists(public_path($product->picture))) {
            unlink(public_path($product->picture));
        }
        // Store the new picture
        $picturePath = "";
        $picture = $request->file('picture');
        $pictureName = time() .uniqid() . '.' . $picture->getClientOriginalExtension();
        $picture->move(public_path('uploads/products'), $pictureName);
        $picturePath = 'uploads/products/' . $pictureName; // Store relative path
    }

    
    if ($request->hasFile('picture1')) {
        if ($product->picture1 && file_exists(public_path($product->picture1))) {
            unlink(public_path($product->picture1));
        }
        $picturePath1 = "";
        $picture1 = $request->file('picture1');
        $pictureName1 = time() .uniqid() . '.' . $picture1->getClientOriginalExtension();
        $picture1->move(public_path('uploads/products/'), $pictureName1);
        $picturePath1 = 'uploads/products/' . $pictureName1; // Store relative path
    }

    
    if ($request->hasFile('picture2')) {
        if ($product->picture2 && file_exists(public_path($product->picture2))) {
            unlink(public_path($product->picture2));
        }
        $picturePath2 = "";
        $picture2 = $request->file('picture2');
        $pictureName2 = time() .uniqid() . '.' . $picture2->getClientOriginalExtension();
        $picture2->move(public_path('uploads/products'), $pictureName2);
        $picturePath2 = 'uploads/products/' . $pictureName2; // Store relative path    
    }

    
    if ($request->hasFile('picture3')) {
        if ($product->picture3 && file_exists(public_path($product->picture3))) {
            unlink(public_path($product->picture3));
        }
        $picturePath3 = "";
        $picture3 = $request->file('picture3');
        $pictureName3 = time() .uniqid() . '.' . $picture3->getClientOriginalExtension();
        $picture3->move(public_path('uploads/products'), $pictureName3);
        $picturePath3 = 'uploads/products/' . $pictureName3; // Store relative path    
    }

    // Save the updated product
    $product->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Product updated successfully!');
    }
    
    public function restore(string $id)
    {
        // Retrieve the soft-deleted item
        $product = ProductModel::withTrashed()->find($id);
    
        if($product)
        {
            if ($product->restore())
            {
                return redirect()->back()->with('success', 'Product restored successfully!');
            } else {
                return redirect()->back()->with('failure', 'Product to restore the item.');
            }
        } else {
            return redirect()->back()->with('failure', 'Item not found!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the menu item by ID
        if (ProductModel::find($id))
        {
            $product = ProductModel::find($id);

            if ($product->delete())
            {

                return redirect()->back()->with('success', 'Product Trashed successfully!');
            }
        } else {
            return redirect()->back()->with('failure', 'Product not found!');
        }

    }


    public function permdeleted(string $id)
{
    $product = ProductModel::withTrashed()->find($id);

    if ($product) {
        // Delete the pictures if they exist
        $pictures = [$product->picture, $product->picture1, $product->picture2, $product->picture3];

        foreach ($pictures as $picture) {
            if ($picture && file_exists(public_path($picture))) {
                unlink(public_path($picture));
            }
        }

        // Force delete the product
        if ($product->forceDelete()) {
            return redirect()->back()->with('success', 'Product deleted successfully!');
        } else {
            return redirect()->back()->with('failure', 'Failed to delete product!');
        }
    } else {
        return redirect()->back()->with('failure', 'Product not found!');
    }
}

}
