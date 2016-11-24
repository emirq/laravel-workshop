<?php

namespace App;

use App\User;

class UserPresenter extends Presenter
{
    public function welcomeMessage()
    {
        return sprintf(
            'Welcome, %s. You signed up %s.',
            $this->name,
            $this->created_at->diffForHumans()
        );
    }
}