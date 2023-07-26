@extends('main')

@section('title', 'HORRIVER PLATE - Contato')

@section('content')

    <div id="contato">
        <div class="container py-5">
            <div class="ror">
                <div class="col-12">
                    <h1 class="text-center">Contato</h1>
                
                    <form action="{{ route('store.contato') }}" method="POST">
                        @csrf
                        <div class="row justify-content-center mt-5">
                            <div class="col-10 col-md-6 col-lg-4">
                                @if (session('success'))
                                    <p class="alert alert-success">{{ session('success') }}</p>
                                @endif
                                @if (session('error'))
                                    <p class="alert alert-danger">{{ session('error') }}</p>
                                @endif
                                <div class="form-group">
                                    <label for="contato_nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="contato_nome" name="contato_nome" required>
                                </div>
                
                                <div class="form-group mt-3">
                                    <label for="contato_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="contato_email" name="contato_email" required>
                                </div>
                
                                <div class="form-group mt-3">
                                    <label for="contato_celular" class="form-label">Celular</label>
                                    <input type="text" class="form-control" id="contato_celular" name="contato_celular" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="contato_msg" class="form-label">Mensagem</label>
                                    <textarea class="form-control" name="contato_msg" id="contato_msg" rows="5" required></textarea>
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
    
@endsection