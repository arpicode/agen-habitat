<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show create form
    public function create()
    {
        return view('users.create');
    }

    // Insert new user
    public function store(Request $req)
    {
        $fields = $req->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:3',
            'role' => 'in:inspecteur,admin,super'
        ]);

        $fields['mot_de_passe'] = bcrypt($fields['password']);

        $user = User::create($fields);

        return redirect('/superadmin');
    }

    // Show login form
    public function login()
    {
        return view('users.login');
    }

    // Authenticate user
    public function authenticate(Request $req)
    {

        $fields = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $fields['est_actif'] = true;

        if (auth()->attempt($fields)) {
            $req->session()->regenerate();

            return redirect('/');
        }

        return back()
            ->withErrors(['email' => 'Utilisateur ou mot de passe incorrect.'])
            ->onlyInput('email');
    }

    // Logout user
    public function logout(Request $req)
    {
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/');
    }

    public function username()
    {
        return 'email';
    }
}
