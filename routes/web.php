<?php

use App\Http\Controllers\ProfileController;
use App\Models\User; // <-- 1. Agregamos el modelo User aquí
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- 2. RUTA DE EVIDENCIA PARA POSTMAN (ORM) ---
Route::get('/api/usuarios', function () {
    // Usamos el ORM Eloquent para traer los datos limpios
    $usuarios = User::select('id', 'name', 'email', 'role')->get();
    
    return response()->json([
        'mensaje' => 'Lista de usuarios obtenida con éxito para AlfaWeb',
        'usuarios' => $usuarios
    ]);
});
// -----------------------------------------------

require __DIR__.'/auth.php';