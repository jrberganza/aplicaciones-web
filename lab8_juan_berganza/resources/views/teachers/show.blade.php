<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profesores</title>
</head>

<body>
    @include("nav")
    <p><a href="/teachers">Regresar a lista de profesores</a></p>
    <h1>{{ $teacher->name }}</h1>
    <p><b>DPI:</b> {{ $teacher->dpi }}</p>
    <p><b>Dirección:</b> {{ $teacher->address }}</p>
    <p><b>Número de teléfono:</b> {{ $teacher->telephone }}</p>
    <p><b>Departamento:</b> {{ $teacher->department }}</p>
    <p><b>Municipio:</b> {{ $teacher->municipality }}</p>
    <p><b>Zona:</b> {{ $teacher->zone }}</p>
    <p><b>Fecha de cumpleaños:</b> {{ $teacher->birthdate }}</p>
    <p><b>Género:</b> {{ $teacher->gender == "M" ? "Hombre" : ($teacher->gender == "F" ? "Mujer" : "No especificó") }}</p>
    <p><b>Grado académico:</b> {{ $teacher->academic_degree }}</p>
    <form action="/teachers/{{ $teacher->id }}/edit"><input type="submit" value="Editar"/></form>
    <form method="POST" action="/teachers/{{ $teacher->id }}">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar"/>
    </form>
    <hr />
    <h2>Cursos</h2>
    @foreach ($teacher->courses as $course)
    <h3>{{ $course->name }}</h3>
    <p><b>Créditos:</b> {{ $course->credits }}</p>
    <form action="/courses/{{ $course->id }}"><input type="submit" value="Ver"/></form>
    <form action="/courses/{{ $course->id }}/edit"><input type="submit" value="Editar"/></form>
    <form method="POST" action="/courses/{{ $course->id }}">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar"/>
    </form>
    <hr />
    @endforeach
</body>

</html>