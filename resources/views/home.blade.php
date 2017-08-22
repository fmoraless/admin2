@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Productos</div>

                <div class="panel-body">
                    
                    <div class="row">
                        @foreach($articles as $article)
                        <div class="item  col-xs-4 col-lg-4">
                            <div class="thumbnail">
                                <img class="group list-group-image" src="{{ asset('storage/'.$article->image) }}" alt="" />
                                <div class="caption">
                                    <h4 class="group inner list-group-item-heading">
                                        {{$article->name}}</h4>
                                    <p class="group inner list-group-item-text">
                                        {{$article->part_number}}</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                                ${{$article->price}}</p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success" href="#">
                                                <i class="glyphicon glyphicon-plus"></i> Añadir
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <p>
                        {{ $articles->total() }} registros |
                        páginas {{ $articles->currentPage() }}
                        de {{ $articles->lastPage() }}
                    </p>
                    {!! $articles->render() !!}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
