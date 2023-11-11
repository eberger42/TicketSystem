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
        Schema::create('support_articles_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('support_article_id');
            $table->unsignedBigInteger('file_id');

            $table->unique(['file_id', 'support_article_id']);

            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
            $table->foreign('support_article_id')->references('id')->on('support_articles')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_articles_files');
    }
};
