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
        Schema::create(config("survey.database.tables.surveys"), function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->json("settings")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config("survey.database.tables.surveys"));
    }
};
