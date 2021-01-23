<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskStates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('taskId');
            $table->bigInteger('statusId',false,true)->nullable();
            $table->text('taskStatesDesc');
            $table->bigInteger('userId',false,true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taskStates');
    }
}
