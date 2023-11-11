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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('issue_type_id');
            $table->unsignedBigInteger('issue_status_id');
            $table->unsignedBigInteger('issue_priority_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->date('date_resolved')->nullable();

            // Add foreign key constraints
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('issue_type_id')->references('id')->on('issue_types');
            $table->foreign('issue_status_id')->references('id')->on('issue_statuses');
            $table->foreign('issue_priority_id')->references('id')->on('issue_priorities');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
