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
        Schema::create('posts', function (Blueprint $table){
            $table->id();
            $table->string('title');

            // Melakukan relasi pada kolom "author_id" dimana id nya sesuai "id" di table users
            $table->foreignId('author_id')->constrained(
                table: 'users', indexName: 'posts_author_id' // 'posts_author_id' nama nya bebas saja tapi buat masuk akal
            );

            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
