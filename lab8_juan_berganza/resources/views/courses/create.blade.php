<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cursos</title>
</head>

<body>
    @include('nav')
    <h1>Crear curso</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <i>{{ $error }}</i>
        @endforeach
    @endif
    <form method="POST" action="/courses">
        @csrf

        <label for="name">Nombre:</label>
        <input name="name" type="text" placeholder="Nombre" value="{{ old('name') }}" /><br />
        <label for="credits">Créditos:</label>
        <input name="credits" type="number" placeholder="Créditos" value="{{ old('credits') }}" /><br />
        <input type="submit" value="Crear curso"><br />
    </form>
</body>

</html>
