@extends('template')
@section('main')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero px-5 text-center d-flex flex-column justify-content-center align-items-center rounded-4">
                    <h1 class="mb-4">Encontrou um buraco em<br>Lauro de Freitas?</h1>
                    <a class="btn btn-primary hero-button">
                        <img src="./assets/images/icons/megaphone.svg">
                        Denuncie agora mesmo!
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-3 mb-3 denuncias">

    <div class="container">

        <div class="row">

            <div class="col-md">
                <h2>Últimos registros </h2>
            </div>

        </div>

        <div class="row">

            @foreach ([1, 2, 3,4 ,5 ,6] as $item)

            <div class="col-md-4">

                <div class="card">
                    <div class="card-body">
                        <img src="./assets/images/denuncias/1234.png" alt="Buraco na Av. Luiz Tarquinio Pontes">
                        <h3>Av. Luiz Tarquíneo, 233, Centro</h3>
                        <p>Próximo a Alto Escola ViIas</p>
                        <p><strong>Registrado há 3 meses</strong></p>

                        <hr>

                        <p>Não está mais lá? <a href="/contato">Reporte</a></p>
                    </div>
                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section class="ranking">

    <div class="container">

        <div class="row">

            <div class="col-md">
                <h2>Ranking de Março de 2024</h2>
            </div>

        </div>

        <div class="row">

            <div class="col-md">

                <div class="card">

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: left">Nome</th>
                                    <th scope="col">Denuncias</th>
                                    <th scope="col">Posição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td class="top" style="text-align: left">João Joaquim Silva e Santos</td>
                                    <td>722</td>
                                    <td><img src="./assets/images/icons/gold.svg"></td>
                                </tr>
                                <tr class="align-middle">
                                    <td style="text-align: left">Vanessa Santana Anunciação</td>
                                    <td>534</td>
                                    <td><img src="./assets/images/icons/silver.svg"></td>
                                </tr>
                                <tr class="align-middle">
                                    <td style="text-align: left">Diego Matos Abraão Silva</td>
                                    <td>113</td>
                                    <td><img src="./assets/images/icons/bronze.svg"></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection
