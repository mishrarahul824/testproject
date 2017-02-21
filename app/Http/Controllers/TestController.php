<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class TestController extends Controller
{
    public function test(){
    	$user = User::all();
        echo '<pre>';print_r($user[0]->name);
    }
}
