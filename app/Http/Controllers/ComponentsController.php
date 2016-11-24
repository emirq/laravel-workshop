<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ComponentsController extends Controller
{
	public function welcome()
	{
		return view('welcome');
	}

    public function forms()
    {
    	return view('form');
    }

    public function valueObjects()
    {
    	$p = new \App\Performance;
    	$p->revenue = 8600;
    	dd($p->revenue->asCurrency());
    }
}
