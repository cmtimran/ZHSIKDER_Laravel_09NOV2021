<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_notice_child_model extends Model
{
    protected $table='teacher_notice_child';
    protected $primaryKey='notice_id';

    protected $fillable=['notice_id','tw_teacher_name','tw_teacher_email','tw_subject'];
}
