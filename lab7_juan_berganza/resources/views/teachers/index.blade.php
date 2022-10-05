<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profesores</title>
</head>

<body>
    @include("nav")
    <h1>Profesores</h1>
    <form action="/teachers/create"><input type="submit" value="Crear"/></form>
    @foreach ($teachers as $teacher)
    <h2>{{ $teacher->name }}</h2>
    <p><b>DPI:</b> {{ $teacher->dpi }}</p>
    <p><b>Número de teléfono:</b> {{ $teacher->telephone }}</p>
    <p><b>Género:</b> {{ $teacher->gender == "M" ? "Hombre" : ($teacher->gender == "F" ? "Mujer" : "No especificó") }}</p>
    <p><b>Grado académico:</b> {{ $teacher->academic_degree }}</p>
    <p><b>No. de Cursos Impartidos:</b> {{ $teacher->courses->count() }}</p>
    <form action="/teachers/{{ $teacher->id }}"><input type="submit" value="Ver"/></form>
    <form action="/teachers/{{ $teacher->id }}/edit"><input type="submit" value="Editar"/></form>
    <form method="POST" action="/teachers/{{ $teacher->id }}">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar"/>
    </form>
    <hr />
    @endforeach
</body>

</html>