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
        Schema::create('loan_payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->unsignedBigInteger('loanNo')->nullable();
            $table->string('account_number', 50)->nullable();
            $table->string('remarks', 50)->nullable();
            $table->decimal('amount_paid', 10, 2)->nullable();
            $table->date('payment_date');
            $table->string('audit_description', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payments');
    }
};
