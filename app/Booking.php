<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name','mobile', 'request_date','pickup','destationation',
    ];

    /**
     * User info
     */
    public function user(){
    	return $this->betongsTo(User::class, 'user_id');
    }
}
