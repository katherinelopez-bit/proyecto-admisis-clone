@extends('base')

@section('titulo', 'Contacto - Sistema Contable')

@section('contenido')
     <section id="contacto" class="seccion-contacto">
                <div>
                    <h3>Dónde encontrarnos</h3>

                        <p>Dirección: Av.Esteban Arce</p>
                        <p>Horarios: lunes a sábado, de 8:00am a las 5:00pm</p>
                        <p>WhatsApp: 73692763</p>

                </div>
            <h3>Escríbenos</h3>
            <form id="form-contacto" novalidate method="POST" action="procesar.php">

                <div class="campo">
                    <label for="nombre">Nombre completo</label>
                    <input 
                        type="text" 
                        id="nombre" 
                        name="nombre"
                        placeholder="Tu nombre"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="correo">Correo electrónico</label>
                    <input 
                        type="email" 
                        id="correo" 
                        name="correo"
                        placeholder="tu@correo.com"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="telefono">Teléfono</label>
                    <input 
                        type="tel" 
                        id="telefono" 
                        name="telefono"
                        placeholder="700 12345"
                        required
                    >
                </div>


                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje"
                        placeholder="Escribe tu mensaje"
                        rows="2"
                        
                    ></textarea> 
                </div>

                    <button type="submit">Enviar mensaje</button>
                   
               

            </form>
             <p id="aviso-contacto" class="aviso"> </p>
           

        </section>
@endsection