<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Estudiantes</title>
</head>

<body>
    @include('nav')
    <p><a href="/students">Regresar a lista de estudiantes</a></p>
    <h1>{{ $student->name }}</h1>
    <p><b>DPI:</b> {{ $student->dpi }}</p>
    <p><b>Dirección:</b> {{ $student->address }}</p>
    <p><b>Número de teléfono:</b> {{ $student->telephone }}</p>
    <p><b>Departamento:</b> {{ $student->department }}</p>
    <p><b>Municipio:</b> {{ $student->municipality }}</p>
    <p><b>Zona:</b> {{ $student->zone }}</p>
    <p><b>Fecha de cumpleaños:</b> {{ $student->birthdate }}</p>
    <p><b>Género:</b> {{ $student->gender == 'M' ? 'Hombre' : ($student->gender == 'F' ? 'Mujer' : 'No especificó') }}
    </p>
    <p><b>Carrera:</b> {{ $student->career }}</p>
    <p><b>Facultad:</b> {{ $student->faculty }}</p>
    <form action="/students/{{ $student->id }}/edit"><input type="submit" value="Editar" /></form>
    <form method="POST" action="/students/{{ $student->id }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar" />
    </form>
</body>

</html>
