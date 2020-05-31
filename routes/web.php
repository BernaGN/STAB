<?php
use App\Exports\MaterialesExport;
use App\Exports\SustanciasExport;
use Maatwebsite\Excel\Facades\Excel;
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
Route::group(['middleware' => ['web']], function () {
    Auth::routes();

    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);

    Route::get('/','Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::resource('/home', 'HomeController');
    Route::resource('/materiales', 'MaterialesController');
    Route::resource('/sustancias', 'SustanciasController');
    Route::resource('/practica', 'PracticaController');
    Route::resource('/usuarios', 'UsuarioController');
    Route::get('/listarPdfSustancia', 'SustanciasController@listarPdf');
    Route::get('/listarPdfmaterial', 'MaterialesController@listarPdf');
    Route::get('/ExportarMateriales', function () {
        return Excel::download(new MaterialesExport, 'Materiales.xlsx');
    });
    Route::get('/ExportarSustancias', function () {
        return Excel::download(new SustanciasExport, 'Sustancias.xlsx');
    });
    Route::post('/import-excel-materiales', 'MaterialesController@import');
    Route::post('/import-excel-sustancias', 'SustanciasController@import');
});
