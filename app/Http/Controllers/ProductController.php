<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'addproduct';
        $data['active'] = 'addproduct';
        $data['q'] = $request->q;
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
            'price' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->COGS = $request->COGS;
        $product->inventory = $request->inventory;
        $product->order = $request->order;
        $product->paid = $request->paid;
        $product->paidratio = $request->paidratio;
        $product->qtysold = $request->qtysold;
        $product->netrevenue = $request->netrevenue;
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
    // public function edit(Product $product)
    // {
    //     $data['title'] = 'Ubah User';
    //     $data['active'] = 'Ubah User';
    //     $data['row'] = $product;
    //     $data['levels'] = ['admin' => 'Admin', 'user' => 'User'];
    //     return view('dashboard.team-members.edit', $data);
    // }

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