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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('jenis',['Article','News']);
            $table->string('metaTitle');
            $table->string('metaDesc');
            $table->longText('detail');
            $table->string('img');
            $table->string('notes');
            $table->unsignedBigInteger('publishedBy');
            $table->foreign('publishedBy')->references('id')->on('users')->onDelete('restrict');
            $table->timestamp('publishedAt'); 
            $table->boolean('isActive')->default(1);
            $table->smallInteger('visitCount')->default(0);
            $table->enum('status',['Published','Draft','Archive'])->default('Draft');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('restrict');
            $table->unsignedBigInteger('createdBy');
            $table->foreign('createdBy')->references('id')->on('users')->onDelete('restrict');
            $table->timestamp('createdAt')->useCurrent(); 
            $table->unsignedBigInteger('modifiedBy');
            $table->foreign('modifiedBy')->references('id')->on('users')->onDelete('restrict');
            $table->timestamp('modifiedAt')->useCurrent()->useCurrentOnUpdate(); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
