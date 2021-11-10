<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary_structure_teacher_staff_details_model extends Model
{
    	protected $table='salary_structure_teacher_staff_details';
    	protected $primaryKey='parent';
		protected $fillable=['parent','teacher_or_staff_name','from_date','base','variable'];
}
