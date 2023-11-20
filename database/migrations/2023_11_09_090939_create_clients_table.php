<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('client_id');
            $table->unsignedBigInteger('user_id');
            $table->string('last_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('first_name', 50);
            $table->string('citizenship', 20)->nullable();
            $table->string('civil_status', 15)->nullable();
            $table->string('city_address', 80)->nullable();
            $table->string('provincial_address', 75)->nullable();
            $table->string('mailing_address', 50)->nullable();
            $table->string('account_status', 50);
            $table->unsignedBigInteger('phone_num')->nullable();
            $table->unsignedBigInteger('taxID_num')->nullable();
            $table->string('spouse_name', 50)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place', 50)->nullable();
            $table->date('date_employed')->nullable();
            $table->string('position', 255)->nullable();
            $table->string('natureOf_work', 50)->nullable();
            
            
            $table->decimal('balance', 10, 2);
            $table->decimal('amountOfShare', 10, 2);
            $table->string('remarks', 255)->nullable();
            
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
