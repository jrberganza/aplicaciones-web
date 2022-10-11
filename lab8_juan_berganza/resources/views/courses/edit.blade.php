<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cursos</title>
</head>

<body>
    @include('nav')
    <p><a href="/courses">Regresar a lista de cursos</a></p>
    <h1>Editar {{ $course->name }}</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <i>{{ $error }}</i>
        @endforeach
    @endif
    <form method="POST" action="/courses/{{ $course->id }}">
        @csrf
        @method('PATCH')

        <label for="name">Nombre:</label>
        <input name="name" type="text" placeholder="Nombre" value="{{ $course->name }}" /><br />
        <label for="credits">Créditos:</label>
        <input name="credits" type="number" placeholder="Créditos" value="{{ $course->credits }}" /><br />
        <input type="submit" value="Guardar curso"><br />
    </form>
    <hr />
    <h2>Profesores</h2>
    <form method="POST" action="/courses/{{ $course->id }}/teacher/assign">
        @csrf
        @method('PATCH')

        <label for="teacher">Profesor:</label>
        <select name="teacher">
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">
                    {{ $teacher->name }}
                </option>
            @endforeach
        </select><br />
        <input type="submit" value="Asignar profesor"><br />
    </form>
    @foreach ($course->teachers as $teacher)
        <h3>{{ $teacher->name }}</h3>
        <p><b>DPI:</b> {{ $teacher->dpi }}</p>
        <p><b>Número de teléfono:</b> {{ $teacher->telephone }}</p>
        <p><b>Género:</b>
            {{ $teacher->gender == 'M' ? 'Hombre' : ($teacher->gender == 'F' ? 'Mujer' : 'No especificó') }}</p>
        <p><b>Grado académico:</b> {{ $teacher->academic_degree }}</p>
        <form method="POST" action="/courses/{{ $course->id }}/teacher/remove/{{ $teacher->id }}">
            @csrf
            @method('PATCH')
            <input type="submit" value="Desasignar" />
        </form>
        <hr />
    @endforeach
</body>

</html>
