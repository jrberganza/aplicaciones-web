<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Estudiantes</title>
</head>

<body>
    @include("nav")
    <h1>Estudiantes</h1>
    <form action="/students/create"><input type="submit" value="Crear"/></form>
    @foreach ($students as $student)
    <h2>{{ $student->name }}</h2>
    <p><b>DPI:</b> {{ $student->dpi }}</p>
    <p><b>Número de teléfono:</b> {{ $student->telephone }}</p>
    <p><b>Género:</b> {{ $student->gender == "M" ? "Hombre" : ($student->gender == "F" ? "Mujer" : "No especificó") }}</p>
    <p><b>Carrera:</b> {{ $student->career }}</p>
    <p><b>Facultad:</b> {{ $student->faculty }}</p>
    <form action="/students/{{ $student->id }}"><input type="submit" value="Ver"/></form>
    <form action="/students/{{ $student->id }}/edit"><input type="submit" value="Editar"/></form>
    <form method="POST" action="/students/{{ $student->id }}">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar"/>
    </form>
    <hr />
    @endforeach
</body>

</html>