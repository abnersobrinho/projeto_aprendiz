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

Route::get('/', 'Site\SiteController@index')->name('index');
Route::get('/busca', 'Site\SiteController@busca')->name('busca');

Route::get('site/curso/show/{id}', 'Site\CursoController@show')->name('site.curso.show');

Route::get('/usuario/create', 'Site\UsuarioController@create')->name('site.usuario.create');
Route::post('/usuario/store', 'Site\UsuarioController@store')->name('site.usuario.store');

Route::get('/login', 'Autenticacao\AutenticacaoController@login')->name('login');
Route::post('/logar', 'Autenticacao\AutenticacaoController@logar')->name('logar');
Route::get('/logout', 'Autenticacao\AutenticacaoController@logout')->name('logout');

Route::middleware(['auth'])->group(function()
{
	Route::get('/home', 'Home\HomeController@index')->name('home');
	Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('dashboard');
	Route::get('/graficos', 'Admin\DashboardController@graficos')->name('graficos');
	Route::get('/tabelas', 'Admin\DashboardController@tabelas')->name('tabelas');
	
	Route::get('/usuario/edit/{id}', 'Site\UsuarioController@edit')->name('site.usuario.edit');
	Route::get('/usuarios/edit/{id}', 'Admin\UsuarioController@edit')->name('usuario.edit');
	Route::post('/usuario/update/{id}', 'Site\UsuarioController@update')->name('site.usuario.update');
	Route::post('/usuarios/update/{id}', 'Admin\UsuarioController@update')->name('usuario.update');
	Route::get('/usuarios', 'Admin\UsuarioController@index')->name('usuario.index');
	Route::get('/perfil', 'Home\HomeController@perfil')->name('perfil');
	Route::get('/usuarios/show/{id}', 'Admin\UsuarioController@show')->name('usuario.show');
	Route::get('/usuarios/destroy/{id}', 'Admin\UsuarioController@destroy')->name('usuario.destroy');

	Route::get('/cidade', 'Admin\CidadeController@index')->name('cidade.index');
	Route::get('/cidade/edit/{id}', 'Admin\CidadeController@edit')->name('cidade.edit');
	Route::get('/cidade/create', 'Admin\CidadeController@create')->name('cidade.create');
	Route::post('/cidade/store', 'Admin\CidadeController@store')->name('cidade.store');
	Route::get('/cidade/update/{id}', 'Admin\CidadeController@update')->name('cidade.update');
	Route::get('/cidade/show/{id}', 'Admin\CidadeController@show')->name('cidade.show');
	Route::get('/cidade/destroy/{id}', 'Admin\CidadeController@destroy')->name('cidade.destroy');
	Route::post('/cidade/buscar', 'Admin\CidadeController@buscar')->name('cidade.buscar');

	Route::get('/role', 'Admin\RoleController@index')->name('role.index');
	Route::get('/role/edit/{id}', 'Admin\RoleController@edit')->name('role.edit');
	Route::get('/role/create', 'Admin\RoleController@create')->name('role.create');
	Route::post('/role/store', 'Admin\RoleController@store')->name('role.store');
	Route::get('/role/update/{id}', 'Admin\RoleController@update')->name('role.update');
	Route::get('/role/show/{id}', 'Admin\RoleController@show')->name('role.show');
	Route::get('/role/destroy/{id}', 'Admin\RoleController@destroy')->name('role.destroy');
	Route::post('/role/buscar', 'Admin\RoleController@buscar')->name('role.buscar');

	Route::get('/eventos', 'Admin\EventoController@index')->name('evento.index');
	Route::get('/eventos/edit/{id}', 'Admin\EventoController@edit')->name('evento.edit');
	Route::get('/eventos/create', 'Admin\EventoController@create')->name('evento.create');
	Route::post('/eventos/store', 'Admin\EventoController@store')->name('evento.store');
	Route::post('/eventos/update/{id}', 'Admin\EventoController@update')->name('evento.update');
	Route::get('/eventos/show/{id}', 'Admin\EventoController@show')->name('evento.show');
	Route::get('/eventos/destroy/{id}', 'Admin\EventoController@destroy')->name('evento.destroy');
	Route::post('/eventos/buscar', 'Admin\EventoController@buscar')->name('evento.buscar');

	Route::get('/igrejas', 'Admin\IgrejaController@index')->name('igreja.index');
	Route::get('/igrejas/edit/{id}', 'Admin\IgrejaController@edit')->name('igreja.edit');
	Route::get('/igrejas/create', 'Admin\IgrejaController@create')->name('igreja.create');
	Route::post('/igrejas/store', 'Admin\IgrejaController@store')->name('igreja.store');
	Route::get('/igrejas/update/{id}', 'Admin\IgrejaController@update')->name('igreja.update');
	Route::get('/igrejas/show/{id}', 'Admin\IgrejaController@show')->name('igreja.show');
	Route::get('/igrejas/destroy/{id}', 'Admin\IgrejaController@destroy')->name('igreja.destroy');
	Route::post('/igrejas/buscar', 'Admin\IgrejaController@buscar')->name('igreja.buscar');

	Route::resource('area', 'Admin\AreaController');
	Route::post('/areas/buscar', 'Admin\AreaController@buscar')->name('area.buscar');

	Route::get('/cursos', 'Admin\CursoController@index')->name('curso.index');
	Route::get('/cursos/edit/{id}', 'Admin\CursoController@edit')->name('curso.edit');
	Route::get('/cursos/create', 'Admin\CursoController@create')->name('curso.create');
	Route::post('/cursos/store', 'Admin\CursoController@store')->name('curso.store');
	Route::get('/cursos/update/{id}', 'Admin\CursoController@update')->name('curso.update');
	Route::get('/cursos/show/{id}', 'Admin\CursoController@show')->name('curso.show');
	Route::get('/cursos/destroy/{id}', 'Admin\CursoController@destroy')->name('curso.destroy');
	Route::post('/cursos/buscar', 'Admin\CursoController@buscar')->name('curso.buscar');

	Route::get('/turmas', 'Admin\TurmaController@index')->name('turma.index');
	Route::get('/turmas/edit/{id}', 'Admin\TurmaController@edit')->name('turma.edit');
	Route::get('/turmas/create', 'Admin\TurmaController@create')->name('turma.create');
	Route::post('/turmas/store', 'Admin\TurmaController@store')->name('turma.store');
	Route::get('/turmas/update/{id}', 'Admin\TurmaController@update')->name('turma.update');
	Route::get('/turmas/show/{id}', 'Site\TurmaController@show')->name('turma.show');
	Route::get('/turmas/destroy/{id}', 'Admin\TurmaController@destroy')->name('turma.destroy');
	Route::post('/turmas/buscar', 'Admin\TurmaController@buscar')->name('turma.buscar');

	Route::post('/comentario/store', 'Site\ComentarioController@store')->name('comentario.store');

	Route::post('/resposta/create', 'Site\RespostaController@create')->name('resposta.create');
	Route::post('/resposta/store', 'Site\RespostaController@store')->name('resposta.store');

	Route::get('/file', 'Admin\FileController@index')->name('file.index');
	Route::get('/file/create', 'Admin\FileController@create')->name('file.create');
	Route::post('/upload', 'Admin\FileController@upload')->name('file.upload');
	Route::get('/file/download/{id}', 'Admin\FileController@download')->name('file.download');
	Route::get('/file/destroy/{id}', 'Admin\FileController@destroy')->name('file.destroy');

});

