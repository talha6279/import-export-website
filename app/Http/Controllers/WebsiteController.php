<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BlogModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CategoriesModel;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;


class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $categories = ProductCategory::all();
    $random = ProductModel::inRandomOrder()->get();
    
    // Eager load categories with their related products
    $category = ProductCategory::with('products')->get();
    
    // Retrieving 8 latest products for bags and gloves
    $bags = ProductModel::where('product_id', '2')->latest()->take(8)->get();
    $gymwear = ProductModel::where('product_id', '4')->latest()->take(8)->get();
    $sportswear = ProductModel::where('product_id', '5')->latest()->take(8)->get();
    $gloves = ProductModel::where('product_id', '3')->latest()->take(8)->get();
    $leatherProducts = ProductModel::where('product_id', '6')->latest()->take(6)->get();
    
    // Retrieving random products
    $randomProducts = ProductModel::where('product_id', '3')->inRandomOrder()->take(4)->get();
    
    // Retrieving a single random gymwear and sportswear
    $gymwear1 = ProductModel::where('product_id', '4')->inRandomOrder()->first();
    $bag1 = ProductModel::where('product_id', '2')->inRandomOrder()->first();
    $sportswear1 = ProductModel::where('product_id', '5')->inRandomOrder()->first();
    $leather1 = ProductModel::where('product_id', '6')->inRandomOrder()->first();
    
    // Retrieving other random items
    $randomProduct = ProductModel::where('product_id', '2')->inRandomOrder()->take(4)->get();
    $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
    $randomrandom = ProductModel::inRandomOrder()->take(3)->get();
    $randomBags = ProductModel::where('product_id', '2')->inRandomOrder()->take(3)->get();
    $randomLeather = ProductModel::where('product_id', '6')->inRandomOrder()->take(3)->get();
    $blog = BlogModel::latest()->take(5)->get();
    
    return view('website/website')->with([
        'blog' => $blog,
        'bags' => $bags,
        'gloves' => $gloves,
        'gymwear' => $gymwear,
        'gymwear1' => $gymwear1,
        'sportswear' => $sportswear,
        'sportswear1' => $sportswear1,
        'categories' => $categories,
        'category' => $category,
        'random' => $random,
        'randomrandom' => $randomrandom,
        'randomCategory' => $randomCategory,
        'randomProduct' => $randomProduct,
        'randomProducts' => $randomProducts,
        'randomBags' => $randomBags,
        'randomLeather' => $randomLeather,
        'leatherProducts' => $leatherProducts,
        'bag1' => $bag1,
        'leather1' => $leather1,
    ]);
}

   
    public function index2()
    {
        $product= ProductModel::all();
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/index2', compact('randomCategory', 'categories', 'product'));
    }
    public function index3()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/index3', compact('randomCategory', 'categories'));
    }
    public function index4()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/index4', compact('randomCategory', 'categories'));
    }
    public function index5()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/index5', compact('randomCategory', 'categories'));
    }
    public function contact()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/contact', compact('randomCategory', 'categories'));
    }
    
    public function shop()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        $randomProduct = ProductModel::inRandomOrder()->take(4)->get();
        $products = ProductModel::inRandomOrder()->Paginate(12);
        return view('website/shop', compact('categories','randomProduct', 'products','randomCategory'));
    }
    
    public function productdetails(string $id)
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        $product = ProductModel::find($id);
        $category = ProductCategory::find($product->product_id); // Assuming `category_id` exists in the product table 
         // Fetch related products from the same category, excluding the current product
    $relatedProducts = ProductModel::where('product_id', $product->product_id)->latest()->take('8')->get(); // Exclude the current product
          
        return view('website/product-detail', compact('product', 'category', 'relatedProducts', 'randomCategory', 'categories'));
    }
    public function shopcategory()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        $randomProducts = ProductModel::inRandomOrder()->take(12)->get();
        $oneProducts = ProductModel::inRandomOrder()->latest()->take(3)->get();
        return view('website/shop-category', compact('randomProducts','oneProducts', 'categories', 'randomCategory'));
    }
    // public function blogdetails(string $id)
    // {
    //     $blogs = BlogModel::find($id);
    //     $category = CategoriesModel::find($blogs->category_id);
    //     $author = User::find($blogs->author_id);
    //     $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
    //     $categories = ProductCategory::all();
    //     return view('website/blog-details', compact('randomCategory', 'categories', 'category', 'blogs', 'author'));
    // }
    public function blog()
    {
        $blogs = BlogModel::Paginate(5);
        $blogs1 = BlogModel::latest()->take(3)->get();
        $category = CategoriesModel::all();
        $user = User::all();
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/blog', compact('randomCategory', 'categories', 'blogs', 'blogs1', 'category', 'user'));
    }
    public function cart()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/cart', compact('randomCategory', 'categories'));
    }
    public function about()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('website/about', compact('randomCategory', 'categories'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
