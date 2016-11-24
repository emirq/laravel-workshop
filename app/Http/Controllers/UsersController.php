<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function store()
    {

    	User::register([
    		'name' => 'Emir',
    		'email' => 'sk4yb3n@hotmail.com',
    		'password' => bcrypt('password')
    	]);
    }
}
