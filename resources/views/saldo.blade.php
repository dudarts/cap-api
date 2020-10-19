@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Caixa Eletrônico</div>

                    <div class="card-body">
                        <div class="container">
                            <?php
                            if (isset($erro)) {
                                if ($erro){
                            ?>
                                <h3>Não foi possível acessar o saldo, tenta novamente</h3>
                                <?php
                                } else {
                                    echo "<h1>Saldo atual: <b>R$ " . $saldo . "</b></h1>";
                                }
                                echo '<a href="/home" class="btn btn-secondary">Voltar</a>';
                            } else {
                            ?>
                                <form-saldo></form-saldo>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
