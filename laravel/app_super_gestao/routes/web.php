<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNos::class,'sobrenos'])->name('site.sobrenos');;

Route::get('/contato', [\App\Http\Controllers\Contato::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\Contato::class,'contato'])->name('site.contato');

Route::get('/login', [\App\Http\Controllers\Login::class,'login'])->name('site.login');;


Route::prefix('/app')->group(function(){
    Route::get('/clientes', [\App\Http\Controllers\Clientes::class,'clientes'])->name('app.clientes');
    Route::get('/produtos', [\App\Http\Controllers\Produtos::class,'produtos'])->name('app.produtos');
    Route::get('/fornecedores', [\App\Http\Controllers\Fornecedores::class,'fornecedores'])->name('app.fornecedores');
});

Route::fallback(function(){
    echo 'Arota acessada nao exite.<a href="'.route('site.index').'">clique aqui</a> para ir para tela inicial';
});



// Rotas Teste

//Redirecionamento de rota
Route::get('/rota1', function(){
    echo 'Rota 1';})->name('site.rota1');
    
Route::get('/rota2', function(){
    return redirect()->route('site.rota1');})->name('site.rota2');

//Route::redirect('/rota2','/rota1');

//Passando parametros pela rota
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}',function($nome,$categoria,$assunto,$mensagem = "mensagem nao informada"){
    echo "Nome: $nome Categoria: $categoria Assunto: $assunto Mensagem: $mensagem";
});

Route::get('/contato/{nome}/{categoria_id}',function($nome,int $categoria_id=1){
    echo "Nome: $nome Categoria: $categoria_id";
})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');

Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\testeController::class,'teste'])->name('teste');