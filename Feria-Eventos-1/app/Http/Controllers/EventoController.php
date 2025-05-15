<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    // Mostrar todos los eventos
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    // Mostrar formulario para crear evento
    public function create()
    {
        return view('eventos.create');
    }

    // Guardar nuevo evento en la base de datos
    public function store(Request $request)
    {
        // Validar datos (puedes mejorar las reglas)
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'ubicacion' => 'required|string|max:255',
        ]);

        Evento::create($request->all());

        return redirect()->route('eventos.index')->with('success', 'Evento creado correctamente.');
    }

    // Mostrar formulario para editar evento
    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.edit', compact('evento'));
    }

    // Actualizar evento en la base de datos
    public function update(Request $request, $id)
    {
        // Validar datos
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'ubicacion' => 'required|string|max:255',
        ]);

        $evento = Evento::findOrFail($id);
        $evento->update($request->all());

        return redirect()->route('eventos.index')->with('success', 'Evento actualizado correctamente.');
    }

    // Eliminar evento
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'Evento eliminado correctamente.');
    }
}
