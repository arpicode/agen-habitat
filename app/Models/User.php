<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;

    protected $table = 'users';

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
    ];

    protected $hidden = [
        'mot_de_passe',
        // 'remember_token',
    ];

    protected static function isActive($email)
    {
        $isActive = DB::select(
            "SELECT users.est_actif
            FROM users
            WHERE users.email = ?",
            [$email]
        );
        // dd($isActive[0]);
        return $isActive;
    }
}
