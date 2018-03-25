<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmergencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /** Migrations
     * Create a database migration to create a table called emergencies
     */
    public function up()
    {
        Schema::create('emergencies', function (Blueprint $table) {
        $table->integer('user_id')->nullable();
        $table->integer('hero_id')->nullable();
        $table->string('subject')->nullable();
        $table->string('description')->nullable(); // makes the column nullable
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
        Schema::dropIfExists('emergencies');
    }
}
