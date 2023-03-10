<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::getUsersAndEmployesNames(),
        ]);
    }

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
            'role' => 'in:inspecteur,admin,super',
            'prenom' => 'required',
            'nom' => 'required',
        ]);

        $fields['mot_de_passe'] = bcrypt($fields['password']);


        $userId = User::create($fields)->id;
        Employe::insert($userId, $fields['prenom'], $fields['nom']);

        return redirect('/users');
    }

    protected static function edit(User $user, Employe $employe)
    {
        return view('users.edit', [
            'user' => $user,
            'employe' => $employe,
        ]);
    }

    // Update user
    public function update(Request $req, User $user, Employe $employe)
    {
        $fields = $req->validate([
            'prenom' => 'nullable|max:255',
            'nom' => 'required|max:255',
            'email' => 'email|nullable|unique:users,email,' . $user->id . ',id',
            'role' => 'required',
        ]);
        $fields['est_actif'] = $req['est_actif'] === 'on';

        $user->update($fields);
        $employe->update($fields);

        return redirect('/users');
    }

    protected function delete(User $user)
    {
        return view('users.delete');
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
