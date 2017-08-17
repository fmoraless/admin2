@extends("layouts.app")

@section("content")
<div class="big-padding text-center blue-grey white-text">
    <h1>Artículos</h1>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->name }}</td>
                <td>{{ $article->price }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
