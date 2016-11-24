<?php

namespace App;

use App\User;

abstract class Presenter
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}



	public function __get($property)
    {
    	if (method_exists($this, $property)) {
    		return call_user_func([$this, $property]);
    	}

    	$message = "%s does not respond to the %s property or method.";

    	throw new \Exception(sprintf($message, static::class, $property));
    }
}