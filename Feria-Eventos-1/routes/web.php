use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return redirect()->route('eventos.index');
});

Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
