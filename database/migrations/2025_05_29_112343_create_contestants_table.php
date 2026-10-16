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
        if (!Schema::hasTable('contestants')) {
            Schema::create('contestants', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('institution');
                $table->string('slug')->unique();
                $table->string('photo')->nullable();
                $table->string('country')->nullable();
                $table->string('department')->nullable();
                $table->string('career')->nullable();
                $table->string('unique_id')->unique();
                $table->integer('votes')->default(0);
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contestants');
    }
};
