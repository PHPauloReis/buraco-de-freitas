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

        @yield('main')

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
