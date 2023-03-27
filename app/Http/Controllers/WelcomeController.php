<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $starters = Item::where('items.category_name', '=', '1')->get();
        $breakfasts = Item::where('items.category_name', '=', '2')->get();
        $lunches= Item::where('items.category_name', '=', '3')->get();
        $dinners = Item::where('items.category_name', '=', '4')->get();
        return view('welcome', compact('starters', 'breakfasts', 'lunches', 'dinners' ));
    }
}
