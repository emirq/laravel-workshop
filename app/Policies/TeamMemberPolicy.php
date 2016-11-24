<?php

namespace App\Policies;

use App\Team;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamMemberPolicy
{
    use HandlesAuthorization;

    public function store(User $user, Team $team)
    {
        // If you are not signed in, no way.
        if (!auth()->guest())
            abort(403, 'You are not signed in.');

        // If you are not the owner of the team, no way.
        if ($team->owner_id == auth()->user()->id)
            abort(403, 'You are not the owner of this team');

        // If the team is maxed out, no way.
        if ($team->isMaxedOut())
            abort(403, 'Your team is maxed out.');
    }
}
