<x-layout>

<h1>Inspections de la tournée</h1>

@if (count($inspections) > 0)
<table class="table table-sm align-middle table-hover">
  <thead>
    <tr>
      <th style="width: 1%;" class="pe-3">N°</th>
      <th>RDV</th>
      <th>Logement</th>
      <th style="width: 1%;">Actions</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">

    @foreach ($inspections as $inspection)
      <tr>
        <th class="fw-lighter text-secondary">#{{ $inspection->id }}</th>
        <td>{{ $inspection->date_heure_rdv }}</td>
        <td>{{ $inspection->adresse }}</td>
        <td>
          <div class="d-flex gap-1">
            <a class="btn btn-primary btn-sm" href="/inspections/{{ $employe->id }}/{{ $inspection->id }}/edit"><i class="bi bi-pencil"></i></a>

            <form action="/inspections/{{ $employe->id }}/{{ $inspection->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash"></i></button>
            </form>
          </div>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
@else
    <div class="alert alert-info">Aucune inspections.</div>
@endif

</x-layout>