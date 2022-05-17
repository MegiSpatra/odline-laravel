<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
    public function index(){
        return view('daftar.index', [
            'title'=>'daftar',
            'active'=>'daftar'
        ]);
    }

    public function store(Request $request)
    {
       $validateData = $request->validate([
            'name'=> 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|min:4|max:255',
            'NoTelephone' => 'required|min:10|max:14',
            'password' => 'required|min:8|max:255',
            
        ]);
        //$validateData['password'] = bcrypt($validateData['password']);
        //encripsi password
        $validateData['password'] = Hash::make($validateData['password']);
        
        User::create($validateData);
        $request->session()->flash('berhasil', 'Berhasil terdaftar! Silahkan Login');
        return redirect('dashboard'); 
        
    }
}
