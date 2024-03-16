@extends('template')
@section('main')
<section>

    <div class="container">

        <div class="row">

            <div class="col-md">
                <h2>Fale conosco</h2>
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
                                        <label for="mensagem" class="form-label">Sua mensagem</label>
                                        <textarea class="form-control" id="mensagem" rows="10" placeholder="Sua mensagem">{{ $defaultReportMessage }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4 d-flex justify-content-center">
                                    <button class="btn btn-custom-success">
                                        <div class="content">
                                            <div class="label">Enviar</div>
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
