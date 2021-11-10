<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class create_admin_model extends Model
{
   use EntrustUserTrait;
   protected $fillable=['name','date','phone','email','password','status','remember_token','user_type'];
   protected $hidden=[];
   protected $primaryKey='id';
   protected $table='users';


  	public  function store_rules(){

  		return [
    'name' => 'required',
    'email' => 'required',
    'password' => 'required',
    
	];
	}

	
}

