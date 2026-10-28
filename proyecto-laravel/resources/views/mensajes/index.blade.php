@extends('base')

@section('titulo', 'Mensajes - Sistema Contable')

@section('contenido')
    <section>
        <h2>Mensajes de contacto</h2>

        <p>
            Aquí puedes consultar los mensajes enviados
            desde el formulario de contacto del Sistema Contable.
        </p>

        <p>
            Hay {{ count($mensajes) }} mensajes registrados.
        </p>

        @forelse ($mensajes as $mensaje)
            <article>
                <h3>{{ $mensaje->nombre }}</h3>

                <p>Correo: {{ $mensaje->correo }}</p>
                <p>Teléfono: {{ $mensaje->telefono }}</p>
                <p>Mensaje: {{ $mensaje->mensaje }}</p>
                <p>Fecha: {{ $mensaje->created_at }}</p>
            </article>
            <hr>
        @empty
            <p>Todavía no hay mensajes registrados.</p>
        @endforelse

        <a href="/contacto">Volver al formulario</a>
    </section>
@endsection