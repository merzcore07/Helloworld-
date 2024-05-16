<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= 'students' ;
    protected $fillable = [
        'id', 'Names', 'Last_Name', 'Gender', 'Age', 'Phone_Number', 'Address', 'Identification',
        'Born_Date', 'Civil_Status', 'Emergency_Number', 'Ocupation'

    ];

public function enrollments ()
{
    return $this->hasMany(Enrollment::class);
}
}



