@extends('pages.login.layout')

@section('title', 'Criar usuário')

@section('content')

    <h3>Cadastre-se</h3>

    <form action="{{ route('login.register') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group mt-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group mt-3">
                <label class="form-label">Senha</label>        
                <input type="password" class="form-control" name="password" required>                
            </div>
            <div class="form-group mt-3">
                <input class="btn btn-success float-end ms-2" type="submit" value="Registrar">
                <a href="{{ route('login.login') }}" class="btn btn-primary float-end">
                    Já tenho conta
                </a>
            </div>
        </div>
    </form>    

@endsection