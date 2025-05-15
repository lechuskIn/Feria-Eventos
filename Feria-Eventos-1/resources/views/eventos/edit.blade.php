<h1>Editar Evento</h1>
<form method="POST" action="{{ route('eventos.update', $evento->id) }}">
    @csrf @method('PUT')
    <input name="titulo" value="{{ $evento->titulo }}"><br>
    <textarea name="descripcion">{{ $evento->descripcion }}</textarea><br>
    <input type="date" name="fecha" value="{{ $evento->fecha }}"><br>
    <input name="ubicacion" value="{{ $evento->ubicacion }}"><br>
    <button type="submit">Actualizar</button>
</form>
