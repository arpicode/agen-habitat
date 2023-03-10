<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nom',
        'prenom',
        'user_id',
    ];

    protected static function insert($uid, $prenom, $nom)
    {
        DB::insert(
            "INSERT INTO employes (user_id, prenom, nom)
             VALUES (?, ?, ?);",
            [$uid, $prenom, $nom]
        );
    }
}
