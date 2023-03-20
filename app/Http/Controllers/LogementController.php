<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function index(Employe $employe)
    {
        return view('logements.index',[ 
           "logements" => Logement::GetLogementsByEmployeId($employe),
           "appartientATourne"=> Logement::AppartientTourne($employe)
        ]);
    }
}
