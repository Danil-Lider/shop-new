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
        Schema::create('search_words', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('count');
            $table->timestamps();
        });
    }

    /**
     * Обратить миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('search_words');
    }
};
