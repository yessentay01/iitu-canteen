<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function users()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        $users = User::all();
        return view('pages.admin.users', compact('users'));
    }
    public function menu()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        $items = Item::all();
        return view('pages.admin.menu', compact('items'));
    }
    public function orders()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        return view('pages.admin.orders');
    }
    public function categories()
    {
        if (!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        $categories = Category::all();
        return view('pages.admin.categories', compact('categories'));
    }

}
