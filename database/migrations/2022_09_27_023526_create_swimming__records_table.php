<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swimming__records', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->integer('class');
            $table->string('school_year', 10);
            $table->string('style', 10);
            $table->float('distance', 4, 1);
            $table->string('time', 10);
            $table->string('confirmer', 10);
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
        Schema::dropIfExists('swimming__records');
    }
};
