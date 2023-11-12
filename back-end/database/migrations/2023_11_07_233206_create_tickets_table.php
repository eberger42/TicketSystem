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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assigned_user_id');
            $table->unsignedBigInteger('client_user_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('ticket_status_id');
            $table->unsignedBigInteger('ticket_priority_id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
            $table->timestamp('date_closed')->nullable();

            //Foreign Keys
            $table->foreign('assigned_user_id')->references('id')->on('users');
            $table->foreign('client_user_id')->references('id')->on('clients');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('ticket_status_id')->references('id')->on('ticket_statuses');
            $table->foreign('ticket_priority_id')->references('id')->on('ticket_priorities');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
