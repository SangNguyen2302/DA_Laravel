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

Route::get('logout', 'QuantrivienController@logout')->name('logout');
Route::get('/login', 'QuantrivienController@index')->name('login');
Route::post('/login', 'QuantrivienController@store')->name('xu-ly-login');
Route::get('/', function(){
	return view('Home/login');
})->name('home');
Route::middleware('auth')->group(function(){
	Route::prefix('cauhoi')->group(function(){
	Route::name('cauhoi.')->group(function(){
		Route::get('/', 'CauhoiController@index')->name('danh-sach');
		Route::get('/them-moi', 'CauhoiController@create')->name('them-moi');
		Route::post('/them-moi', 'CauhoiController@store')->name('xu-ly-them-moi');
		Route::get('/cap-nhat/{id}', 'CauhoiController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'CauhoiController@update')->name('xu-ly-cap-nhat');
		Route::get('/xoa/{id}', 'CauhoiController@softDeletes')->name('xoa');
		Route::get('/page-khoi-phuc', 'CauhoiController@RestoreIndex')->name('page-khoi-phuc');
		Route::get('/khoi-phuc/{id}', 'CauhoiController@restore')->name('khoi-phuc');
		Route::get('/huy-bo/{id}', 'CauhoiController@destroy')->name('huy-bo');
	});
});
	Route::prefix('goicredit')->group(function(){
	Route::name('goicredit.')->group(function(){
		Route::get('/', 'GoicreditController@index')->name('danh-sach');
		Route::get('/them-moi', 'GoicreditController@create')->name('them-moi');
		Route::post('/them-moi', 'GoicreditController@store')->name('xu-ly-them-moi');
		Route::get('/cap-nhat/{id}', 'GoicreditController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'GoicreditController@update')->name('xu-ly-cap-nhat');
		Route::get('/xoa/{id}', 'GoicreditController@softDeletes')->name('xoa');
		Route::get('/page-khoi-phuc', 'GoicreditController@RestoreIndex')->name('page-khoi-phuc');
		Route::get('/khoi-phuc/{id}', 'GoicreditController@restore')->name('khoi-phuc');
		Route::get('/huy-bo/{id}', 'GoicreditController@destroy')->name('huy-bo');
	});
});
Route::prefix('linhvuc')->group(function(){
	Route::name('linhvuc.')->group(function(){
		Route::get('/', 'LinhvucController@index')->name('danh-sach');
		Route::get('/them-moi', 'LinhvucController@create')->name('them-moi');
		Route::post('/them-moi', 'LinhvucController@store')->name('xu-ly-them-moi');
		Route::get('/cap-nhat/{id}', 'LinhvucController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'LinhvucController@update')->name('xu-ly-cap-nhat');
		Route::get('/xoa/{id}', 'LinhvucController@softDeletes')->name('xoa');
		Route::get('/page-khoi-phuc', 'LinhvucController@RestoreIndex')->name('page-khoi-phuc');
		Route::get('/khoi-phuc/{id}', 'LinhvucController@restore')->name('khoi-phuc');
		Route::get('/huy-bo/{id}', 'LinhvucController@destroy')->name('huy-bo');
	});
});
Route::prefix('nguoichoi')->group(function(){
	Route::name('nguoichoi.')->group(function(){
		Route::get('/', 'NguoichoiController@index')->name('danh-sach');
		Route::get('/them-moi', 'NguoichoiController@create')->name('them-moi');
		Route::post('/them-moi', 'NguoichoiController@store')->name('xu-ly-them-moi');
		Route::get('/cap-nhat/{id}', 'NguoichoiController@edit')->name('cap-nhat');
		Route::post('/cap-nhat/{id}', 'NguoichoiController@update')->name('xu-ly-cap-nhat');
		Route::get('/xoa/{id}', 'NguoichoiController@destroy')->name('xoa');
		// Route::get('page-khoi-phuc', 'NguoichoiController@destroy')->name('');
	});
});
});