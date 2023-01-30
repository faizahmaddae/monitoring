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
        Schema::create('reflections', function (Blueprint $table) {
            $table->id();
            // news_id
            $table->unsignedBigInteger('news_id')->nullable(true);
            // media_id
            $table->unsignedBigInteger('media_id')->nullable(true);
            // date 
            $table->date('date')->nullable(true);
            // begin
            $table->string('begin')->nullable(true);
            // end
            $table->string('end')->nullable(true);
            // language
            $table->string('language')->nullable(true);
            
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
        Schema::dropIfExists('reflections');
    }
};
