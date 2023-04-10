<x-layout>

<h1 class="mb-4">Liste des logements a inspecter</h1>

    @if (count($logements) > 0)
      <table id="logement-table" class="table table-sm align-middle table-hover">
        <thead>
          <tr>
            <th style="width: 1%;" class="pe-4">Id</th>
            <th>Adresse</th>
            <th>Appt.</th>
            <th>Surface</th>
            <th>Type</th>
            <th data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Date de début de période d'inspection">Début</th>
            <th data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Date de fin de période d'inspection">Fin</th>
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
                  {{-- Action de créer une inspection + ajouter à une tournée --}}
                    <div class="dropdown">
                      <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-plus-lg me-2"></i>
                      </button>
                      <ul class="dropdown-menu">
                        @if (count($tournees) > 0)
                          @foreach ($tournees as $tournee)
                            <li><a class="dropdown-item" href="/inspections/{{ $tournee->id }}/{{ $logement->id }}/create">{{ $tournee->nom }}</a></li>
                          @endforeach
                        @else
                          <li><a class="dropdown-item fst-italic disabled" href="#">(aucune tournée&hellip;)</a></li>
                        @endif
                      </ul>
                    </div>
                    {{-- <a class="btn btn-danger btn-sm" href="/users/{{ $logement->id }}/delete"><i class="bi bi-trash"></i></a> --}}
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

    @else
      <div class="alert alert-info">Aucun logement.</div>
    @endif

      <script>
        $(document).ready(function() {
        var table = new DataTable('#logement-table', {
          language: {
              url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json',
          },
          order: [],
          columnDefs: [
            { "orderable": false, "targets": 2 },
            { "orderable": false, "targets": 7 }
          ]
        });

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
      })
      </script>
</x-layout>