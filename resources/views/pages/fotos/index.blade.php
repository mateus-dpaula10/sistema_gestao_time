@extends('main')

@section('title', 'HORRIVER PLATE - Criar fotos')

@section('content')

    <div id="criar_fotos">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-5">Criar fotos</h1>

                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if (session('error'))
                        <p class="alert alert-danger">{{ session('error') }}</p>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col-10 col-md-8 col-lg-6">                            
                            @foreach ($fotos as $foto)
                                <a href="{{ route('show.foto', ['id' => $foto->id]) }}">
                                    <div class="row">
                                        <div class="col-md-2 mt-2">
                                            <h6 class="fw-normal">{{ $foto->titulo }}</h6>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <img src="{{ url("storage/{$foto->formFile}") }}" class="img-fluid">
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>                    
            
                    <form action="{{ route('store.foto') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center mt-5">
                            <div class="col-10 col-md-8 col-lg-6">
                                <div class="form-group">
                                    <label for="titulo" class="form-label">Descrição do jogo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="formFile" class="form-label">Foto do jogo</label>
                                    <img class="img-fluid mb-2" id="imgPreview">
                                    <input class="form-control" type="file" id="formFile" name="formFile" onchange="uploadImg()" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="submit" class="btn btn-success float-end">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function uploadImg()
        {
            var img = new FileReader();
            img.readAsDataURL(document.getElementById("formFile").files[0]);

            img.onload = function (e) {
                document.getElementById("imgPreview").src = e.target.result;
            };
        }
    </script>

@endsection