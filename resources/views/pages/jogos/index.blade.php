@extends('main')

@section('title', 'HORRIVER PLATE - Jogos')

@section('content')

    <div id="proximos_jogos">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Próximos jogos</h1>

                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if (session('error'))
                        <p class="alert alert-danger">{{ session('error') }}</p>
                    @endif

                    <div class="table-responsive mt-5">
                        <table class="table table-danger table-striped table-hover">
                            <thead>
                              <tr>
                                {{-- <th scope="col"></th> --}}
                                <th scope="col">Adversário</th>
                                <th scope="col">Data</th>
                                <th scope="col">Local</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Pode chuteira de campo?</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($jogos as $jogo)
                                    <tr>
                                    {{-- <th scope="row">{{ $jogo->id }}</th> --}}
                                    <td>{{ $jogo->adversario }}</td>
                                    <td>{{ date('H:i - d/m/Y', strtotime($jogo->data)) }}</td>
                                    <td>{{ $jogo->local }}</td>
                                    <td>{{ $jogo->valor }}</td>
                                    <td>{{ $jogo->chuteira_campo }}</td>
                                    </tr>
                                @endforeach
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
