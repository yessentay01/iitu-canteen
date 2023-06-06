<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;
use App\Models\Item;
use App\Models\Order;
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
        if (!auth()->user()->role->id == 4 || !auth()->user()->role->id == 6 || !auth()->user()->role->id == 7 ) {
            return redirect()->route('home');
        }
        $users = User::all();
        return view('pages.admin.users', compact('users'));
    }


    public function menu()
    {
        if (!auth()->user()->role->id == 4 || !auth()->user()->role->id == 6 || !auth()->user()->role->id == 7 ) {
            return redirect()->route('home');
        }
        $items = Item::all();
        return view('pages.admin.menu', compact('items'));
    }

    public function menuAdd(){
        if (auth()->user()->role->id == 4 || auth()->user()->role->id == 6 || auth()->user()->role->id == 7 ) {
            $categories = Category::all();
            return view('pages.admin.menu.add', compact('categories'));
        }else {
            return redirect()->route('home');
        }

    }

    public function menuStore(Request $request){
        $request->validate([
            'name' => 'required',
            'category_name' => 'required',
            'price' => 'required',
            'is_publish' => 'required',
            'images' => 'required',
        ]);
        if ($request->images) {
            $photo_name = time() . "." . $request->images->getClientOriginalExtension();
            $request->images->storeAs('media/menu/', $photo_name, 'public');
        }
        Item::create([
            'name'=> $request->name,
            'images'=> $photo_name,
            'ingredients'=> $request->ingredients,
            'price'=> (int)$request->price,
            'category_id'=> (int)$request->category_name,
            'is_publish'=> (int)$request->is_publish,
            'university_id' => auth()->user()->university->id
        ]);
        return redirect()->route('admin.menu')->with('success', 'Product added successfully!');
    }

    public function menuEdit($id){
        if (auth()->user()->role->id == 4 || auth()->user()->role->id == 6 || auth()->user()->role->id == 7 ) {
            $item = Item::findorfail((int)$id);
            return view('pages.admin.menu.edit', compact('item'));
        }else{
            return redirect()->route('home');
        }


    }
    public function menuUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'is_publish' => 'required',
        ]);
        $item = Item::findorfail((int)$request->id);

        $item->name = $request->name;
        $item->price = $request->price;
        $item->ingredients = $request->ingredients;
        $item->is_publish = $request->is_publish;
        $item->save();
        return redirect()->route('admin.menu')->with('success', 'Product updated successfully!');

    }

    public function menuDelete($id){
        if (auth()->user()->role->id == 4 || auth()->user()->role->id == 6 || auth()->user()->role->id == 7 ) {
            $item = Item::findorfail((int)$id);
            $item->delete();
            return redirect()->route('admin.menu')->with('success', 'Product deleted successfully!');
        }else {
            return redirect()->route('home');
        }
    }

    public function feedback()
    {
        if (!auth()->user()->role->id == 4 || !auth()->user()->role->id == 6 || !auth()->user()->role->id == 7 ) {
            return redirect()->route('home');
        }
        $feedbacks = Feedback::join('orders', 'orders.order_id' , '=', 'feedback.order_id')
        ->join('users','users.id', '=', 'orders.user_id')
        ->select('users.name as name', 'users.email as email', 'feedback.order_id as order_id', 'feedback.feedback as feedback', 'feedback.created_at as created_at' )
        ->get();
        return view('pages.admin.feedbacks', compact('feedbacks'));
    }


    public function orders()
    {
        if (!auth()->user()->role->id == 4 || !auth()->user()->role->id == 6 || !auth()->user()->role->id == 7 ) {
            return redirect()->route('home');
        }

        $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.id as id','orders.order_id as order_id', 'users.name as name', 'orders.items as items', 'orders.card_number as card_number', 'orders.price as price', 'orders.time as time', 'orders.comment as comment', 'orders.status as status')
            ->get();
        return view('pages.admin.orders', compact('orders'));
    }

    public function orderEdit($id)
    {
        $order = Order::findOrFail($id);
        return view('pages.admin.orders.edit', compact('order'));
    }

    public function updateOrder(Request $request)
    {
        $order = Order::where('order_id', '=', $request->order_id)->first();
        $order->status = $request->status;
        $order->save();
        return redirect()->route('admin.orders');

    }

    public function categories()
    {
        if (!auth()->user()->role->id == 4 || !auth()->user()->role->id == 6 || !auth()->user()->role->id == 7 ) {
            return redirect()->route('home');
        }
        if(auth()->user()->role->id == 4 || auth()->user()->role->id == 6){
            $categories = Category::where('university_id', '=', auth()->user()->university->id)->get();
        }else{
            $categories = Category::all();
        }
        return view('pages.admin.categories', compact('categories'));
    }


}
