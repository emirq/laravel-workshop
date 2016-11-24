<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UseCases\PurchasePodcast;

class PurchasesController extends Controller
{
    public function store()
    {
    	//PurchasePodcast::perform();

    	dispatch(new \App\Jobs\PurchasePodcast);

    	//return redirect('/');
    }
}
