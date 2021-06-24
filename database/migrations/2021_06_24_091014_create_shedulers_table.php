<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShedulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shedulers', function (Blueprint $table) {
            $table->id();
						$table->unsignedBigInteger('teacher_id')->default('1');
						$table->string('title')->nullable();
						$table->string('slug')->nullable();
						$table->string('day')->nullable();
						$table->string('time')->nullable();
						$table->text('descr')->nullable();
						$table->string('status')->default('closed');
            $table->timestamps();

						$table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shedulers');
    }
}
