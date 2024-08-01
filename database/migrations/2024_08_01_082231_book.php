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
        Schema::create('book', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('judul', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book');
    }
};
