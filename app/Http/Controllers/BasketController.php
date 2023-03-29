<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
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
        return view('pages.basket');
    }

    public function store(Request $request){
        $order_id = rand(pow(10, 5-1), pow(10, 5)-1);
        Order::create([
            'order_id' => $order_id,
            'items' => $request->items,
            'card_number' => $request->card_number,
            'cvv' => $request->cvv,
            'expiration_date' => $request->expiration_date,
            'date' => $request->date,
            'time' => $request->time,
            'user_id' => auth()->user()->id,
            'price' => $request->price,
            'status' => 'Cooking',
            'comment' => $request->comment
        ]);
        Session::forget('cart');
        return redirect()->route('home')->with('success', 'Order created successfully');
    }
}
