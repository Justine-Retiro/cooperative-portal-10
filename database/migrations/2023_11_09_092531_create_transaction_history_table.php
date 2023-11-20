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
        Schema::create('transaction_history', function (Blueprint $table) {
            $table->id('history_id');
            $table->string('account_number', 50)->nullable();
            $table->unsignedBigInteger('loanNo');
            $table->string('audit_description', 50)->nullable();
            $table->string('transaction_type', 255);
            $table->date('transaction_date');
            $table->string('transaction_status', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_history');
    }
};
