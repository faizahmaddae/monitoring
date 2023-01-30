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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            // headline
            $table->string('headline')->nullable(true);
            // summary
            $table->string('summary')->nullable(true);
            // date
            $table->date('date')->nullable(true);
            // is_topstory
            $table->boolean('is_topstory')->nullable(true);
            // is_emergency
            $table->boolean('is_emergency')->nullable(true);
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
        Schema::dropIfExists('news');
    }
};
