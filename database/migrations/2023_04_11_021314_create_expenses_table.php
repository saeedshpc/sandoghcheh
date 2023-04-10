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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('expense_title');
            $table->foreignId('company_id')->constrained();
            $table->decimal('expense_price');
            $table->string('expense_purchaser');
            $table->text('expense_description');
            $table->tinyInteger('expense_payment_status');
            $table->foreignId('expense_purchase_card');
            $table->string('expense_invoice_image');
            $table->timestamp('expense_purchased_date');
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
