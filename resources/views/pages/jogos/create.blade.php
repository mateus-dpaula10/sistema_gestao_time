@extends('main')

@section('title', 'HORRIVER PLATE - Criar jogo')

@section('content')

    <div id="criar_jogos">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Criar</h1>
    
                <form action="{{ route('store.jogos') }}" method="POST">
                    @csrf
                    <div class="row justify-content-center mt-5">
                        <div class="col-10 col-md-8 col-lg-6">
                            <div class="row">
                                <div class="form-group col-md-7">
                                    <label for="adversario" class="form-label">Adversário</label>
                                    <input type="text" class="form-control" id="adversario" name="adversario" required>
                                </div>
                                <div class="form-group col-md-5 mt-3 mt-md-0">
                                    <label for="data" class="form-label">Data</label>
                                    <input type="datetime-local" class="form-control" id="data" name="data" required>
                                </div>
                                <div class="form-group col-md-7 mt-3">
                                    <label for="local" class="form-label">Local</label>
                                    <input type="text" class="form-control" id="local" name="local" required>
                                </div>
                                <div class="form-group col-md-5 mt-3">
                                    <label for="valor" class="form-label">Valor</label>
                                    <input type="text" class="form-control" id="valor" name="valor">
                                </div>
                                <div class="form-group col-12 col-md-6 mt-3">
                                    <label for="jogo_local" class="form-label">Pode chuteira de campo?</label>
                                    <select class="form-select" name="chuteira_campo" required>
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <input type="submit" class="btn btn-success float-end">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection