<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
      "id","NumOrd","DateOrd","NomMedc","NumCons"
    ];

    public function ordRelation(){
      return $this->belongsTo("App\Consultation","NumCons","NumCons");
    }
}
