<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

 class ProfileController extends Controller
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
         $data['title'] = 'profile';
        $data['active'] = 'profile';
        $data['q'] = $request->q;
        
      $data['rows'] = User::where('name', 'like', '%' . $request->q . '%')->get();
        return view('akun.profile', $data);
    }
 }
