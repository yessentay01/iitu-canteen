<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $items = Item::all();
        $orders = Order::all();

        $starters = Item::where('items.category_id', '=', '1')->get();
        $breakfasts = Item::where('items.category_id', '=', '2')->get();
        $lunches= Item::where('items.category_id', '=', '3')->get();
        $dinners = Item::where('items.category_id', '=', '4')->get();
        return view('welcome2', compact('starters', 'breakfasts', 'lunches', 'dinners', 'users', 'items', 'orders' ));
    }
}
