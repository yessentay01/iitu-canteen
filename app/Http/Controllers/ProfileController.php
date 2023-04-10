<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProfileController extends Controller
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
        $user = auth()->user();
        $orders = Order::where('orders.user_id', '=', $user->id)->get();
        return view('pages.profile', compact('user','orders'));
    }

    public function downloadReceipt($id){
        $order = Order::where( 'orders.order_id', '=', $id)->get();
        $pdf = PDF::loadView('pages.receipt', compact('order'),);
        return $pdf->stream('receipt.pdf');
    }
}
