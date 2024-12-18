<?php

// database/migrations/xxxx_xx_xx_create_support_queries_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportQueriesTable extends Migration
{
    public function up()
    {
        Schema::create('support_queries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->text('query');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('support_queries');
    }
}
