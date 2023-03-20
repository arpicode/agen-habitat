<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logement extends Model
{
     use HasFactory;

     public $timestamps = false;

     protected static function GetLogementsByEmployeId(Employe $employe)
     {
          // $logements = DB::select(
          //      "SELECT l.id,l.adresse,l.no_appt,l.type,
          //         l.annee_construction,l.surface_habitable,
          //         l.debut_periode_inspection,l.fin_periode_inspection,l.locataire_id 
          //       FROM superviser s, employes e, logements l 
          //       WHERE s.employe_id = e.id AND s.logement_id = l.id 
          //       AND employe_id = ? ORDER BY l.fin_periode_inspection",

          // On selectionne seulement les logements qui n'ont pas déjà une inspection de prévue
          $logements = DB::select(
               "SELECT logements.*
                FROM logements
                JOIN superviser ON logements.id = superviser.logement_id
                JOIN employes ON employes.id = superviser.employe_id
                WHERE employe_id = ?
                AND logements.id NOT IN (SELECT inspections.logement_id
                                        FROM inspections)
                ORDER BY logements.fin_periode_inspection",
               [$employe->id]
          );

          return $logements;
     }

     protected static function AppartientTourne(Employe $employe)
     {
          return true;
     }
}
