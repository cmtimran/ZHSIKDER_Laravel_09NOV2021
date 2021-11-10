<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteEventsModel extends Model
{
    protected $table='website_events';
    protected $primaryKey='website_events_id';
    protected $fillable=['title','description','start_date','department','image'];

    public  function validation(){
        return [
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'department' => 'required',
            'image' => 'required',
        ];
    }
}
