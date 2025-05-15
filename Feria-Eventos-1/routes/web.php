use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

// Página de inicio (puedes mantenerla si quieres)
Route::get('/', function () {
    return redirect()->route('eventos.index');
});

// Rutas para el CRUD de eventos
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{id}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{id}', [EventoController::class, 'update'])->name('eventos.update');
Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');
