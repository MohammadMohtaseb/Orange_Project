<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        $number = 13;
        // Only import the 'name' column
        return new Student([
            'name' => $row[0],  // assuming the 'name' column is in the first column (index 0)
            'cohort_id' => 1,
            'email' => $row[0] . '@gmail.com',
        ]);
    }
}
