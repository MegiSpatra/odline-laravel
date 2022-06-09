<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'dashboard';
       $data['active'] = 'dashboard';
       $data['q'] = $request->q;
     $data['rows'] = Product::where('name', 'like', '%' . $request->q . '%')->get();
       return view('dashboard.dashboardd', $data);
   }

  
   

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('akun')->with('success', 'Hapus Data Berhasil');
    }
}


