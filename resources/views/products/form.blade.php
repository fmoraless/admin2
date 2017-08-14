{!! Form::open(['url' => $url, 'method' => $method ]) !!}

    <div class="form-group">
        {{ Form::text('name',$product->name,['class' => 'form-control', 'placeholder' => 'Nombre...']) }}
    </div>
    <div class="form-group">
        {{ Form::number('price',$product->price,['class' => 'form-control', 'placeholder' => 'Precio de tu Producto en dólar'] )}}
    </div>
    <div class="form-group">
        {{ Form::textarea('description',$product->description,['class' => 'form-control', 'placeholder' => 'Describe tu Producto...']) }}
    </div>
    <div class="form-group text-right">
        <a href="{{url('/products')}}">Regresar al listado de productos</a>
        <input type="submit" value="Guardar" class="btn btn-success">
    </div>

    {!! Form::close() !!}
