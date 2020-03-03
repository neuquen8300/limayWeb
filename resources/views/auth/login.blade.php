@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <span></span>
        </div>
        <div class="col-12 col-md-6">
            
                <h2>{{ __('INICIAR SESIÓN') }}</h2>

                        @if($errors)
                        <div class='rounded bg-rojo'>
                            @foreach ($errors->all() as $error)
                                <div class="py-2">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <form method="POST" action="{{ action('Auth\LoginController@login') }}">
                        @csrf
                        
                        <div class="row pb-3">
                            <label for="username" class="col-12"><p>{{ __('Usuario:') }}</p></label>

                            <div class="col-12">
                                <input id="username" type="text" class="w-100 @error('username') is-invalid @enderror" name="username"  placeholder='Tu usuario...' value="{{ old('username') }}" required autocomplete="username" >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-3">
                            <label for="password" class="col-12"><p>{{ __('Contraseña:') }}</p></label>

                            <div class="col-12">
                                <input id="password" type="password" class="w-100 @error('password') is-invalid @enderror" placeholder="Tu contraseña..." name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-12">
                                <div class="form-check mt-2 mb-1">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        <p>
                                            {{ __('Dejar sesión iniciada') }}
                                        </p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn my-2 shadow-btn mr-3 bg-blue white">
                                    {{ __('INICIAR SESIÓN') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn bd-blue blue my-2" href="{{ route('password.request') }}">
                                        {{ __('Me olvidé la contraseña') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

        </div>
    </div>
</div>
@endsection
