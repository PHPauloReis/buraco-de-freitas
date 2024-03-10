@extends('template')
@section('main')
<section class="ranking">

    <div class="container">

        <div class="row">

            <div class="col-md">
                <h2>Faça sua denuncia</h2>
            </div>

        </div>

        <div class="row">

            <div class="col-md">

                <div class="card mb-5">

                    <form action="">

                        <div class="card-body text-left">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="nome" class="form-label">Qual o seu nome?</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Ex.: Pedro Santos">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Qual o seu e-mail?</label>
                                        <input type="email" class="form-control" id="email" placeholder="Ex.: email@gmail.com">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="local" class="form-label">Qual o local do buraco?</label>
                                        <input type="text" class="form-control" id="local" placeholder="Ex.: Av. Luiz Tarquinio Pontes, nº 137">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="referencia" class="form-label">Ponto de referência</label>
                                        <input type="text" class="form-control" id="referencia" placeholder="Ex.: Ao lado do mercado Rede Mix">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Fotografia</label>
                                    <div class="card-upload mb-5">
                                        <div class="content">
                                            <strong>Clique</strong> ou <strong>arraste</strong> uma<br>
                                            foto para aqui!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4 d-flex justify-content-center">
                                    <button class="btn btn-custom-success">
                                        <div class="content">
                                            <img src="./assets/images/icons/save.svg">
                                            <div class="label">Registrar denuncia</div>
                                        </div>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection
