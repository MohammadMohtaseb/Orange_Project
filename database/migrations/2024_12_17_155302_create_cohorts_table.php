<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_cohorts_table.php
// database/migrations/xxxx_xx_xx_create_cohorts_table.php
public function up()
{
    Schema::create('cohorts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('academy_id')->constrained()->onDelete('cascade');
        $table->string('name');
        // Skipping the manager_id for now
        // $table->foreignId('manager_id')->constrained('managers')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cohorts');
    }
};
