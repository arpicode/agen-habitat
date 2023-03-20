<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Tournee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TourneeController extends Controller
{

    public function index(Employe $employe)
    {
        if ($employe->id == Auth::user()->id) {
            return view('tournees.index', [
                'tournees' => Tournee::getAllByEmployeId($employe),
            ]);
        } else {
            return new Response("Vous n'êtes pas autorisé à accéder à cette liste", 403);
        }
    }
}
