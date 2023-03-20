<?php

namespace App\Models;

use App\Models\Inspecteur;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logement extends Model
{
    use HasFactory;

   protected static function GetLogementsByEmployeId(Employe $employe ){

        $logement= DB::select("SELECT l.id,l.adresse,l.no_appt,l.type,
        l.annee_construction,l.surface_habitable,
        l.debut_periode_inspection,l.fin_periode_inspection,l.locataire_id 
        FROM superviser s, employes e, logements l 
        WHERE s.employe_id=e.id AND s.logement_id=l.id 
        AND employe_id=? ORDER BY l.fin_periode_inspection",[$employe->id]);  

        return $logement;
   }
   protected static function AppartientTourne(Employe $employe ){
        return true;
   }

}