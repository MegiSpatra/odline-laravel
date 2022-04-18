<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'team-members';
        $data['active'] = 'team-members';
        $data['q'] = $request->q;
        $data['rows'] = Member::where('name', 'like', '%' . $request->q . '%')->get();
        return view('dashboard.team-members.index', $data);
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
            'email' => 'required|unique:members',
            'password' => 'required',
            'level' => 'required',
        ]);

        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->level = $request->level;
        $member->save();
        return redirect('team-members')->with('success', 'Tambah Data Berhasil');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $data['title'] = 'Ubah User';
        $data['active'] = 'Ubah User';
        $data['row'] = $member;
        $data['levels'] = ['admin' => 'Admin', 'user' => 'User'];
        return view('dashboard.team-members.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'level' => 'required',
        ]);

        $member->name = $request->name;
        $member->email = $request->email;
        if ($request->password)
            $member->password = Hash::make($request->password);
        $member->level = $request->level;
        $member->save();
        return redirect('team-members')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect('team-members')->with('success', 'Hapus Data Berhasil');
    }
}