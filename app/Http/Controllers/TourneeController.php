<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Tournee;
use App\Models\Inspection;
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

    public function show(Employe $employe, Tournee $tournee)
    {
        if ($employe->id == Auth::user()->id) {
            // dd(Tournee::find($tournee->id));
            return view('tournees.show', [
                'inspections' => Inspection::findAllByTourneeId($tournee)
            ]);
        }
    }

    public function create(Employe $employe)
    {
        if ($employe->id == Auth::user()->id) {
            return view('tournees.create');
        } else {
            return new Response("Vous n'êtes pas autorisé à accéder à cette page", 403);
        }
    }
}
