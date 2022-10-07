<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profesores</title>
</head>

<body>
    @include("nav")
    <h1>Crear profesor</h1>
    <form method="POST" action="/teachers">
        @csrf

        <label for="name">Nombre:</label>
        <input name="name" type="text" placeholder="Nombre" value="{{ old('name') }}" /><br />
        <label for="dpi">DPI:</label>
        <input name="dpi" type="text" placeholder="DPI" value="{{ old('dpi') }}" /><br />
        <label for="address">Dirección:</label>
        <input name="address" type="text" placeholder="Dirección" value="{{ old('address') }}" /><br />
        <label for="telephone">Número de teléfono:</label>
        <input name="telephone" type="text" placeholder="Número de teléfono" value="{{ old('telephone') }}" /><br />
        <label for="department">Departamento:</label>
        <input name="department" type="text" placeholder="Departamento" value="{{ old('department') }}" /><br />
        <label for="municipality">Municipio:</label>
        <input name="municipality" type="text" placeholder="Municipio" value="{{ old('municipality') }}" /><br />
        <label for="zone">Zona:</label>
        <input name="zone" type="text" placeholder="Zona" value="{{ old('zone') }}" /><br />
        <label for="birthdate">Fecha de cumpleaños:</label>
        <input name="birthdate" type="date" value="{{ old('birthdate') }}" /><br />
        <label for="gender">Género:</label>
        <select name="gender" type="text">
            <option value="W" @selected(old('gender') == 'W')>Prefiero no especificar</option>
            <option value="M" @selected(old('gender') == 'M')>Hombre</option>
            <option value="F" @selected(old('gender') == 'F')>Mujer</option>
        </select><br />
        <label for="academic_degree">Grado académico:</label>
        <input name="academic_degree" type="text" placeholder="Grado académico" value="{{ old('academic_degree') }}" /><br />
        <input type="submit" value="Crear profesor"><br />
    </form>
</body>

</html>