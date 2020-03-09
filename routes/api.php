<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});


/**SF36**/
Route::post('sf36_xls', 'SF36Controller@export_xls')->name('sf36_xls');

/**ECOCARDIOGRAMA RP**/
Route::post('ecorp_xls', 'EcoRPController@export_xls')->name('ecorp_xls');

Route::post('tercera_edad_xls', 'TerceraEdadController@export_xls')->name('encuesta_tercera_edad_xls');

Route::post('zung_xls', 'ZungController@export_xls')->name('zung_xls');

Route::post('entrevista_familiar_xls', 'FamilyInterviewController@export_xls')->name('entrevista_familiar_xls');

Route::post('entrevista_segumiento_xls', 'FollowInterviewController@export_xls')->name('entrevista_segumiento_xls');

Route::post('version1_xls', 'Cardiovascular\Version1Controller@export_xls')->name('version1_xls');

Route::post('version2_xls', 'Cardiovascular\Version2Controller@export_xls')->name('version2_xls');

Route::post('core_xls', 'CoreEvaluationController@export_xls')->name('core_xls');

Route::post('holter_xls', 'HolterController@export_xls')->name('holter_xls');

Route::post('labrp_xls', 'LaboratoryRPController@export_xls')->name('labrp_xls');

/*****************Neuropsiquiatria*********************/

Route::post('en1f_xls', 'Neuropsychiatric\En1fController@export_xls')->name('en1f_xls');

Route::post('en2f_xls', 'Neuropsychiatric\En2fController@export_xls')->name('en2f_xls');

Route::post('en3f_xls', 'Neuropsychiatric\En3fController@export_xls')->name('en3f_xls');

Route::post('en4f_xls', 'Neuropsychiatric\En4fController@export_xls')->name('en4f_xls');

/**********Toma Presion Arterial**************/

  Route::post('format1_xls', 'PA\Format1Controller@export_xls')->name('format1_xls');
  
  Route::post('format2_xls', 'PA\Format2Controller@export_xls')->name('format2_xls');

  Route::post('format3_xls', 'PA\Format3Controller@export_xls')->name('format3_xls');

  Route::post('pe_xls', 'EffortTestController@export_xls')->name('pe_xls');


//**** Busqueda de descripcion zung******//
Route::get('/format_descrip/{format_id}',function($format_id){
    $format = DB::table('format')
        ->select('description','version','date_format')
        ->where('format_id',$format_id)
        ->first();
        return Response::json($format);
});


//**** Busqueda de detalle zung******//
Route::get('/format_det/{format_id}',function($format_id){
    $format_det = DB::table('format_det')
        ->where('format_id',$format_id)
        ->get();
        return Response::json($format_det);
});

/***Listado de pacientes***/
Route::get('/list/patients',function(){
    $patient = DB::table('patient')
        ->select('patient_id','hist_id','cedula','first_name','last_name')
        ->whereNull('deleted_at')
        ->get();
        return Response::json($patient);
});

/***Busqueda de paciente***/
Route::get('/list/patient/{patient_id}/{datsf36}',function($patient_id,$datsf36){
    $patient = DB::table('patient')
        ->select('*',DB::raw('TIMESTAMPDIFF(YEAR,date_birth,"'.$datsf36.'") AS edad'),
                    DB::raw('DATE_FORMAT(date_birth ,"%m/%d/%Y") AS dob'))
        ->where('patient_id',$patient_id)
        ->whereNull('deleted_at')
        ->first();
        return Response::json($patient);
})->name('api.list_patient');

/***********Paciente Fallecido*************/
