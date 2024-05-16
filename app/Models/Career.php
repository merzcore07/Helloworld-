<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table= 'careers';
    protected $fillable = [
        'id', 'Name', 'Career_code', 'Sector', 'Specialty_career', 'Quantity_students', 'Duration_career',
        'Requirements', 'Description'  
    ];

    public function enrollments ()
{
    return $this->hasMany(Enrollment::class);
}
}
