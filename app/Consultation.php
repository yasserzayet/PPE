<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
  protected $guarded = ['id'];
  protected $fillable = [
    "id","NumCons","DateCons","NumPat",
  ];

  public function ConsRelation(){
    return $this->belongsTo("App\Patient","NumPat","NumPat");
  }


  public function ConsOrds(){
    return $this->hasMany("App\Ordonnance","NumCons","NumCons");
  }

}
