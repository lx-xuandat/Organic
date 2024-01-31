<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('website_store');
        Schema::create('website_store', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable()->default('logo.png');
            $table->string('phone')->nullable()->default('+65 11.188.888');
            $table->string('email')->nullable()->default('hello@colorlib.com');
            $table->string('address')->nullable()->default('60-49 Road 11378 New York');
            $table->string('msg_phone')->nullable()->default('support 24/7 time');
            $table->string('msg_email')->nullable()->default('Free Shipping for all Order of $99');
            $table->string('socials')->nullable();
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
        Schema::dropIfExists('website_store');
    }
};
