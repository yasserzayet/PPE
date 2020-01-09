<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
  //protected $guarded = ['id'];
  protected $table = 'rdvs';

  protected $fillable = [
    'id','NumRdv','NumPat','DateRdv','TimeRdv'
  ];

  public function rdvRelation(){
    return $this->belongsTo("App\Patient","NumPat","NumPat");
  }

}
