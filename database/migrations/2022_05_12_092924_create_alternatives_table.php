<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedInteger('c1');
            $table->unsignedInteger('c2');
            $table->unsignedInteger('c3');
            $table->unsignedInteger('c4');
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
        Schema::dropIfExists('alternatives');
    }
}
