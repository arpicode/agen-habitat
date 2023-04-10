<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employe;
use App\Models\Tournee;
use App\Models\Logement;
use App\Models\Inspection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InspectionController extends Controller
{
    public function create(Tournee $tournee, Logement $logement)
    {
        return view('inspections.create', [
            'tournee' => $tournee,
            'logement' => $logement,
            'inspecteur' => User::findUserAndEmployesNameById($tournee->employe_id),
        ]);
    }

    public function edit(Employe $employe, Inspection $inspection)
    {
        return view('inspections.edit');
    }

    public function store(Request $req)
    {
        $fields = $req->validate([
            'logement_id' => 'required',
            'tournee_id' => 'required',
            'dateRdv' => 'required',
            'heureRdv' => 'required',
        ]);

        $fields['date_heure_rdv'] = $fields['dateRdv'] . ' ' . $fields['heureRdv'];

        Inspection::create($fields);

        return redirect('/logements' . '/' . Auth::user()->id);
    }

    public function destroy(Employe $employe, Inspection $inspection)
    {
        if (Auth::user() && (Auth::user()->id == $employe->id)) {
            $tourneeId = $inspection->tournee_id;
            $inspection->delete();

            return redirect("/tournees/$employe->id/$tourneeId");
        }
        return view('login');
    }
}
