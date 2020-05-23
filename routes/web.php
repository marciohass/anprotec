<?php

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
Route::get('envio-email', function(){
    return new \App\Mail\SendMailUser();
});

// Rota da página Home
Route::get('/', 'SiteController@home')->name('site.home');
Route::get('/dados', 'SiteController@dados')->name('site.dados');
Route::post('/store', 'SiteController@storeDados')->name('site.store');
Route::get('/questionario', 'SiteController@questionario')->name('questionario');
Route::post('/questionariostore', 'SiteController@storeQuestionario')->name('site.questionariostore');
Route::get('/feedback', 'SiteController@feedback')->name('site.feedback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'web']], function () {

    Route::get('admin/lista-inscritos', 'InscritosController@index')->name('admin.lista-inscritos');
    Route::get('admin/lista-associados', 'InscritosController@associados')->name('admin.lista-associados');
    Route::get('admin/lista-nao-associados', 'InscritosController@naoAssociados')->name('admin.lista-nao-associados');

    // Rota de Usuários
    Route::get('admin/lista-usuarios', 'UsuariosController@index')->name('admin.lista-usuarios');
    Route::get('admin/form-usuarios', 'UsuariosController@create')->name('admin.form-usuarios');
    Route::post('usuarios/store', 'UsuariosController@store')->name('usuarios.store');
    Route::get('admin/form-edit-usuarios/{id}', 'UsuariosController@edit')->name('admin.form-edit-usuarios');
    Route::put('usuarios/update/{id}', 'UsuariosController@update')->name('usuarios.update');
    Route::delete('usuarios/destroy/{id}', 'UsuariosController@destroy')->name('usuarios.destroy');

    // Rota do Profile
    Route::get('admin/form-profile/{id}', 'ProfileController@edit')->name('admin.form-profile');
    Route::put('profile/update/{id}', 'ProfileController@update')->name('profile.update');
    Route::post('uploadlogo/{id}', 'ProfileController@upload_logo')->name('uploadlogo');

    // Rotas do catálogo de produtos
    Route::get('admin/lista-produtos', 'ProdutosController@index')->name('admin.lista-produtos');
    Route::get('admin/form-produtos', 'ProdutosController@create')->name('admin.form-produtos');
    Route::post('produtos/store', 'ProdutosController@store')->name('produtos.store');
    Route::get('admin/form-edit-produtos/{id}', 'ProdutosController@edit')->name('admin.form-edit-produtos');
    Route::put('produtos/update/{id}', 'ProdutosController@update')->name('produtos.update');
    Route::delete('produtos/destroy/{id}', 'ProdutosController@destroy')->name('produtos.destroy');

});
