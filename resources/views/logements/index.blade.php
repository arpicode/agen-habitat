<x-layout>

<h1>Liste des logements a inspecter</h1>


    @if (count($logements) > 0)
      <table class="table table-sm align-middle table-hover">
        <thead>
          <tr>
            <th style="width: 1%;" class="pe-3">Id</th>
            <th>Adresse</th>
            <th>Numéro Appartement</th>
            <th>Surface</th>
            <th>Type</th>
            <th>Période début </th>
            <th>Période Fin</th>
            <th style="width: 1%;">Actions</th>
          </tr>
        </thead>
  
        <tbody class="table-group-divider">
  
          @foreach ($logements as $logement)
            <tr>
              <th class="fw-lighter text-secondary">#{{ $logement->id }}</th>
              <td>{{ $logement->adresse }}</td>
              <td>{{ $logement->no_appt }}</td>
              <td>{{ $logement->surface_habitable }}</td>
              <td>{{ $logement->type }}</td>
              <td>{{ $logement->debut_periode_inspection }}</td>
              <td>{{ $logement->fin_periode_inspection }}</td>
              
              <td>
                <div class="d-flex gap-1">
                    <a class="btn btn-success btn-sm" href="/users/{{ $logement->id }}/{{ $logement->id }}/edit"><i class="bi bi-plus-lg"></i></a>
                    <a class="btn btn-danger btn-sm" href="/users/{{ $logement->id }}/delete"><i class="bi bi-trash"></i></a>
                    {{-- Bouton d'action de suppression sans confirmation --}}
                    {{-- <form action="/users/{{ $logement->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                    
                      <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash"></i></button> --}}
                    {{-- </form> --}}
                </div>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      <a class="btn btn-success btn-sm" href="/tournees/{{Auth::user()->id}}"><i class="bi bi-plus-lg"></i>Voir Tournée</a>

    @else
      <div class="alert alert-info">Aucun utilisateur.</div>
    @endif
  
</x-layout>