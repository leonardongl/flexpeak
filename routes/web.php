<?php

############
## PADRÃO ##
############

// Welcome
Route::get('/', function () {
    return view('welcome');
});
// Auth
Auth::routes();
// Dashboard
Route::get('/home', 'HomeController@index')->name('home');




#############
## CONTATO ##
#############

// Lista Contatos
Route::get('/contatos', 'ContactController@index')->name('contacts');
// Novo Contato
Route::get('/contatos/novo', "ContactController@create")->name('contacts.create');
Route::post('/contatos/store', "ContactController@store")->name('contacts.store');
// Ver Contato
Route::get('/contatos/abrir/{contact}', 'ContactController@show')->name('contacts.show');
// Editar Contato
Route::get('/contatos/editar/{contact}', 'ContactController@edit')->name('contacts.edit');
Route::put('/contatos/update/{contact}', 'ContactController@update')->name('contacts.update');
// Remover Contato
Route::get('/contatos/remover/{contact}', 'ContactController@remove')->name('contacts.remove');
Route::get('/contatos/destroy/{contact}', 'ContactController@destroy')->name('contacts.destroy');




#############
## EMPRESA ##
#############

// Lista Empresas
Route::get('/empresas', 'CompanyController@index')->name('companies');
// Novo Empresa
Route::get('/empresas/novo', "CompanyController@create")->name('companies.create');
Route::post('/empresas/store', "CompanyController@store")->name('companies.store');
// Ver Empresa
Route::get('/empresas/abrir/{company}', 'CompanyController@show')->name('companies.show');
// Editar Empresa
Route::get('/empresas/editar/{company}', 'CompanyController@edit')->name('companies.edit');
Route::put('/empresas/update/{company}', 'CompanyController@update')->name('companies.update');
// Remover Empresa
Route::get('/empresas/remover/{company}', 'CompanyController@remove')->name('companies.remove');
Route::get('/empresas/destroy/{company}', 'CompanyController@destroy')->name('companies.destroy');




############
## CARGOS ##
############

// Lista Cargos
Route::get('/cargos', 'RoleController@index')->name('roles');
// Novo Cargo
Route::get('/cargos/novo', "RoleController@create")->name('roles.create');
Route::post('/cargos/store', "RoleController@store")->name('roles.store');
// Ver Cargo
Route::get('/cargos/abrir/{role}', 'RoleController@show')->name('roles.show');
// Editar Cargo
Route::get('/cargos/editar/{role}', 'RoleController@edit')->name('roles.edit');
Route::put('/cargos/update/{role}', 'RoleController@update')->name('roles.update');
// Remover Cargo
Route::get('/cargos/remover/{role}', 'RoleController@remove')->name('roles.remove');
Route::get('/cargos/destroy/{role}', 'RoleController@destroy')->name('roles.destroy');
