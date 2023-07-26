@extends('pages.login.layout')

@section('title', 'Login')

@section('content')

    <div id="login_view">
        @if (session('error'))
            <p class="alert alert-danger">{{ session('error') }}</p>
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </div>
        @endif
        <h3>Entrar</h3>
        <form action="{{ route('login.auth') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group mt-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label">Senha</label>
                </div>
                <div class="form-group position-relative">
                    <input type="password" class="form-control" name="password">
                    <i class="fa-solid fa-eye ver_senha" id="senha_sim"></i>
                    <i class="fa-solid fa-eye-slash ver_senha" id="senha_nao"></i>
                </div>
                <div class="form-group mt-3">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">
                      Lembrar-me
                    </label>
                </div>
                <div class="form-group mt-3">
                    <input class="btn btn-success float-end ms-2" type="submit" value="Entrar">
                    <a href="{{ route('login.create') }}" class="btn btn-primary float-end">
                        Criar nova conta
                    </a>
                </div>
            </div>
        </form>
    </div>  

@endsection