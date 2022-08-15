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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('user_id');
            $table->string('code')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => Unpublished, 1 => Published');
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
        Schema::dropIfExists('teachers');
    }
};
