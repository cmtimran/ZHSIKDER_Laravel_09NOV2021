<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schollership_model extends Model
{
    protected $table='schollership';
    protected $primaryKey='schollership_id';
    protected $fillable=['schollership_text','department_id'];

    public  function validation(){
        return [
            'schollership_text' => 'required',
            'department_id' => 'required',
        ];
    }
}
