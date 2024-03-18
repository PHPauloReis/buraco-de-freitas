@extends('template')
@section('main')
<section>

    <div class="container">

        <div class="row">

            <div class="col-md">
                <h2>Faça sua denuncia</h2>
            </div>

        </div>

        @include('commons.alerts')

        <div class="row">

            <div class="col-md">

                <div class="card mb-5">

                    <form action="{{ route('complaint.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="card-body text-left">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="author" class="form-label">Qual o seu nome?</label>
                                        <input type="text" class="form-control" id="author" name="author" placeholder="Ex.: Pedro Santos" value="{{ old('author') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="author_email" class="form-label">Qual o seu e-mail?</label>
                                        <input type="text" class="form-control" id="email_author" name="email_author" placeholder="Ex.: email@gmail.com" value="{{ old('email_author') }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="localization" class="form-label">Qual o local do buraco?</label>
                                        <input type="text" class="form-control" id="localization" name="localization" placeholder="Ex.: Av. Luiz Tarquinio Pontes, nº 137" value="{{ old('localization') }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="reference" class="form-label">Ponto de referência</label>
                                        <input type="text" class="form-control" id="reference" name="reference" placeholder="Ex.: Ao lado do mercado Rede Mix" value="{{ old('reference') }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Fotografia</label>
                                    <div id="dropzone" class="card-upload mb-5" data-text="Clique ou arraste uma foto para aqui!">
                                        <div class="content"></div>
                                        <input type="hidden" name="photo" id="photo">
                                    </div>
                                    <div class="previewsContainer"></div>
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
