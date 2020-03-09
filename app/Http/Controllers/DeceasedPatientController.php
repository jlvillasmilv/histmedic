<?php

namespace App\Http\Controllers;


use App\DeceasedPatient;
use App\Patient;
use App\Http\Requests\DeceasedPatientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Response;
use Redirect;

class DeceasedPatientController extends Controller
{
   
   public function index(Request $request)
   {
        $txt_search=trim($request->get('search'));
        $create   = route('deceased_patient.create');
        $search   = route('deceased_patient.index');
       
        $data =DeceasedPatient::Search($txt_search)
              ->select( DB::raw("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) as name"),'p.hist_id','deceased_patients.*')
              ->orderBy('id','DESC')
              ->paginate(15);

         if($request->get('imp')=='E'){
            return $this->export_excel($txt_search);
         }

        return View('deceased_patient.index',compact('data','search','create','txt_search'));
    }

    public function create()
    {
        return View('deceased_patient.form');
    }

    
    public function store(DeceasedPatientRequest $request)
    {
        $DeceasedPatient = new DeceasedPatient;
        $DeceasedPatient->fill($request->all());
        $DeceasedPatient->lug_morte=$request->get('lug_morte').' '.$request->get('lug_morte1');
        $DeceasedPatient->user_id =auth()->user()->id;
        $DeceasedPatient->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('DeceasedPatientController@index');
    }

    
    public function show($id)
    {
        $data = DeceasedPatient::join('patient as p','p.patient_id','deceased_patients.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),'p.hist_id','deceased_patients.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('deceased_patient.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $data = DeceasedPatient::findOrFail($id);
        return View('deceased_patient.form',compact('data'));
    }

    
    public function update(DeceasedPatientRequest $request, $id)
    {
        $DeceasedPatient = DeceasedPatient::findOrFail($id);
        $DeceasedPatient->fill($request->all());
        $DeceasedPatient->lug_morte=$request->get('lug_morte').' '.$request->get('lug_morte1');
        $DeceasedPatient->user_updated =auth()->user()->id;
        $DeceasedPatient->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('DeceasedPatientController@index');
    }

   
    public function destroy($id)
    {
       $DeceasedPatient = DeceasedPatient::findOrFail($id);
       $DeceasedPatient->user_deleted =auth()->user()->id;
       $DeceasedPatient->update();
       $DeceasedPatient = DeceasedPatient::findOrFail($id)->delete();
       return;
    }

     public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Paciente_Fallecido', function($excel) {
              
        $excel->sheet('Paciente_Fallecido', function($sheet) {

        $data = DeceasedPatient::Search($GLOBALS['variable'])
                    ->select('p.hist_id as Hist_ID' , DB::raw("CONCAT(p.first_name,' ',p.last_name) as Nom_Pac"),
                        'deceased_patients.nom_infor',
                        'deceased_patients.parentesco',
                        'deceased_patients.ed_morte',
                        'deceased_patients.fech_morte',
                        'deceased_patients.lug_morte',
                        'deceased_patients.caus_morte',
                        'deceased_patients.lug_vela',
                        'deceased_patients.fech_entrev',
                        'deceased_patients.Entrevistador',
                        'deceased_patients.Obs_Hist_Fallecido'
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xls');

       }

   
}
