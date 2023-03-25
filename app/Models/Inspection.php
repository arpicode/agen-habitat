<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inspection extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'tournee_id',
        'logement_id',
        'date_heure_rdv',
    ];

    protected static function findAllByTourneeId(Tournee $tournee)
    {
        $inspections = DB::select(
            "SELECT inspections.*, logements.adresse
             FROM inspections
             JOIN logements ON logements.id = inspections.logement_id
             WHERE inspections.tournee_id = ?",
            [$tournee->id]
        );

        return $inspections;
    }
}
