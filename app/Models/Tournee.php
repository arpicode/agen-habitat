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

        $all = DB::select(
            "SELECT * FROM tournees WHERE employe_id = ?",
            [$employe->id]
        );

        return $all;
    }
}
