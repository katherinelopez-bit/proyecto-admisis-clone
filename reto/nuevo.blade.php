
@extends('torta')

@section('titulo', 'Registrar torta')

@section('contenido')
    <section>
        <h1>Registrar una torta</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/tortas/nuevo" method="POST">
            @csrf

            <div>
                <label for="sabor">Sabor de la torta:</label>
                <input type="text" id="sabor" name="sabor">
            </div>

            <div>
                <label for="precio">Precio en Bs:</label>
                <input type="number" id="precio" name="precio">
            </div>
            <div>
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock" min="0" required>
            </div>

            <button type="submit">Registrar torta</button>
        </form>
    </section>
@endsection
