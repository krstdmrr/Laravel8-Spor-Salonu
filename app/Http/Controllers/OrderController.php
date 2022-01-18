<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Order::where('user_id',Auth::id())->get();

        return view('home.user_order',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('home.user_order_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Order;
        $data->user_id=Auth::id();
        $data->product_id=$request->input('product_id');
        $months =$request->input('months');
        $data->months =$request->input('months');
        $data->Startdate= $request->input('Startdate');
        $finish=new Carbon($request->input('Startdate'));
        $data->Finishdate=$finish->addMonths($months);
        //$data->Finishdate= $data->Finishdate->addMonths($months);
        //$data->Finishdate= strtotime("+$months months",$data->Finishdate);
        $data->price = $request->input('price');
        $data->total = $request->input('total');
        $data->IP=$_SERVER['REMOTE_ADDR'];
        $data->payment=$request->input('payment');
        $data->trainer=$request->input('trainer');
        $data->note="";

        $data->save();

        return redirect()->route('user_orders')->with('success','Product Order Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order,$id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Order Deleted');
    }
}
