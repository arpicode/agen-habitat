<x-layout>

  <form action="/users/authenticate" method="POST" class="mt-5 bg-light p-4 rounded-2 border mx-auto" style="max-width: 25rem;">
    <h1 class="mb-4 fs-3">Se connecter</h1>
    @csrf

    <label class="form-label" for="email">Utilisateur<sup>&nbsp;*</sup></label>
    <input id="email" class="form-control form-control-sm mb-1" type="email" name="email" placeholder="email@ah.fr" value="{{ old('email') ?? 'user@ah.fr' }}">
    @error('email')
      <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
    @enderror
    
    <label class="form-label mt-2" for="password">Mot de passe<sup>&nbsp;*</sup></label>
    <input id="password" class="form-control form-control-sm" type="password" name="password" value="$123">
    @error('mot_de_passe')
      <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
    @enderror
    
    <p class="small text-secondary mt-4"><sup>&nbsp;*</sup> champs obligatoires.</p> 
    
    <button class="btn btn-primary btn-sm mt-3" type="submit">Se connecter</button>
    <a class="btn btn-secondary btn-sm mt-3" href="/">Retour</a>
  </form>

</x-layout>