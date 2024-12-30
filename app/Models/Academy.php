<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;

protected $table = 'academies';
protected $fillable = [
    'name',
    'description',
    // 'governate',
    'picture', // Add this
];


    public function cohorts()
    {
        return $this->hasMany(Cohort::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
