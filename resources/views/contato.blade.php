@extends('template')
@section('main')
<section>

    <div class="container">

        <div class="row">

            <div class="col-md">
                <h2>Fale conosco</h2>
            </div>

        </div>

        @include('commons.alerts')

        <div class="row">

            <div class="col-md">

                <div class="card mb-5">

                    <form action="{{ route('contact.sendMail') }}" method="post">

                        @csrf

                        <div class="card-body text-left">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label">Qual o seu nome?</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ex.: Pedro Santos" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Qual o seu e-mail?</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Ex.: email@gmail.com" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="message" class="form-label">Sua mensagem</label>
                                        <textarea class="form-control" id="message" name="message" rows="10" placeholder="Sua mensagem">{{ !empty($defaultReportMessage) ? $defaultReportMessage : old('message') }}</textarea>
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
