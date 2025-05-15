<h1>Lista de Eventos</h1>
<a href="{{ route('eventos.create') }}">Crear nuevo evento</a>
<ul>
@foreach ($eventos as $evento)
    <li>
        <strong>{{ $evento->titulo }}</strong> - {{ $evento->fecha }}
        <a href="{{ route('eventos.edit', $evento->id) }}">Editar</a>
        <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>
