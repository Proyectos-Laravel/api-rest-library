<?php

use App\Models\Author;
use App\Models\Genre;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Author::class)->constrained();
            $table->foreignIdFor(Genre::class)->constrained();
            $table->string('title', 100);
            $table->string('isbn', 13);
            $table->integer('pages');
            $table->unsignedTinyInteger('stock');
            $table->date('published_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
