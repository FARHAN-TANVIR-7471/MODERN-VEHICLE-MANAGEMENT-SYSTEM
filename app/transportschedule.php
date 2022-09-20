<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\transport;
use DB;

class transportschedule extends Model
{
    /**
     * Get the phone associated with the user.
     */
    public function transport()
    {
        return $this->belongsTo(transport::class);
    }
}
