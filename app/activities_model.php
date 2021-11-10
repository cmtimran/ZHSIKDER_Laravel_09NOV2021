<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activities_model extends Model
{
    protected $table='activities';
    protected $primaryKey='activities_id';
    protected $fillable=['activities_text','department_id'];

    public  function validation(){
        return [
            'activities_text' => 'required',
            'department_id' => 'required',
        ];
    }
}
