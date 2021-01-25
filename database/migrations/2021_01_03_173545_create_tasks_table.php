<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('taskName');
            $table->text('desc')->nullable();
            $table->text('note')->nullable();
            //$table->date('taskDate');
            $table->date('preDate')->nullable();
            $table->date('realDate')->nullable();
            $table->foreign('statusId')->constrained()->nullable();
            $table->foreign('projectId')->nullable()->constrained()->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
