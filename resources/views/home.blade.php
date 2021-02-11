@extends('layouts.app')

@section('content')
<meta http-equiv = "refresh" content = "2; url = ./produtos" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
					<h1><a href="{{url('produtos')}}">Lista de Produtos</a><h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
