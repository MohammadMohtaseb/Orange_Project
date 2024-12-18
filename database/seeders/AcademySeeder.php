<?php

// database/seeders/AcademySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Academy;

class AcademySeeder extends Seeder
{
    public function run()
    {
        Academy::create([
            'name' => 'Orange Academy Cairo',
            // 'governate' => 'Cairo'
        ]);
    }
}
