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
    <h1>Editar {{ $student->name }}</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <i>{{ $error }}</i>
        @endforeach
    @endif
    <form method="POST" action="/students/{{ $student->id }}">
        @csrf
        @method('PATCH')

        <label for="name">Nombre:</label>
        <input name="name" type="text" placeholder="Nombre" value="{{ $student->name }}" /><br />
        <label for="dpi">DPI:</label>
        <input name="dpi" type="text" placeholder="DPI" value="{{ $student->dpi }}" /><br />
        <label for="address">Dirección:</label>
        <input name="address" type="text" placeholder="Dirección" value="{{ $student->address }}" /><br />
        <label for="telephone">Número de teléfono:</label>
        <input name="telephone" type="text" placeholder="Número de teléfono"
            value="{{ $student->telephone }}" /><br />
        <label for="department">Departamento:</label>
        <input name="department" type="text" placeholder="Departamento" value="{{ $student->department }}" /><br />
        <label for="municipality">Municipio:</label>
        <input name="municipality" type="text" placeholder="Municipio" value="{{ $student->municipality }}" /><br />
        <label for="zone">Zona:</label>
        <input name="zone" type="text" placeholder="Zona" value="{{ $student->zone }}" /><br />
        <label for="birthdate">Fecha de cumpleaños:</label>
        <input name="birthdate" type="date" value="{{ $student->birthdate }}" /><br />
        <label for="gender">Género:</label>
        <select name="gender" type="text">
            <option value="W" @selected($student->gender == 'W')>Prefiero no especificar</option>
            <option value="M" @selected($student->gender == 'M')>Hombre</option>
            <option value="F" @selected($student->gender == 'F')>Mujer</option>
        </select><br />
        <label for="career">Carrera:</label>
        <input name="career" type="text" placeholder="Carrera" value="{{ $student->career }}" /><br />
        <label for="faculty">Facultad:</label>
        <input name="faculty" type="text" placeholder="Facultad" value="{{ $student->faculty }}" /><br />
        <input type="submit" value="Guardar estudiante"><br />
    </form>
</body>

</html>
