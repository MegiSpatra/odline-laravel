<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\User;

class TeamemberController extends Controller
{
    public function index()
    {
       // $this->load->model('User');
       // $data['row'] = $this->user-get();

      //  $this->template->load->('template', 'team-member/index', $data);
         view('team-member.index', [
            'title' => 'team-members',
            'active' => 'team-members'
        ]);
    }

}
