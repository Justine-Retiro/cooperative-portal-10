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
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id('loan_id');
            $table->unsignedBigInteger('loanNo')->unique();
            $table->string('account_number', 50)->nullable();
            $table->string('customer_name', 100);
            $table->unsignedBigInteger('age');
            $table->date('birth_date')->nullable();
            $table->date('date_employed')->nullable();
            $table->unsignedBigInteger('contact_num')->nullable();
            $table->string('college', 50)->nullable();
            $table->string('loan_type', 15)->nullable();
            $table->string('work_position', 50)->nullable();
            $table->unsignedBigInteger('retirement_year')->nullable();
            $table->date('application_date');
            $table->string('applicant_sign', 255)->nullable();
            $table->string('application_status', 20);
            $table->decimal('amount_before', 10, 2);
            $table->string('amount_after', 50)->nullable();
            $table->string('remarks', 50)->nullable();
            $table->unsignedBigInteger('time_pay')->nullable();
            $table->string('loan_term_Type', 15)->nullable();
            $table->string('dueDate', 50)->nullable();
            $table->string('action_taken', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
