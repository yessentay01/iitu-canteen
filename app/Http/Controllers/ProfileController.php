<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
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
        $orders = Order::where('orders.user_id', '=', $user->id)->orderBy('created_at', 'desc')->get();
        return view('pages.profile', compact('user','orders'));
    }

    public function feedback($id){
        $order = Order::findOrFail($id);
        if ($order->status !== 'Issued'){
            return redirect('profile');
        }else {
            return view('pages.profile.feedback', compact('order'));
        }
    }

    public function feedbackStore(Request $request){

        Feedback::create([
            'order_id' => $request->order_id,
            'feedback' => $request->feedback
        ]);

        return redirect()->route('profile')->with('success', 'Feedback send successfully');
    }

    public function downloadReceipt($id){
        $order = Order::where( 'orders.order_id', '=', $id)->get();
        $pdf = PDF::loadView('pages.receipt', compact('order'),);
        return $pdf->download('receipt.pdf');
    }

    public function cancelOrder($id){
        $order = Order::find($id);
        $order->status = 'Cancelled';
        $order->save();
        return redirect()->route('profile')->with('success', 'Order cancelled successfully');
    }

    public function getOrder($id){
        $order = Order::where('order_id', '=', $id);
        return $order->price;
    }
}
