<?php

namespace App\Models;

use Ite\Database\Eloquent\Factories\HasFlluminaactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table= 'teachers';
    protected $fillable= [
'id','Name','Last_name','Age','Gender','Phone_number','email','Address','Bank_account','Employee_code','Specialty',
'Academic_level','Identification_card','Civil_status','Salary','Type_contract'

    ];
}
