<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  protected $table = 'patients';

  protected $fillable = [
       'id','NumPat','NumRdv','NomPat','PrenomPat','DateNaissPat','SexePat'
      ,'AddressPat','TelephPat','EmailPat'
  ];
   //protected $guarded = ['id'];

   public function patRealtion(){
     return $this->hasMany("App\Rdv","NumPat","NumPat");
   }

   public function patCons(){
     return $this->hasMany("App\Consultation","NumPat","NumPat");
   }

}
