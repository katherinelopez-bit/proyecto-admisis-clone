
@extends('torta')

@section('titulo', 'Pasteleria La Espiga')

@section('contenido')
    <section>
        

      

        <p>
            Hay {{ count($tortas) }} tortas en la vitrina.
        </p>

        @foreach ($tortas as $torta)
            <div>
                <p>Sabor: {{ $torta->sabor }}</p>
                <p>Precio: Bs {{ $torta->precio }}</p>
                <p>Stock: {{ $torta->stock }} unidades</p>
            </div>
        @endforeach

        <p>Vitrina atendida por Katherine Lopez Ramos</p>

        <a href="/tortas/nuevo">Registrar una nueva torta</a>
    </section>
@endsection
