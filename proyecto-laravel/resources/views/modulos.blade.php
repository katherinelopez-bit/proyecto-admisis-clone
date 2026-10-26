
@extends('base')

@section('titulo', 'Inicio - Sistema Contable')

@section('contenido')
   <section id="modulos" class="seccion-modulos">
            <h3>Principales módulos</h3>

            <article class="modulo">
                <h4>Empresas y clientes</h4>
                <p>
                    Administración de la información de las empresas y clientes
                    gestionados por el contador.
                </p>
            </article>

            <article class="modulo">
                <h4>Registro contable</h4>
                <p>
                    Organización y seguimiento de las operaciones contables.
                </p>
            </article>

            <article class="modulo">
                <h4>Reportes</h4>
                <p>
                    Consulta y generación de información para el control
                    y análisis contable.
                </p>
            </article>

        </section>

        <section class="seccion-final">
            <h3>Una herramienta para el trabajo del contador</h3>
            <p>
                El sistema busca simplificar las tareas contables y centralizar
                la información necesaria para una gestión más organizada.
            </p>
        </section>
@endsection
