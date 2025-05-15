Route::get('/', function () {
    return redirect()->route('eventos.index');
});
