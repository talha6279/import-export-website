<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use App\Models\CategoriesModel;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoriesModel::all();
        $authors = User::all(); // Adjust if your authors are stored differently
        return view('dashboard/blogs/add', compact('categories', 'authors'));
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
            'category_id' => 'required|string',
            'author_id' => 'required|string',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'required|image|mimes:jpeg,webp,png,jpg|max:2048',
        ]);
        // Create a new BlogModel instance
        $blog = new BlogModel();
        $blog->category_id = $request->category_id;
        $blog->author_id = $request->author_id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        // Handle file uploads
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs/featured-images'), $filename);
            $blog->featured_image = $filename;
        }

        

        // Save the blog post to the database
        $blog->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $blog = BlogModel::Paginate(30);
        return view('dashboard.blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (BlogModel::find($id))
        {
            $blog = BlogModel::find($id);

            // Get all categories for dropdown
            $categories = CategoriesModel::all();
            $author = User::all();

            // Return the edit form with the menu item and categories
            return view('dashboard.blogs.edit')->with(['blog' => $blog, 'categories' => $categories, 'author' => $author]);
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
            'category_id' => 'required|string',
            'author_id' => 'required|string',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'required|image|mimes:jpeg,webp,png,jpg|max:2048',
        ]);

        if (BlogModel::findOrFail($id)) {


            $blog = BlogModel::find($id);

            if ($request->hasFile('featured_image')) {

                if ($blog->featured_image && file_exists(public_path('uploads/blogs/featured-images' . $blog->featured_image))) {
                    unlink(public_path('uploads/blogs/featured-images' . $blog->featured_image));
                }


                // Handle file uploads
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs/featured-images'), $filename);
            $blog->featured_image = $filename;
        }
            }



            // Update the other fields
            $blog->category_id = $request->category_id;
            $blog->author_id = $request->author_id;
            $blog->title = $request->title;
            $blog->content = $request->content;

            $blog->update();

            return redirect()->back()->with('success', 'Blog updated successfully!');
        } else {
            return redirect()->back()->with('failure', 'Blog not found!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (BlogModel::find($id))
        {
            $blog = BlogModel::find($id);

            if ($blog->featured_image && file_exists(public_path('uploads/blogs/featured-images' . $blog->featured_image))) {
                unlink(public_path('uploads/blogs/featured-images' . $blog->featured_image));
            }

            if ($blog->delete())
            {

                return redirect()->back()->with('success', 'Item Trashed successfully!');
            }
        } else {
            return redirect()->back()->with('failure', 'Item not found!');
        }
    }
}
