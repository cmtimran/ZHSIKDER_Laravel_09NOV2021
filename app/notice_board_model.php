<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notice_board_model extends Model
{
     	protected $table='notice_board';
    	protected $primaryKey='notice_id';

    	protected $fillable=['notice_id','notice_title','notice_subject','author','to','Notice','notice_department'];


    public function validation()
    {
        return [
          
            'files'=>'required|mimes:pdf'
            
            
        ];
    }
}
  