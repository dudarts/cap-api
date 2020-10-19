@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Caixa Eletrônico</div>

                    <div class="card-body">
                        <div class="container">
                            @if (isset($erro))
                                @if ($erro)
                                    <h3>Não foi possível acessar o saldo, tenta novamente</h3>
                                @else
                                    <h1>Saldo atual: <b>R$ {{ $saldo }}</b></h1>
                                @endif
                                <a href="/home" class="btn btn-secondary">Voltar</a>
                            @else
                                <form-saldo></form-saldo>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
