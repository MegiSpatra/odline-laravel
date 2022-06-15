<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'orders';
        $data['active'] = 'orders';
        $data['q'] = $request->q;
        // $data['rows'] = User::find(Auth::user()->id)->member;
        //dd($data['rows']);
        $data['cols'] = Order::where('name', 'like', '%' . $request->q . '%')->get();
        return view('dashboard.orders', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'status' => 'required',
            'paymentstatus' => 'required',
            'date' => 'required',
            'grossrevenue' => 'required',
            'follow_up' => 'required',
            'actions' => 'required'
        ]);
         
        $order = new Order();
        $order->id_orders = $request->id_orders;
        $order->name = $request->name;
        $order->city = $request->city;
        $order->status = $request->status;
        $order->paymentstatus = $request->paymentstatus;
        $order->date = $request->date;
        $order->grossrevenue = $request->grossrevenue;
        $order->follow_up = $request->follow_up;
        $order->actions = $request->actions;
        //  dd( $request->all());
        $order->save();
        return redirect('orders')->with('success', 'Tambah Data Berhasil');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('orders')->with('success', 'Hapus Data Berhasil');
    }
}