@extends('layouts.site.adm')

@section('page_title', 'Entrar no sistema')

@include('layouts._nav')

@section('content')

<form class="form-horizontal" method="post" action="{{ route('logar') }}">
	{{ csrf_field() }}

        <div class="container">
            <div class="card">
                <div class="card-header text-black-50">
                    <h1><i class="fas fa-users"></i> @yield('page_title')</h1>
                </div>
                <div class="card-body">			
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>	
                    </div>

        			<div class="form-group row">
                        <label for="senha" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                        <div class="col-md-6">
                            <input id="senha" type="password" class="form-control @error('senha') is-invalid @enderror" name="senha" required autocomplete="current-senha">

                            @error('senha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Lembrar-me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
            	      		<a href="{{ route('index')}}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
                
                <hr>
                <div class="card-body">
                    <a href="{{ route('site.usuario.create')}}" class="card-link"><i class="fas fa-user-graduate"></i>  Quero me  cadastrar</a>

                    <!-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            <i class="fas fa-unlock-alt"></i> {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif -->

                    <a href="#" class="card-link"><i class="fas fa-unlock-alt"></i>  Esqueci minha senha</a>
                </div>
            </div>
        </div>
</form>

@endsection

