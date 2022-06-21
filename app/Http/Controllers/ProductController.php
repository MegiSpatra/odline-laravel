<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\TableRows;

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
            'gambar' => 'required',
            'name' => 'required',
            'price' => 'required',
            'COGS' => 'required',
            'order' => 'required',
            'paidratio' => 'required',
            'qtysold' => 'required',
            'netrevenue' => 'required'
        ]);
       
         
        $product = new Product();
        $product->gambar = $request->gambar;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->COGS = $request->COGS;
        $product->inventory = $request->inventory;
        $product->order = $request->order;
        $product->paidratio = $request->paidratio;
        $product->qtysold = $request->qtysold;
        $product->netrevenue = $request->netrevenue;
         //dd( $request->all());
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
    public function proses_upload(Request $request){
		$product  = Product::create($request->all());
       if($request->hasFile('gambar')){
        $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
        $product->gambar = $request->file('gambar')->getClientOriginalName();
        $product->save();
       }
       return redirect()->route ('product')->with('success','Data Berhasil Di Tambahkan');


		// // menyimpan data file yang diupload ke variabel $file
		// $product = $request->gambar('gambar');
 
      	//         // nama file
		// echo ' Name: '.$product->getClientOriginalName();
		// echo '<br>';
 
      	//         // ekstensi file
		// echo 'File Extension: '.$product->getClientOriginalExtension();
		// echo '<br>';
 
      	//         // real path
		// echo 'File Real Path: '.$product->getRealPath();
		// echo '<br>';
 
      	//         // ukuran file
		// echo 'File Size: '.$product->getSize();
		// echo '<br>';
 
      	//         // tipe mime
		// echo 'File Mime Type: '.$product->getMimeType();
 
      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'data_file';
 
        //         // upload file
		// $product->move($tujuan_upload,$product->getClientOriginalName());
	}
}