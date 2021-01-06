<?php
//    ROTAS RESOURCE

Route::resource('/', 'UsuariosController');
Route::resource('/home', 'EventosController');

//    ROTAS GET
Route::get('/home', 'EventosController@index')->name('home');
Route::get('/cadastro', 'UsuariosController@cadastro')->name('cadastro');
Route::get('/login', 'UsuariosController@login')->name('login');
Route::get('/esqueceuSenha', 'UsuariosController@esqueceuSenha')->name('esqueceuSenha');

Route::get('/home/pesquisar/{h?}', function ($i) {
    return view('home');
});


//Auth::routes();

//    ROTAS GROUP
              //   So Usuarios Autenticados
Route::group(['middleware' => ['auth']], function (){

    Route::get('/logout', 'UsuariosController@logOut')
    ->name('logOut');

    Route::get('/usuario', 'UsuariosController@usuarioPerfil')
    ->name('usuario');
    
    Route::get('/usuario/editar', 'UsuariosController@editarUsuario')
    ->name('editarUsuario');
    
    Route::post('/usuario/editar/update/{h?}', 'UsuariosController@updateUsuario')
    ->name('updateUsuario');

    Route::get('criar/evento', 'EventosController@criarEvento')
    ->name('criarEvento');

    Route::get('home/participar/{h?}', 'EventosController@participar')
    ->name('participar');

    Route::get('home/deletar/{h?}', 'EventosController@deletarParticipacao')
    ->name('deletarParticipacao');

    Route::get('home/{id?}/editar', 'EventosController@editar')
    ->name('home.editar');

});

//    ROTAS POST
Route::post('login/{login?}', 'UsuariosController@logar')->name('logar');
Route::post('criar/evento/{h?}', 'EventosController@buscarCep')->name('home.buscarCep');
Route::post('home/pesquisar/{h?}', 'EventosController@pesquisar')->name('pesquisar');


