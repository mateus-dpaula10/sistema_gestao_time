@extends('main')

@section('title', 'HORRIVER PLATE - Perfil')

@section('content')

    <div id="editar_perfil">
        <h1>Perfil</h1>

        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
            <p class="alert alert-danger">{{ session('error') }}</p>
        @endif

        <div class="row mt-5">
            <div class="col-lg-5">
                teste
            </div>

            <div class="col-lg-7">
                <form action="{{ route('login.update', ['id' => auth()->user()->id]) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome</label>
                            <input class="form-control" type="text" id="nome" value="{{ auth()->user()->name }}" disabled>
                        </div>
        
                        <div class="form-group mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" id="email" value="{{ auth()->user()->email }}" disabled>
                        </div>
        
                        <div class="form-group mt-3">
                            <label for="password" class="form-label">Senha</label>
                        </div>

                        <div class="form-group position-relative">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Digite sua nova senha:">
                            <i class="fa-solid fa-eye pass_edit" id="pass_show"></i>
                            <i class="fa-solid fa-eye-slash pass_edit" id="pass_hide"></i>
                        </div>

                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success float-end" value="Alterar senha">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection