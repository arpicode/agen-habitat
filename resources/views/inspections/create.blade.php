<x-layout>

<h1>Création de l'inspection</h1>
<p class="text-secondary">{{ $tournee->nom }} &ndash; {{ $inspecteur->nom }}</p>

<form action="/inspections" method="POST" class="bg-light border rounded-2 m-auto p-4" class="m-auto" style="max-width: 35rem;">
    @csrf

    <input type="hidden" name="tournee_id" value="{{ $tournee->id }}">
    <input type="hidden" name="logement_id" value="{{ $logement->id }}">

    <div class="row mb-3">
        <div class="col">
            <h5>Logement</h5>
            @php
                $infosAdresse = explode(';', $logement->adresse);
            @endphp
            <p class="mb-0">Appt. {{ $logement->no_appt }}</p>
            <p class="mb-0">{{ $infosAdresse[0] }}</p>
            <p class="mb-0">{{ $infosAdresse[1] }} {{ $infosAdresse[2] }}</p>
        </div>
        <div class="col">
            <h5>Locataire</h5>
            <p class="mb-0">TODO</p>
            <p class="mb-0">TODO</p>
            <p class="mb-0">TODO</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <label class="form-label" for="date-rdv">Date</label>
            <input class="form-control" style="width: 10rem;" type="date" name="dateRdv" id="date-rdv">
        </div>
        <div class="col">
            <label class="form-label" for="heure-rdv">Heure</label>
            <input class="form-control" style="width: 10rem;" type="time" name="heureRdv" id="heure-rdv">
        </div>
    </div>
    <button class="btn btn-primary btn-sm" type="submit">Ajouter à la tournée</button>
</form>


</x-layout>