<?php

use App\Enums\PaymentStatus;
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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('expense_title');
            $table->foreignId('companies_id')->constrained();
            $table->decimal('expense_price');
            $table->string('expense_purchaser');
            $table->text('expense_description')->nullable();
            $table->string('expense_payment_status')->default(PaymentStatus::Pending->value);
            $table->foreignId('bank_accounts_id')->constrained();
            $table->string('expense_invoice_image')->nullable();
            $table->timestamp('expense_purchased_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
