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
        Schema::create('post_tag', function (Blueprint $table) {
            // Kolom foreign key ke tabel posts (posts.id)
            // Laravel otomatis cari tabel 'posts' karena nama kolom 'post_id'
            $table->foreignId('post_id')->constrained()->onDelete('cascade');

            // Kolom foreign key ke tabel tags (tags.id)
            // Laravel otomatis cari tabel 'tags' karena nama kolom 'tag_id'
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
