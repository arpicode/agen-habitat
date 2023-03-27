<?php

namespace App\Models;

use App\Models\Employe;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tournee extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        // 'id',
        'nom',
        'employe_id',
        // 'date_debut',
        // 'date_fin',
    ];

    protected static function getAllByEmployeId(Employe $employe)
    {

        // $all = DB::select(
        //     "SELECT * FROM tournees WHERE employe_id = ?",
        //     [$employe->id]
        // );
      
        $all = DB::select(
                "SELECT tournees.*, COUNT(inspections.tournee_id) nbInspections
                FROM tournees
                LEFT JOIN inspections ON inspections.tournee_id = tournees.id
                WHERE tournees.employe_id = ?
                GROUP BY tournees.id",
                 [$employe->id]
             );
        return $all;
    }
}
