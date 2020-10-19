@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Caixa Eletrônico</div>

                    <div class="card-body">
                        <div class="container">
                            <menu-principal class="mb-2"></menu-principal>

                            @if (session("msg"))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session("msg") }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if (session("erro"))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session("erro") }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
