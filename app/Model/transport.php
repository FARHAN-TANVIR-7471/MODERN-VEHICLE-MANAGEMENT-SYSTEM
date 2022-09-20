<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class transport extends Model
{
    protected $appends = [
        'driver',
        'driver_id',
        'manager',
        'manager_id',
    ];

    public function getDriverIdAttribute(){
        return DB::table('tranaport_associates')->where('fk_transport_id', $this->id)->value('fk_driver_id');
    }

    public function getDriverAttribute(){
        return DB::table('drivers')->where('id', $this->getDriverIdAttribute())->value('name');
    }

    public function getManagerAttribute(){
        return DB::table('transport_managers')->where('id', $this->getManagerIdAttribute())->value('name');
    }

    public function getManagerIdAttribute(){
        return DB::table('tranaport_associates')->where('fk_transport_id', $this->id)->value('fk_managers_id');
    }
}
