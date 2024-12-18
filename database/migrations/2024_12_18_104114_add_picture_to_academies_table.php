<?php

// database/migrations/xxxx_xx_xx_add_picture_to_academies_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPictureToAcademiesTable extends Migration
{
    public function up()
    {
        Schema::table('academies', function (Blueprint $table) {
            $table->string('picture')->nullable()->after('name');
        });
    }

    public function down()
    {
        Schema::table('academies', function (Blueprint $table) {
            $table->dropColumn('picture');
        });
    }
}

