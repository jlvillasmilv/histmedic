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

Route::get('/', 'HomeController@index');
Auth::routes(['register' => false]);
Route::group(['middleware' => 'auth'], function() {

Route::resource('user', 'UserController');
Route::prefix('user')->group(function () {
       Route::get('table/filter', 'UserController@table');
       Route::post('table/multidelete', 'UserController@multidelete');
 });


Route::get('cambioclave', 'UserController@password')->name('usuario.cambioclave');


Route::resource('zung', 'ZungController');
Route::get('zung_table', 'ZungController@table')->name('zung_table');

Route::resource('sf36', 'SF36Controller');
Route::get('sf36_table', 'SF36Controller@table')->name('sf36_table');

Route::resource('ecorp', 'EcoRPController');
Route::get('ecorp_table', 'EcoRPController@table')->name('ecorp_table');

Route::resource('labrp', 'LaboratoryRPController');
Route::get('labrp_table', 'LaboratoryRPController@table')->name('labrp_table');

/*****************Paciente*********************/
Route::resource('pacient', 'PacientController');
Route::prefix('pacient')->group(function () {
        Route::get('table/filter', 'PacientController@table')->name('patient_table');
        Route::post('export_xls', 'PacientController@export_xls')->name('export_xls');
    });
/*****************Paciente Fallecido*********************/
Route::resource('deceased_patient', 'DeceasedPatientController');

Route::resource('holter', 'HolterController');
Route::get('holter_table', 'HolterController@table')->name('holter_table');

/*****************3Era edad*********************/
Route::resource('encuesta_tercera_edad', 'TerceraEdadController');
Route::get('encuesta_tercera_edad_table', 'TerceraEdadController@table')->name('encuesta_tercera_edad_table');

/*****************Neuropsiquiatria*********************/

Route::prefix('neuropsychiatric')->group(function () {
       
Route::resource('en1f',  'Neuropsychiatric\En1fController');
Route::get('en1f_table', 'Neuropsychiatric\En1fController@table')->name('en1f_table');

Route::resource('en2f',  'Neuropsychiatric\En2fController');
Route::get('en2f_table', 'Neuropsychiatric\En2fController@table')->name('en2f_table');

Route::resource('en3f',  'Neuropsychiatric\En3fController');
Route::get('en3f_table', 'Neuropsychiatric\En3fController@table')->name('en3f_table');

Route::resource('en4f',  'Neuropsychiatric\En4fController');
Route::get('en4f_table', 'Neuropsychiatric\En4fController@table')->name('en4f_table');

});

/**********Toma Presion Arterial**************/

Route::prefix('pa')->group(function () {
       
  Route::resource('format1',  'PA\Format1Controller');
  Route::get('format1_table', 'PA\Format1Controller@table')->name('format1_table');

  Route::resource('format2',  'PA\Format2Controller');
  Route::get('format2_table', 'PA\Format2Controller@table')->name('format2_table');

  Route::resource('format3',  'PA\Format3Controller');
  Route::get('format3_table', 'PA\Format3Controller@table')->name('format3_table');

});

/**********Entrevista Familiar**************/

Route::resource('entrevista_familiar', 'FamilyInterviewController');
Route::get('entrevista_familiar_table', 'FamilyInterviewController@table')->name('entrevista_familiar_table');

/**********Entrevista seguimiento**************/

Route::resource('entrevista_segumiento', 'FollowInterviewController');
Route::get('entrevista_segumiento_table', 'FollowInterviewController@table')->name('entrevista_segumiento_table');

/**********Prueba de Esfuerzo**************/

Route::resource('prueba_esfuerzo', 'EffortTestController');
 Route::get('pe_table', 'EffortTestController@table')->name('pe_table');

/**********Evaluación Neuropsicologica CORE**************/

Route::resource('evaluacion_core', 'CoreEvaluationController');
Route::get('evaluacion_core_table', 'CoreEvaluationController@table')->name('core_table');


/********** Evaluacion Cardiovascular **************/

Route::prefix('cardiovascular')->group(function () {
       
	Route::resource('version1', 'Cardiovascular\Version1Controller');
   Route::get('version1_table', 'Cardiovascular\Version1Controller@table')->name('version1_table');

	Route::resource('version2', 'Cardiovascular\Version2Controller');
   Route::get('version2_table', 'Cardiovascular\Version2Controller@table')->name('version2_table');

});

Route::get('/home', 'HomeController@index');


});





