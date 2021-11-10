<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class botModel extends Model
{
    protected $table='bot';
    protected $primaryKey='bot_id';
    protected $fillable=['name','designation','email','address','image','facebook','twitter','instagram','pinterest'];

    public  function validation(){
        return [
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'pinterest' => 'required',
        ];
    }
}
