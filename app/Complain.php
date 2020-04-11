<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{

   protected $table='complains';

  protected $fillable = [

  'name','nid','location','type' ,'detail','creator',
                        ];

}
