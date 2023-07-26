@extends('main')

@section('title', 'Editar foto')

@section('content')

    <div id="editar_foto">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ url("/storage/{$fotos->formFile}") }}" class="img-fluid" alt="{{ $fotos->titulo }}">
                </div>

                <div class="col-md-7">
                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif

                    <h5>{{ $fotos->titulo }}</h5>

                    <form action="{{ route('update.foto', ['id' => $fotos->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group mt-3">
                                <label class="form-label">Título do jogo:</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label">Editar foto do jogo:</label>
                                <input class="form-control" type="file" name="formFile">
                            </div>

                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-success float-end" value="Editar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection