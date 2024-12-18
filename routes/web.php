<?php
use App\Http\Controllers\ControlePrototipo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [ControlePrototipo::class, 'login'])->name('tela.login');
Route::get('/telacoordenador', [ControlePrototipo::class, 'telaCoordenador'])->name('tela.coordenador');
Route::get('/detalhes', [ControlePrototipo::class, 'detalhesReuniao'])->name('tela.detalhes');
Route::get('/inicioProfessor', [ControlePrototipo::class, 'inicioProfessor'])->name('tela.professor');
Route::get('/cadastrarReuniao', [ControlePrototipo::class, 'cadastrarReuniao'])->name('tela.cadastrar');
