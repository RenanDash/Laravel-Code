<?php

use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

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

Route::get('/sobrenos', 'SobreNosController@SobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@FunctionName')->name('site.contato');
Route::post('/contato', 'ContatoController@FunctionName')->name('site.contato');
Route::get('/', 'PrincipalController@Principal')->name('site.index');
Route::get('/login', function () {
    return 'login';
})->name('site/login');

// Route::get('/contato/{nome}/{id}/{cpf}', function (string $nome , string $id, string $cpf) {
//     echo 'welcome '.$id.'-'.$nome.'- seu cpf eh:'.$cpf;
// });

Route::prefix('app')->group(function () {
    Route::get('/cientes', function () {
        return 'clientes';
    })->name('app/clientes');
    Route::get('/fornecedores', function () {
        return 'fornecedores';
    })->name('app/fornecedores');
    Route::get('/produtos', function () {
        return 'produtos';
    })->name('site/produtos');
});


Route::get('/soma/{a1}/{b1}', 'SomaController@soma')->name('soma');

Route::get('/welcome', function () {
    return view('welcome');
});

route::fallback(function () {
    echo "Pagina não encontrada! <a href=" . route('site.index') . ">Clique aqui</a> para retornar a pagina inicial.";
});
