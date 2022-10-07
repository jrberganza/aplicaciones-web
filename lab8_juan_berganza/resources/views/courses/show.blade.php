<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cursos</title>
</head>

<body>
    @include("nav")
    <p><a href="/courses">Regresar a lista de cursos</a></p>
    <h1>{{ $course->name }}</h1>
    <p><b>Créditos:</b> {{ $course->credits }}</p>
    <p><b>Profesor:</b> <a href="/teachers/{{ $course->teacher->id }}">{{ $course->teacher->name }}</a></p>
    <form action="/courses/{{ $course->id }}/edit"><input type="submit" value="Editar"/></form>
    <form method="POST" action="/courses/{{ $course->id }}">
        @csrf
        @method("DELETE")
        <input type="submit" value="Borrar"/>
    </form>
</body>

</html>