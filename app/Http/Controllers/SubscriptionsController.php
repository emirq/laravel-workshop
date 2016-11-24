<?php

namespace App\Http\Controllers;

// 1. Identify a point of flexibility.
	// 1. Forum Account
	// 2. Regular Subscriber
	// 3. Team Member Access
	// 4. Forever Account
// 2. Extract each strategy into its own class.
// 3. Ensure that each of those strategies adheres to a common contract/interface.
// 4. Determine the proper strategy and let it handle the task.

class SubscriptionsController
{
	public function store()
	{
		// Sign Up the User. But do they want a...

		// 1. Forum Account
		// 2. Regular Subscriber
		// 3. Team Member Access
		// 4. Forever Account
	}

	public function update()
	{
		$this->user
			->subscription()
			->usingCoupon($code)
			->swap($plan);
	}
}

