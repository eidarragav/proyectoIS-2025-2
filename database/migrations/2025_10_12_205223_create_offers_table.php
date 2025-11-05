<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("company_id");
            $table->foreign("company_id")->references('id')->on('companies')->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->string('salary');
            $table->string('work_modality');
            $table->string('type_contract');
            

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
        Schema::dropIfExists('offers');
    }
}
