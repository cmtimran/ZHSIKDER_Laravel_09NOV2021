<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_address_child extends Model
{
    protected $table='teacher_address_child';
    protected $primaryKey='parent';
    protected $fillable=['parent','post_office',
                        'home_district',
                        'division',
                        'village_name',
                        'home_name'];
    
}
