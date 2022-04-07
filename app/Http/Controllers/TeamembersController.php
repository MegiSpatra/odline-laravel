<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamembersController extends Controller
{
    public function index()
    {
        return view('team-members.index', [
            'title'=>'team-members',
            'active'=> 'team-members'
        ]);
    }
}
