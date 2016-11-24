<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PurchasePodcast extends Job
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
