<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complanes', function (Blueprint $table) {
            $table->id();
            $table->char('perpose');
            $table->char('transport_name');
            $table->text('complane_message');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            /*$table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complanes');
    }
}
