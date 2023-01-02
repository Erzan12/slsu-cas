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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->smallInteger('account_type');
            $table->string('avatar');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->smallInteger('gender');
            $table->string('contact_number');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
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
        Schema::dropIfExists('information');
    }
};
