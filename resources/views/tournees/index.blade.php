<x-layout>

    <h1 class="mb-4">Liste des Tournées <span class="small text-secondary fw-normal">[{{count($tournees)}}]</span></h1>
  
    <div {{-- class="text-end" --}}>
        <a class="btn btn-success btn-sm mb-3" href="/tournees/create">
          <i class="bi bi-plus-lg"></i> Ajouter
        </a>
    </div>
  
    @if (count($tournees) > 0)
      <table class="table table-sm align-middle table-hover">
        <thead>
          <tr>
            <th style="width: 1%;" class="pe-3">Id</th>
            {{-- <th>Nom Tournée</th> --}}
            <th>Date Début</th>
            <th>Date Fin</th>
            <th style="width: 1%;">Actions</th>
          </tr>
        </thead>
  
        <tbody class="table-group-divider">
  
          @foreach ($tournees as $tournee)
            <tr>
              <th class="fw-lighter text-secondary">#{{ $tournee->id }}</th>
             {{-- <td>{{ $tourn->nom }}</td> --}}
              <td>{{ $tournee->date_debut }}</td>
              <td>{{ $tournee->date_fin }}</td>
              <td>
                <div class="d-flex gap-1">
                    <a class="btn btn-primary btn-sm" href="/tournees/{{ $tournee->id }}/edit"><i class="bi bi-pencil"></i></a>
                    <a class="btn btn-danger btn-sm" href="/tournees/{{ $tournee->id }}/delete"><i class="bi bi-trash"></i></a>
                    {{-- Bouton d'action de suppression sans confirmation --}}
                    {{-- <form action="/tournees/{{ $tournee->id }}" method="POST">
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
    @else
      <div class="alert alert-info">Aucune tournée.</div>
    @endif
  
  </x-layout>