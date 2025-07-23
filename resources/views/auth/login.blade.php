@extends('layouts.auth')

@section('title')
    Se connecter | Admin
@endsection

@section('content')
<div class="card overflow-hidden">
    <div class="bg-primary bg-soft">
        <div class="row">
            <div class="col-7">
                <div class="text-primary p-4">
                    <h5 class="text-primary">Bienvenu !</h5>
                    <p>Veuillez entrer vos indentifiant pour continuer la session.</p>
                </div>
            </div>
            <div class="col-5 align-self-end">
                <img src="/img/logo_iicacfv.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card-body pt-0"> 
        <div class="auth-logo">
            <a href="/" class="auth-logo-light">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="/img/logo_iicacfv.png" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>

            <a href="/" class="auth-logo-dark">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="/img/logo_iicacfv.png" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>
        </div>
        <div class="p-2">
            <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="username" class="form-label">Nom d'Utilisateur</label>
                    <input name="email" type="email" class="form-control @error('name') is-invalid @enderror" id="email" placeholder="Entrer votre email"
                    value="{{old('email')}}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-1">
                    <label class="form-label">Mot de passe</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" aria-label="Password" 
                        value="{{old('password')}}" aria-describedby="password-addon">
                        <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember-check"
                    {{old('remember') ? 'checked' : ''}}>
                    <label class="form-check-label" for="remember-check">
                        Se souvener de moi
                    </label>
                </div>
                
                <div class="mt-1 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Connecter</button>
                </div>

                <div class="mt-2 text-center ">
                    {{-- @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Mot de passe oublié ?</a>
                    @endif --}}
                     <p class="mt-2">Pas de compte ? <a href="{{ route('register') }}" class="fw-medium text-primary"> Créer maintenant </a> </p>
                    <div class="mt-1">
                        <p>© <script>document.write(new Date().getFullYear())</script> IICAC-FV</p>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<div class="mt-1 text-center">
    
</div>
@endsection
