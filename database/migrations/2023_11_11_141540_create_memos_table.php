<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * (php artisan migrate)
     */
    public function up(): void
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->id();  // primary key and auto increment
            $table->string('title');
            $table->string('content');
        });
    }

    /**
     * Reverse the migrations.
     * (php artisan migrate:rollback)
     */
    public function down(): void
    {
        Schema::dropIfExists('memos');
    }
};
