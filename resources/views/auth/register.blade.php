@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <span></span>
        </div>
        <div class="col-12 col-md-6">
            
                <h2>{{ __('REGISTRAR USUARIO') }}</h2>

                
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row pb-3">
                            <label for="name" class="col-12">{{ __('Nombre') }}</label>

                            <div class="col-12">
                                <input id="name" type="text" class="w-100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row pb-3">
                            <label for="surname" class="col-12">{{ __('Apellido') }}</label>

                            <div class="col-12">
                                <input id="surname" type="text" class="w-100 @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row pb-3">
                            <label for="email" class="col-12">{{ __('Email') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row pb-3">
                            <label for="role" class="col-12">{{ __('Tipo de usuario:') }}</label>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input id="cliente" type="radio" class="" name="role" value="cliente" >
                                        <label for="cliente">Cliente</label>
                                    </div>
                                                           
                                    <div class="col-12 col-md-4">
                                        <input id="vendedor" type="radio" class="" name="role" value="vendedor" >
                                        <label for="vendedor">Vendedor</label>
                                    </div> 
                                    <div class="col-12 col-md-4">
                                        <input id="admin" type="radio" class="" name="role" value="admin" >
                                        <label for="admin">Administrador</label>
                                    </div>  
                                    </div>                             
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row pb-3">
                            <label for="username" class="col-12">{{ __('Nombre de usuario:') }}</label>

                            <div class="col-12">
                                <input id="username" type="text" class="w-100 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-3">
                            <label for="password" class="col-12">{{ __('Password') }}</label>

                            <div class="col-12">
                                <input id="password" type="password" class="w-100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-3">
                            <label for="password-confirm" class="col-12">{{ __('Confirm Password') }}</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password" class="w-100" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn white bg-blue">
                                    {{ __('REGISTRAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
            
        </div>
    </div>
</div>
@endsection
