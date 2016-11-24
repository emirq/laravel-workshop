<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PublishPostForm;

class FormsController extends Controller
{
    public function store(PublishPostForm $form)
    {

    	$form->persist();

    	return 'Success!';
    }
}
