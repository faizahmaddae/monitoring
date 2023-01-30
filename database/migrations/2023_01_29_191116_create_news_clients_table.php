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
        Schema::create('news_clients', function (Blueprint $table) {
            $table->id();
            // news_id
            $table->unsignedBigInteger('news_id')->nullable(true);
            // category_id
            $table->unsignedBigInteger('category_id')->nullable(true);
            // client_id
            $table->unsignedBigInteger('client_id')->nullable(true);
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
        Schema::dropIfExists('news_clients');
    }
};
