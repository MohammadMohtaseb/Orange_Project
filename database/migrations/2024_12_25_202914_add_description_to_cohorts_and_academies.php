<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToCohortsAndAcademies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cohorts', function (Blueprint $table) {
            $table->text('description')->nullable()->after('name'); // Add 'description' to 'cohorts'
        });

        Schema::table('academies', function (Blueprint $table) {
            $table->text('description')->nullable()->after('name'); // Add 'description' to 'academies'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cohorts', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        Schema::table('academies', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
