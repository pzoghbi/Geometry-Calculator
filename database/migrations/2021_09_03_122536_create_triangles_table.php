<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrianglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triangles', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->float('a')->nullable();
            $table->float('b')->nullable();
            $table->float('c')->nullable();
            $table->float('surface')->nullable();
            $table->float('circumference')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('triangles');
    }
}
