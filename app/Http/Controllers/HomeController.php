<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Favorites;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
        $categories = Category::all();
        $favorites = Favorites::all();
        $role = auth()->user()->role->id;

        if ($role == 1) {
            return view('pages.home.user');
        }

        if (request('search')) {
            $items = Item::where('items.name', 'like', '%' . request('search') . '%')->get();
        } else {
            $items = Item::all();
        }
        return view('pages.home.student', compact('categories', 'items', 'favorites'));

    }

    public function addToCart($id)
    {
        $item = Item::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $item->id,
                "name" => $item->name,
                "images" => $item->images,
                "ingredients" => $item->ingredients,
                "price" => $item->price,
                "category_name" => $item->category_name,
                "quantity" => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addToFavorites($id)
    {
        $items = Favorites::where('item_id', '=', $id)
            ->where('user_id', '=', auth()->user()->id)
            ->get();
        if (count($items) > 0) {
            foreach ($items as $item) {
                DB::table('favorites')->delete($item->id);
            }
            return redirect()->back()->with('success', 'Product successfully removed from favorites!');
        } else {
            Favorites::create([
                'user_id' => auth()->user()->id,
                'item_id' => $id,
            ]);
            return redirect()->back()->with('success', 'Product added to favorites successfully!');
        }
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
