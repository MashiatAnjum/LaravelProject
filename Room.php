<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'r_ooms';

    protected $fillable =[

        'room_number'

  ];

  public function building()
  {

  //  return $this->hasOne('App\Models\Building','id','building_id');
  return $this->belongsTo(Building::class);

  }

}
