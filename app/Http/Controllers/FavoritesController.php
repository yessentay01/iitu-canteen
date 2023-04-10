<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = DB::table('items')
            ->join('favorites', 'items.id', '=', 'favorites.item_id')
            ->where('favorites.user_id' , '=', auth()->user()->id)
            ->select('items.id', 'items.name', 'items.price', 'items.images', 'items.ingredients','items.category_name','items.is_publish')
            ->get();
        return view('pages.favorites', compact('items'));
    }
}
