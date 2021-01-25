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
            $table->foreign('taskId')->constrained()->onDelete('cascade')->references('id')->on('tasks');
            $table->foreign('statusId')->constrained()->references('id')->on('status');
            $table->text('taskStatesDesc');
            $table->foreign('userId')->constrained()->references('id')->on('users');
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
