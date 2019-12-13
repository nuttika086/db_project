<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCaregiver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Caregiver', function (Blueprint $table) {
            $table->bigIncrements('caregiver_id');
            $table->String('caregiver_FirstName');
            $table->String('caregiver_LastName');
	        $table->String('caregiver_Phone');
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
        Schema::dropIfExists('Caregiver');
    }
}
