<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Team;
use Illuminate\Http\Request;

class TeamMembersController extends Controller
{
 	/**
 	 * Add a new member to the given team.
 	 * 
 	 * @param Team $team
 	 */
    public function store(Team $team)
    {
    	$this->authorize($team);

    	return 'Add the user to the team.';
    }
}
