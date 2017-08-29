<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $connection = 'dbiusis16';
    protected $table = 'student_info';
}
