<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_managers', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->date('date_of_birth');
            $table->char('mobile_number');
            $table->char('nid');
            $table->char('nid_photo');
            $table->char('manager_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_managers');
    }
}
