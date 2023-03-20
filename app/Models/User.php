<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;

    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['mot_de_passe'] = bcrypt($value);
    }

    protected $fillable = [
        'email',
        'role',
        'mot_de_passe',
        'est_actif'
    ];

    protected $hidden = [
        'mot_de_passe',
    ];

    protected static function findUserAndEmployesNameById($id)
    {
        $user = DB::select(
            "SELECT users.id, CONCAT(employes.prenom, ' ', employes.nom) AS nom,
                    users.email,
                    users.role,
                    users.est_actif,
                    employes.user_id
            FROM users
            JOIN employes ON employes.user_id = users.id
            WHERE users.id = ?",
            [$id]
        );
        if (count($user) > 0) {
            return $user[0];
        } else {
            return null;
        }
    }

    protected static function getUsersAndEmployesNames()
    {
        $name = DB::select(
            "SELECT users.id, CONCAT(employes.prenom, ' ', employes.nom) AS nom,
                    users.email,
                    users.role,
                    users.est_actif,
                    employes.user_id
            FROM users
            JOIN employes ON employes.user_id = users.id"
        );

        return $name;
    }

    protected static function isActive($email)
    {
        $isActive = DB::select(
            "SELECT users.est_actif
            FROM users
            WHERE users.email = ?",
            [$email]
        );
        // dd($isActive[0]);
        return $isActive[0];
    }
}
