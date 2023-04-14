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
        Schema::create('freelancer_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bank_account_id')->constrained();
            $table->foreignId('freelancer_expense_id')->constrained();
            $table->string('title');
            $table->decimal('price',9,0);
            $table->text('description');
            $table->string('payment_status')->default(PaymentStatus::Pending->value);
            $table->timestamp('purchased_date')->nullable();
            $table->string('invoice_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancer_expenses');
    }
};
