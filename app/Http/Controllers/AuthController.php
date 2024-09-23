<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('dashboard/authentication/register', compact('randomCategory', 'categories'));
    }
    public function dashboard()
{
    
     return view('dashboard/dashboard');
    
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
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => 'required|min:6',
        ]);
        if (User::create($data)) {
            return redirect()->route('user.login')->with(['success' => 'User registered successfully']);
        }
    }

    public function login_form()
    {
        $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = ProductCategory::all();
        return view('dashboard.authentication.login', compact('randomCategory', 'categories'));
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($data)) {
            $user = Auth::user(); // Get the authenticated user

        // Store the user in session
        session(['user' => $user]);
            return redirect()->route('website')->with(['success' => 'User logged in successfully']);
        } else {
            return redirect()->route('user.login')->with(['error' => 'Invalid credentials']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::all();
        return view('dashboard/authentication/show')->with(['users' => $users]);
    }
    public function profile()
    {
        // $user = Auth::user(); // Get the currently authenticated user
        // $user = Auth::user();
        // Check if the user is logged in
    if (!session()->has('user')) {
        // If not logged in, redirect to the login page
        return redirect()->route('user.login');
    }

    // If logged in, retrieve the user from the session or however you're storing it
    $user = session('user'); 
        return view('dashboard/authentication/profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login')->with(['success' => 'User logged out successfully']);
    }
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('dashboard\authentication\edit')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if(!$user)
         {
            return redirect()->route('user.show')->with(['error' => 'User not found']);
         }

        $data = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:255'],
            'password' => 'required|min:6',
            'usertype' => 'required',
        ]);
        $user->usertype = $data['usertype'];
        $user->save();


        if($user->update($data))
        {

            return redirect()->route('user.show')->with(['success' => 'User updated successfully']);

        }
        else
        {
            return redirect()->route('user.show')->with(['error' => 'User not updated']);
        }
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);



        if($user) {
            $user->delete();
            return redirect()->route('user.show')->with(['success' => 'User deleted successfully']);
        } else {
            return redirect()->route('user.show')->with(['error' => 'User not found']);
        }
    }
}
