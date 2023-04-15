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
            $table->string('title');
            $table->foreignId('company_id')->constrained();
            $table->foreignId('bank_account_id')->constrained();
            $table->decimal('price','9', 0);
            $table->string('purchaser');
            $table->text('description')->nullable();
            $table->string('payment_status')->default(PaymentStatus::Pending->value);
            $table->string('invoice_image')->nullable();
            $table->timestamp('purchased_date')->nullable();
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
