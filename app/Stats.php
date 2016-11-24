<?php

namespace App;

class Stats
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function favorites()
    {
        return 15;
    }

    public function completions()
    {
        return 100;
    }

    public function experience()
    {
        return 1432;
    }
}