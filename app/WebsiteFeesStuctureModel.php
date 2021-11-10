<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteFeesStuctureModel extends Model
{
    protected $table='website_fees_structure';
    protected $primaryKey='id';
    protected $fillable=['department','fees_structure'];

    public  function validation(){
	  	return [
		    'department' => 'required',
		    'fees_structure' => 'required',
		];
	}
}
