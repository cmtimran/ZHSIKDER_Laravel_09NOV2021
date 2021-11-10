<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manage_department_model extends Model
{
    protected $fillable=['department_name','class_name','medium','description','department_code','faculty_name','image'];
    protected $table='manage_department';
    protected $primaryKey='id';



    public function validation_rule()
    {
        return [
            'department_name'=>'required',
            'department_code'=>'required',
            'faculty_name'=>'required',
            'image'=>'required',

        ];
    }
}
