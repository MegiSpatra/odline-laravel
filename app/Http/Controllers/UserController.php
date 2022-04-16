<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

// class UserController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index(Request $request)
//     {
//         $data['title'] = 'team-members';
//         $data['active'] = 'team-members';
//         $data['q'] = $request->q;
//         $data['rows'] = User::where('name', 'like', '%' . $request->q . '%')->get();
//         return view('dashboard.team-members.index', $data);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create(Request $request)
//     {
//         $data['title'] = 'Tambah User';
//         $data['levels'] = ['admin' => 'Admin', 'user' => 'User'];
//         return view('dashboard.addmember', $data);
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'nama_user' => 'required',
//             'email' => 'required|unique:user',
//             'password' => 'required',
//             'level' => 'required',
//         ]);

//         $user = new User();
//         $user->name = $request->name;
//         $user->email = $request->email;
//         $user->password = Hash::make($request->password);
//         $user->level = $request->level;
//         $user->save();
//         return redirect('team-members')->with('success', 'Tambah Data Berhasil');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\User  $user
//      * @return \Illuminate\Http\Response
//      */
//     public function show(User $user)
//     {
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\User  $user
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(User $user)
//     {
//         $data['title'] = 'Ubah User';
//         $data['row'] = $user;
//         $data['levels'] = ['admin' => 'Admin', 'user' => 'User'];
//         return view('dashboard.team-members.edit', $data);
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\User  $user
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, User $user)
//     {
//         $request->validate([
//             'name' => 'required',
//             'email' => 'required',
//             'level' => 'required',
//         ]);

//         $user->name = $request->name;
//         $user->email = $request->email;
//         if ($request->password)
//             $user->password = Hash::make($request->password);
//         $user->level = $request->level;
//         $user->save();
//         return redirect('team-members')->with('success', 'Ubah Data Berhasil');
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\User  $user
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(User $user)
//     {
//         $user->delete();
//         return redirect('team-members')->with('success', 'Hapus Data Berhasil');
//     }
// }