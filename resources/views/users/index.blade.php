<x-layout>

    <h1 class="mb-4">Liste des Utilisateurs <span class="small text-secondary fw-normal">[{{count($users)}}]</span></h1>
  
    <div {{-- class="text-end" --}}>
        <a class="btn btn-success btn-sm mb-3" href="/users/create">
          <i class="bi bi-plus-lg"></i> Ajouter
        </a>
    </div>
  
    @if (count($users) > 0)
      <table class="table table-sm align-middle table-hover">
        <thead>
          <tr>
            <th style="width: 1%;" class="pe-3">Id</th>
            <th>Employé</th>
            <th>E-mail</th>
            <th>Rôle</th>
            <th style="width: 1%;" class="px-4">Actif</th>
            <th style="width: 1%;">Actions</th>
          </tr>
        </thead>
  
        <tbody class="table-group-divider">
  
          @foreach ($users as $user)
            <tr>
              <th class="fw-lighter text-secondary">#{{ $user->id }}</th>
              <td>{{ $user->nom }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role }}</td>
              @php
                 $icon = $user->est_actif ? 'check-circle' : 'x-circle';
                 $color = $user->est_actif ? 'success' : 'danger';
              @endphp
              <td class="text-center"><i class="bi bi-{{$icon}} text-{{$color}} fs-5"></i></td>
              <td>
                <div class="d-flex gap-1">
                    <a class="btn btn-primary btn-sm" href="/users/{{ $user->id }}/{{ $user->user_id }}/edit"><i class="bi bi-pencil"></i></a>
                    <a class="btn btn-danger btn-sm" href="/users/{{ $user->id }}/delete"><i class="bi bi-trash"></i></a>
                    {{-- Bouton d'action de suppression sans confirmation --}}
                    {{-- <form action="/users/{{ $user->id }}" method="POST">
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
      <div class="alert alert-info">Aucun utilisateur.</div>
    @endif
  
  </x-layout>