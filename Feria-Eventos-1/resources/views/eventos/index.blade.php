<!-- resources/views/eventos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Gestor de Eventos</title>
</head>
<body>
    <h1>Lista de Eventos</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('eventos.create') }}">Crear nuevo evento</a>

    <ul>
        @foreach($eventos as $evento)
            <li>
                <strong>{{ $evento->titulo }}</strong> - {{ $evento->fecha }} - {{ $evento->ubicacion }}
                <a href="{{ route('eventos.edit', $evento->id) }}">Editar</a>
                <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
