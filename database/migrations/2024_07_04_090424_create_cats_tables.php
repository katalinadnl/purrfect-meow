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
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('breed');
            $table->unsignedTinyInteger('age');
            $table->enum('gender', ['male', 'female']);
            $table->boolean('issues_with_kids')->default(false);
            $table->boolean('issues_with_other_cats')->default(false);
            $table->boolean('issues_with_dogs')->default(false);
            $table->boolean('no_issues')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
