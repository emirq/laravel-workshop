<?php

namespace App\UseCases;

use App\UseCases\UseCase;

class PurchasePodcast extends UseCase
{
	public function handle()
	{
		$this->preparePurchase()
			->sendEmail();
	}

	private function preparePurchase()
	{
		var_dump("preparing the pruchase");

		return $this;
	}

	private function sendEmail()
	{
		var_dump('send an email with their invoice');

		return $this;
	}
}