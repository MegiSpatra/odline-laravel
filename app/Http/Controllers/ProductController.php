<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'product';
        $data['active'] = 'product';
        $data['q'] = $request->q;
        // $data['rows'] = User::find(Auth::user()->id)->member;
        //dd($data['rows']);
        $data['rows'] = Product::where('name', 'like', '%' . $request->q . '%')->get();
        return view('dashboard.product', $data);
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
            'price' => 'required',
            'COGS' => 'required',
            'order' => 'required',
            'paidratio' => 'required',
            'qtysold' => 'required',
            'netrevenue' => 'required'
        ]);
       
         
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->COGS = $request->COGS;
        $product->inventory = $request->inventory;
        $product->order = $request->order;
        $product->paidratio = $request->paidratio;
        $product->qtysold = $request->qtysold;
        $product->netrevenue = $request->netrevenue;
        //  dd( $request->all());
        $product->save();
        return redirect('product')->with('success', 'Tambah Data Berhasil');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
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
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('product')->with('success', 'Hapus Data Berhasil');
    }
}