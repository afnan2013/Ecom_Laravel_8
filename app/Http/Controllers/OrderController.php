<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function place_order(Request $request)
    {
        //return $request->post();
        $random_number = rand();

        $order = new Order();
        $order->fname = $request->post('fname');
        $order->lname = $request->post('lname');
        $order->email = $request->post('email');
        $order->phone = $request->post('phone');
        $order->add = $request->post('add');
        $order->zip_code = $request->post('zip_code');
        $order->city = $request->post('city');
        $order->country = $request->post('country');
        $order->bill = $request->post('bill');
        $order->order_id = $random_number;
        $order->user_id = session('USER_ID');
        $order->delivery = 'false';

        $order->save();

        $data = Cart::where(['user_id'=>session('USER_ID'), 'order_active'=>'false'])
                        ->update(['order_active' => 'true', 'order_id'=>$random_number]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Order $order)
    {
        //
    }
}
