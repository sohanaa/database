<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('Admins')){
        Schema::create('Admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last name');
             $table->string('email');
             $table->timestamp('email_verified_at')->nullable();
             $table->string('password');
             $table->remembertoken();

            $table->timestamps();
        });
    }
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Admins');
    }
}
