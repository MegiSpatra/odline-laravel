<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamembersController extends Controller
{
    public function index()
    {
        return view('dashboard.team-members.team_members', [
            'title'=>'team-members',
            'active'=> 'team-members'
        ]);
    }
}
