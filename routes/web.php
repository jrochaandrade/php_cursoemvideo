<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/curso', function (){return view('\curso_em_video\d001\curso_em_video');});

Route::get('/cad', function(){return view('\curso_em_video\d001\cad');});

Route::get('/numero', function(){return view('\curso_em_video\d002\numero_escolhido');});

Route::get('/escolha', function(){return view('\curso_em_video\d002\escolha');});

Route::get('/aleatorio', function(){return view('\curso_em_video\d003\aleatorio');});

Route::get('/num_ale', function(){return view('\curso_em_video\d003\num_ale');});

Route::get('/converter', function(){return view('\curso_em_video\d004\index');});

Route::get('/conversor', function(){return view('\curso_em_video\d004\conversor');});

Route::get('/cotacao', function(){return view('\curso_em_video\d005\index');});

Route::get('/conversor2', function(){return view('\curso_em_video\d005\conversor2');});

Route::get('/formulario', function(){return view('\curso_em_video\d006\index');});

Route::get('/anatomia', function(){return view('\curso_em_video\d007\index');});

Route::get('/calculo_salario', function(){return view('\curso_em_video\d008\index');});

Route::get('/nascimento', function(){return view('\curso_em_video\d009\index');});
