<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Revenue;

class Performance extends Model
{
    public function getRevenueAttribute($revenue)
    {
    	return new Revenue($revenue);
    }
}
