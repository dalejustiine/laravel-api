<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    protected $connection = 'dbiusis16';
    protected $table = 'student_records';
}
