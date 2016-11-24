<?php

class Thing
{
	public function handle()
	{
		$tasks = [
			DoThis::class,
			DoThat::class,
			RunSomething::class
		];

		foreach ($tasks as $task) {
			(new $task)->handle();
		}
	}
}

class DoThis
{
	public function handle()
	{
		
	}
}

class DoThat
{
	public function handle()
	{
		
	}
}

class RunSomething
{
	public function handle()
	{
		
	}
}