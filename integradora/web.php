<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Torta;

Route::redirect('/', '/login');


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/caracteristicas', function () {
    return view('caracteristicas');
});

Route::get('/modulos', function () {
    return view('modulos');
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->route('inicio');
    }

    return back()
        ->withErrors([
            'email' => 'El correo o la contraseña son incorrectos.',
        ])
        ->onlyInput('email');
})->name('login.authenticate');

Route::middleware('auth')->group(function () {
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio');

    Route::post('/logout', function (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    })->name('logout');
});


Route::get('/tortas', function () {
    $tortas = Torta::all();

    return view('tortas', compact('tortas'));
});

Route::get('/tortas/nuevo', function () {
    return view('nuevo');
});

Route::post('/tortas/nuevo', function (Request $request) {

    $datos = $request->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
    ], [
        'sabor.required' => 'Debes escribir el sabor.',
        'sabor.regex' => 'El sabor solo debe contener letras y espacios.',
        'precio.required' => 'Debes indicar el precio.',
        'precio.integer' => 'El precio debe ser un número entero.',
        'precio.min' => 'El precio no puede ser negativo.',
    ]);

    Torta::create($datos);

    return redirect('/tortas');
});
