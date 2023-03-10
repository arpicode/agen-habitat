<x-layout>

  <form action="/users" method="POST" class="mb-4 bg-light p-4 rounded-2 border mx-auto" style="max-width: 28rem;">
    <h1 class="mb-4 fs-3">Créer Utilisateur</h1>
    @csrf

    <div class="row">
      <div class="col">
        <label class="form-label" for="prenom">Prénom<sup>&nbsp;*</sup></label>
        <input id="prenom" class="form-control form-control-sm mb-1" type="text" name="prenom" value="{{ old('prenom') }}">
        @error('prenom')
        <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="col">
        <label class="form-label" for="nom">Nom<sup>&nbsp;*</sup></label>
        <input id="nom" class="form-control form-control-sm" type="text" name="nom" value="{{ old('nom') }}">
        @error('nom')
        <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
          @enderror
        </div>
      </div>

    <div class="row">
      <div class="col-7">
        <label class="form-label mt-2" for="email">E-Mail<sup>&nbsp;*</sup></label>
        <input id="email" class="form-control form-control-sm" type="email" name="email" value="{{ old('email') }}">
        @error('email')
        <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="col-5">
        <label class="form-label mt-2" for="role">Rôle<sup>&nbsp;*</sup></label>
        <select name="role" id="role" class="form-select form-select-sm">
          <option value="inspecteur">Inspecteur</option>
          <option value="admin">Admin</option>
          <option value="super">Super</option>
        </select>
      </div>
    </div>
  
    <label class="form-label mt-2" for="password">Mot de passe<sup>&nbsp;*</sup></label>
    <input id="password" class="form-control form-control-sm" type="password" name="password" value="{{ old('password') }}">
    @error('password')
      <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
    @enderror
  
    <label class="form-label mt-2" for="password_confirmation">Confirmer le mot de passe<sup>&nbsp;*</sup></label>
    <input id="password_confirmation" class="form-control form-control-sm" type="password" name="password_confirmation">
    @error('password_confirmation')
      <p class="text-danger small mt-1 mb-0">{{ $message }}</p>
    @enderror
  
    <p class="small text-secondary mt-4"><sup>&nbsp;*</sup> champs obligatoires.</p> 
    
    <button class="btn btn-primary btn-sm mt-3" type="submit">Créer</button>
    <a class="btn btn-secondary btn-sm mt-3" href="/">Retour</a>
  </form>
  
</x-layout>