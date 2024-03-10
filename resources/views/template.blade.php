<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buraco de Freitas - Listagem de todos os buracos de Lauro de Freitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg_header" data-bs-theme="dark">
        <div class="container">

            <div class="brand">
                <img src="./assets/images/icons/cam.svg">
                <div class="brand_label">Buraco de Freitas</div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu-principal">
                <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="#"><img src="./assets/images/icons/home.svg"> Home</a>
                <a class="nav-link" href="#"><img src="./assets/images/icons/megaphone.svg"> Denunciar</a>
                <a class="nav-link" href="#"><img src="./assets/images/icons/phone.svg"> Contato</a></a>
                </div>
            </div>

        </div>
    </nav>

    <main>

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

    </main>

    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center my-5">
                    Copyright @ 2024 - Buraco de Freitas  - Todos os direitos reservados<br>
                    Desenvolvido com muito ♥ <br class="d-xs-block d-md-none">por: Fulano de Tal
                </div>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
