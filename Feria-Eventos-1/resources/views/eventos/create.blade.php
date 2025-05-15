<h1>Crear Evento</h1>
<form method="POST" action="{{ route('eventos.store') }}">
    @csrf
    <input name="titulo" placeholder="Título"><br>
    <textarea name="descripcion" placeholder="Descripción"></textarea><br>
    <input type="date" name="fecha"><br>
    <input name="ubicacion" placeholder="Ubicación"><br>
    <button type="submit">Guardar</button>
</form>
