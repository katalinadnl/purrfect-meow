<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->constrained()->onDelete('cascade');
            $table->boolean('issues_with_kids')->default(false);
            $table->boolean('issues_with_other_cats')->default(false);
            $table->boolean('issues_with_dogs')->default(false);
            $table->boolean('no_issues')->default(true);
            $table->timestamps();
        });

        // Remove columns from cats table
        Schema::table('cats', function (Blueprint $table) {
            $table->dropColumn(['issues_with_kids', 'issues_with_other_cats', 'issues_with_dogs', 'no_issues']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Add columns back to cats table
        Schema::table('cats', function (Blueprint $table) {
            $table->boolean('issues_with_kids')->default(false);
            $table->boolean('issues_with_other_cats')->default(false);
            $table->boolean('issues_with_dogs')->default(false);
            $table->boolean('no_issues')->default(true);
        });

        Schema::dropIfExists('cat_issues');
    }
}
