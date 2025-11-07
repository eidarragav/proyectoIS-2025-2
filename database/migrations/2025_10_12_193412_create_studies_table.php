<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("candidate_id");
            $table->foreign("candidate_id")->references("id")->on("candidates")->onDelete('cascade');
            $table->timestamps();
            $table->string("study_level");
            $table->string("institution");
            $table->string("study_name");
            $table->string("status");
            $table->date("start_date");
            $table->date("finish_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studies');
    }
}
