<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index(){
        return view('user.apply.index');
    }

    public function indexOnlineApply(){
        return view('user.apply.onlineApply');
    }
}
