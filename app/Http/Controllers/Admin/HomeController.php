<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Review;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $productCount = Product::all()->count();
        $userCount = User::all()->count();
        $orderCount = Order::all()->count();
        $messageCount = Message::all()->count();
        $data = [
            'pCount' => $productCount,
            'uCount' => $userCount,
            'oCount' => $orderCount,
            'mCount' => $messageCount,


        ];
        return view('admin.index', $data);
    }

}
