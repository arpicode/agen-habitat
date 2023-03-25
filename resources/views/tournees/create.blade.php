<x-layout>

<h1 class="mb-5">Création d'une tournée</h1>

<form action="/tournees/{{$employe->id}}" method="POST" class="bg-light border rounded-2 m-auto p-4" class="m-auto" style="max-width: 35rem;">
    @csrf

    <input type="hidden" name="employe_id" value="{{$employe->id}}">

    <label class="form-label" for="nom">Nom</label>
    <input class="form-control" type="text" name="nom" id="nom">
    @error('nom')
      <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
    @enderror

    <div class="text-end">
        <button class="btn btn-primary btn-sm mt-4" type="submit">Créer</button>
    </div>
</form>


</x-layout>