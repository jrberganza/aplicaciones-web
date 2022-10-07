<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cursos</title>
</head>

<body>
    @include("nav")
    <h1>Crear curso</h1>
    <form method="POST" action="/courses">
        @csrf

        <label for="name">Nombre:</label>
        <input name="name" type="text" placeholder="Nombre" value="{{ old('name') }}" /><br />
        <label for="credits">Créditos:</label>
        <input name="credits" type="number" placeholder="Créditos" value="{{ old('credits') }}" /><br />
        <label for="teacher">Profesor:</label>
        <select name="teacher">
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" @selected(old('teacher') == $teacher->id)>
                    {{ $teacher->name }}
                </option>
            @endforeach
        </select><br />
        <input type="submit" value="Crear curso"><br />
    </form>
</body>

</html>