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
    <h1>Editar {{ $course->name }}</h1>
    <form method="POST" action="/courses/{{ $course->id }}">
        @csrf
        @method('PATCH')

        <label for="name">Nombre:</label>
        <input name="name" type="text" placeholder="Nombre" value="{{ $course->name }}" /><br />
        <label for="credits">Créditos:</label>
        <input name="credits" type="number" placeholder="Créditos" value="{{ $course->credits }}" /><br />
        <label for="teacher">Profesor:</label>
        <select name="teacher">
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" @selected($course->teacher_id == $teacher->id)>
                    {{ $teacher->name }}
                </option>
            @endforeach
        </select><br />
        <input type="submit" value="Guardar curso"><br />
    </form>
</body>

</html>
