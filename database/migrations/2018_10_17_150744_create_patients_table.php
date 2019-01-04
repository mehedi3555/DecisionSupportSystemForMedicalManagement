<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PId');
            $table->string('Name');
            $table->integer('Age');
            $table->string('Gender');
            $table->string('Pressure')->nullable();
            $table->string('Symptom')->nullable();
            $table->integer('Diseases');
            $table->string('Doctor');
            $table->text('Medicine');
            $table->date('Date');
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
        Schema::dropIfExists('patients');
    }
}
