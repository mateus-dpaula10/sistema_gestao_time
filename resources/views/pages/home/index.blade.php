@extends('main')

@section('title', 'HORRIVER PLATE - Home')

@section('content')

    <div id="home">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                @foreach ($fotos as $foto)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="{{ $loop->index }}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach ($fotos as $foto)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ url("storage/{$foto->formFile}") }}" alt="{{ $foto->titulo }}" class="w-100">
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div id="sobre_nos">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-3">Sobre Nós</h1>
                        <p>Time fundado com o objetivo de se recrear aos finais de semanas com outros times com o mesmo propósito.</p>
                        <p>O time conta com atletas que fora das quatro linhas são amigos e que se recream de outras formas juntos também.</p>
                        <p>Fundado em julho de 2022, o time conta com algumas conquistas, incluindo seus acessórios de jogo (uniforme e bola)
                            e está em busca de progresso constante.
                        </p>
                        <p>
                            <b>Administração:</b>
                            <ul>
                                <li>Mateus De Paula</li>
                                <li>Vinícius Ferreira</li>
                                <li>Lucas Chagas</li>
                            </ul>
                             <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="resultados">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center mb-5">Resultados <small class="fs-6">(2023)</small></h1>

                        <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table">
                                        @foreach ($resultados as $resultado)
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <small>{{ date('d/m/Y', strtotime($resultado->data)) }}</small>
                                                    </th>

                                                    <td>HPFC</td>

                                                    @if ($resultado->placar_horriver > $resultado->placar_adversario)
                                                        <td class="fw-bold">{{ $resultado->placar_horriver }}</td>
                                                    @else
                                                        <td class="fw-normal">{{ $resultado->placar_horriver }}</td>
                                                    @endif

                                                    <td>x</td>

                                                    @if ($resultado->placar_adversario > $resultado->placar_horriver)
                                                        <td class="fw-bold">{{ $resultado->placar_adversario }}</td>
                                                    @else
                                                        <td class="fw-normal">{{ $resultado->placar_adversario }}</td>
                                                    @endif

                                                    <td>{{ $resultado->adversario }}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
