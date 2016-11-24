<?php

namespace App\UseCases;

abstract class UseCase
{
	public static function perform()
	{
		return (new static)->handle();
	}

	abstract public function handle();
}