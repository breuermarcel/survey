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
        Schema::create(config("survey.database.tables.questions"), function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("survey_id")->nullable();
            $table->unsignedInteger("section_id")->nullable();
            $table->string("content");
            $table->string("type")->default("text");
            $table->json("options")->nullable();
            $table->json("rules")->nullable();
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
        Schema::dropIfExists(config("survey.database.tables.questions"));
    }
};
