<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'name',
        'email',
        'cohort_id',
        'academy_id',
        'employment_status',
        'linkedin',
        'picture'
    ];

    /**
     * Get the cohort that the student belongs to.
     */
    public function cohort()
    {
        return $this->belongsTo(Cohort::class);
    }

    public function academy()
{
    return $this->belongsTo(Academy::class);
}

    /**
     * Get the job associated with the student.
     * (A student can have one job, but it might not always exist)
     */

}
