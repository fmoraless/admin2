{!! Form::open(['url' => '/in_cotizacion_carts', 'method' =>
    'POST',"class" => "inline-block" ]) !!}
<input type="hidden" name="article_id" value="{{$article->id}}">
<input type="submit" value="Añadir" class="btn btn-info">

{!! Form::close() !!}

<!--<a class="btn btn-success" href="">-->
 <!--   <i class="glyphicon glyphicon-plus"></i> Añadir
