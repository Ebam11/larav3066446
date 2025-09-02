@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Categoría</h1>

    {{-- Mensaje de error --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nombre de categoría</label>
        <input type="text" name="name" id="name" required>
    </div>
    <button type="submit">Guardar</button>
</form>


    {{-- Sugerencias --}}
    @if(!empty($suggested))
        <h3>Categorías sugeridas:</h3>
        <ul>
            @foreach($suggested as $s)
                <li>{{ $s }}</li>
            @endforeach
        </ul>
    @endif

    <br>
    <a href="{{ route('categories.index') }}">Volver a la lista</a>
@endsection
