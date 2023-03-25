<x-layout>

<h1>Inspections de la tournée</h1>

@if (count($inspections) > 0)
<table class="table table-sm align-middle table-hover">
  <thead>
    <tr>
      <th style="width: 1%;" class="pe-3">N°</th>
      <th>RDV</th>
      <th>Logement</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">

    @foreach ($inspections as $inspection)
      <tr>
        <th class="fw-lighter text-secondary">#{{ $inspection->id }}</th>
        <td>{{ $inspection->date_heure_rdv }}</td>
        <td>{{ $inspection->adresse }}</td>
      </tr>
    @endforeach

  </tbody>
</table>
@else
    <div class="alert alert-info">Aucune inspections.</div>
@endif

</x-layout>