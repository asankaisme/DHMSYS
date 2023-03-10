<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fName', 50)->nullable();
            $table->string('lName', 100)->nullable();
            $table->string('gender', 1)->nullable();
            $table->string('maritalStatus', 1)->nullable();
            $table->string('address1', 100)->nullable();
            $table->string('address2', 100)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
