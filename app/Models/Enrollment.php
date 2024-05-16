<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table= 'enrollments';
    protected $fillable = [
        'id', 'Academic_Year', 'Creation_Date', 'Carrer', 'Code_Carrer', 'students_id', 'careers_id'

    ];

public function students()
{
    return $this->belongsTo(Student::class);
}

public function career()
{
    return $this->belongsTo(Career::class);
}

}
