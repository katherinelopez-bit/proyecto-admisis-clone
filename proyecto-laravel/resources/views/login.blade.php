
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Sistema Contable</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0f172a;
            color: #e5e7eb;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contenedor {
            background-color: #172b46;
            width: 90%;
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #29496d;
        }

        h1 {
            text-align: center;
            color: #93c5fd;
            margin-top: 0;
        }

        p {
            text-align: center;
            color: #cbd5e1;
        }

        label {
            display: block;
            margin-top: 18px;
            margin-bottom: 7px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #64748b;
            border-radius: 5px;
            background-color: #0f172a;
            color: white;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <h1>Sistema Contable</h1>
        <p>Inicia sesión para continuar</p>


            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf

                <label for="email">Correo electrónico</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="contador@ejemplo.com"
                    value="{{ old('email') }}"
                    required
                >

                <label for="password">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Ingresa tu contraseña"
                    required
                >

                @if ($errors->any())
                    <p style="color: #fca5a5;">
                        {{ $errors->first() }}
                    </p>
                @endif

                <button type="submit">Iniciar sesión</button>
            </form>

    </div>
</body>
</html>
