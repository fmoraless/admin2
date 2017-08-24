@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="card article text-left">
        <h1>{{ $article->name }}</h1>
        <div class="row">
            <div class="col-sm-6 col-xs-12"></div>
            <div class="col-sm-6 col-xs-12">
                <p>
                    <strong>Descripción</strong>
                </p>
                <p>
                    {{$article->description}}
                </p>
                <p>
                    @include("in_cotizacion_carts.form", ["article" => $article])
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
