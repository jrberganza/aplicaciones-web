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
    <h1>Editar {{ $teacher->name }}</h1>
    <form method="POST" action="/teachers/{{ $teacher->id }}">
        @csrf
        @method('PATCH')

        <label for="name">Nombre:</label>
        <input name="name" type="text" placeholder="Nombre" value="{{ $teacher->name }}" /><br />
        <label for="dpi">DPI:</label>
        <input name="dpi" type="text" placeholder="DPI" value="{{ $teacher->dpi }}" /><br />
        <label for="address">Dirección:</label>
        <input name="address" type="text" placeholder="Dirección" value="{{ $teacher->address }}" /><br />
        <label for="telephone">Número de teléfono:</label>
        <input name="telephone" type="text" placeholder="Número de teléfono" value="{{ $teacher->telephone }}" /><br />
        <label for="department">Departamento:</label>
        <input name="department" type="text" placeholder="Departamento" value="{{ $teacher->department }}" /><br />
        <label for="municipality">Municipio:</label>
        <input name="municipality" type="text" placeholder="Municipio" value="{{ $teacher->municipality }}" /><br />
        <label for="zone">Zona:</label>
        <input name="zone" type="text" placeholder="Zona" value="{{ $teacher->zone }}" /><br />
        <label for="birthdate">Fecha de cumpleaños:</label>
        <input name="birthdate" type="date" value="{{ $teacher->birthdate }}" /><br />
        <label for="gender">Género:</label>
        <select name="gender" type="text">
            <option value="W" @selected($teacher->gender == 'W')>Prefiero no especificar</option>
            <option value="M" @selected($teacher->gender == 'M')>Hombre</option>
            <option value="F" @selected($teacher->gender == 'F')>Mujer</option>
        </select><br />
        <label for="academic_degree">Grado académico:</label>
        <input name="academic_degree" type="text" placeholder="Grado académico" value="{{ $teacher->academic_degree }}" /><br />
        <input type="submit" value="Guardar profesor"><br />
    </form>
</body>

</html>
