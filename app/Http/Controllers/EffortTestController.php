<?php

namespace App\Http\Controllers;

use App\EffortTest;
use App\Patient;
use App\Http\Requests\EffortTestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Response;
use Redirect;


class EffortTestController extends Controller
{
   public function index(Request $request)
    {
        $create  = route('prueba_esfuerzo.create');
        $table   = route('pe_table');
        $export  = route('pe_xls');
        $title   = "PRUEBA DE ESFUERZO";

        return View('effort_test.index',compact('title','export','table','create'));
    }
    
    public function create()
    {
       
        return View('effort_test.form');
    }

    
    public function store(EffortTestRequest $request)
    {

        $EffortTest = new EffortTest;
        $EffortTest->fill($request->all());
        $EffortTest->user_id =auth()->user()->id;
        $EffortTest->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('EffortTestController@index');
    }

    
    public function show($id)
    {
        $data = EffortTest::join('patient as p','p.patient_id','effort_test.patient_id')
                ->select('p.first_name',
                             'p.second_name',
                             'p.last_name',
                             'p.second_last_name',
                             'p.gender as Sexo_TMT',
                              DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,effort_test.Fecha_TMT) AS Edad_TMT'),
                             'p.hist_id as Hist_ID',
                             'p.cedula as Cedula_TMT',
                             'effort_test.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('effort_test.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

    public function edit($id)
    {
        $data = EffortTest::findOrFail($id);
        return View('effort_test.form',compact('data'));
    }

    public function update(EffortTestRequest $request, $id)
    {
        $EffortTest = EffortTest::findOrFail($id);
        $EffortTest->fill($request->all());
        $EffortTest->user_updated =auth()->user()->id;
        $EffortTest->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('EffortTestController@index');
    }

   
    public function destroy($id)
    {
       $EffortTest = EffortTest::findOrFail($id);
       $EffortTest->user_deleted =auth()->user()->id;
       $EffortTest->update();
       $EffortTest = EffortTest::findOrFail($id)->delete();
       return;
    }

    public function export_xls(Request $request)
    {
       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Prueba_Esfuerzo', function($excel) {
              
        $excel->sheet('Prueba_Esfuerzo', function($sheet) {

        $data = EffortTest::Search($GLOBALS['variable'])
                    ->select(
                             'p.first_name as 1erNombre_TMT',
                             'p.second_name as 2doNombre_TMT',
                             'p.last_name as 1erApellido_TMT',
                             'p.second_last_name as 2doApellido_TMT',
                             'p.gender as Sexo_TMT',
                              DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,effort_test.Fecha_TMT) AS Edad_TMT'),
                             'p.hist_id as Hist_ID',
                             'p.cedula as Cedula_TMT',
                              DB::raw('DATE_FORMAT(effort_test.Fecha_TMT ,"%m/%d/%Y") AS Fecha_TMT'),
                              'effort_test.Medicamento1_TMT',
                            'effort_test.Dosis1_TMT',
                            'effort_test.TiempoUl1_TMT',
                            'effort_test.Medicamento2_TMT',
                            'effort_test.Dosis2_TMT',
                            'effort_test.TiempoUl2_TMT',
                            'effort_test.Medicamento3_TMT',
                            'effort_test.Dosis3_TMT',
                            'effort_test.TiempoUl3_TMT',
                            'effort_test.Medicamento4_TMT',
                            'effort_test.Dosis4_TMT',
                            'effort_test.TiempoUl4_TMT',
                            'effort_test.FC100_TMT',
                            'effort_test.FC85_TMT',
                            'effort_test.FC75_TMT',
                            'effort_test.Bruce_TMT',
                            'effort_test.Naugthon_TMT',
                            'effort_test.Otro_TMT',
                            'effort_test.RepPAS_TMT',
                            'effort_test.CalPAS_TMT',
                            'effort_test.EstaIPAS_TMT',
                            'effort_test.EstaIIPAS_TMT',
                            'effort_test.EstaIIIPAS_TMT',
                            'effort_test.EstaIVPAS_TMT',
                            'effort_test.EstaVPAS_TMT',
                            'effort_test.Recup1PAS_TMT',
                            'effort_test.Recup2PAS_TMT',
                            'effort_test.Recup3PAS_TMT',
                            'effort_test.Recup4PAS_TMT',
                            'effort_test.Recup8PAS_TMT',
                            'effort_test.Recup10PAS_TMT',
                            'effort_test.RepPAD_TMT',
                            'effort_test.CalPAD_TMT',
                            'effort_test.EstaIPAD_TMT',
                            'effort_test.EstaIIPAD_TMT',
                            'effort_test.EstaIIIPAD_TMT',
                            'effort_test.EstaIVPAD_TMT',
                            'effort_test.EstaVPAD_TMT',
                            'effort_test.Recup1PAD_TMT',
                            'effort_test.Recup2PAD_TMT',
                            'effort_test.Recup3PAD_TMT',
                            'effort_test.Recup4PAD_TMT',
                            'effort_test.Recup8PAD_TMT',
                            'effort_test.Recup10PAD_TMT',
                            'effort_test.RepFC_TMT',
                            'effort_test.CalFC_TMT',
                            'effort_test.EstaIFC_TMT',
                            'effort_test.EstaIIFC_TMT',
                            'effort_test.EstaIIIFC_TMT',
                            'effort_test.EstaIVFC_TMT',
                            'effort_test.EstaVFC_TMT',
                            'effort_test.Recup1FC_TMT',
                            'effort_test.Recup2FC_TMT',
                            'effort_test.Recup3FC_TMT',
                            'effort_test.Recup4FC_TMT',
                            'effort_test.Recup8FC_TMT',
                            'effort_test.Recup10FC_TMT',
                            'effort_test.RepInfSTT_TMT',
                            'effort_test.CalInfSTT_TMT',
                            'effort_test.EstaIInfSTT_TMT',
                            'effort_test.EstaIIInfSTT_TMT',
                            'effort_test.EstaIIIInfSTT_TMT',
                            'effort_test.EstaIVInfSTT_TMT',
                            'effort_test.EstaVInfSTT_TMT',
                            'effort_test.Recup1InfSTT_TMT',
                            'effort_test.Recup2InfSTT_TMT',
                            'effort_test.Recup3InfSTT_TMT',
                            'effort_test.Recup4InfSTT_TMT',
                            'effort_test.Recup8InfSTT_TMT',
                            'effort_test.Recup10InfSTT_TMT',
                            'effort_test.RepAngor_TMT',
                            'effort_test.CalAngor_TMT',
                            'effort_test.EstaIAngor_TMT',
                            'effort_test.EstaIIAngor_TMT',
                            'effort_test.EstaIIIAngor_TMT',
                            'effort_test.EstaIVAngor_TMT',
                            'effort_test.EstaVAngor_TMT',
                            'effort_test.Recup1Angor_TMT',
                            'effort_test.Recup2Angor_TMT',
                            'effort_test.Recup3Angor_TMT',
                            'effort_test.Recup4Angor_TMT',
                            'effort_test.Recup8Angor_TMT',
                            'effort_test.Recup10Angor_TMT',
                            'effort_test.RepArritVent_TMT',
                            'effort_test.CalArritVent_TMT',
                            'effort_test.EstaIArritVent_TMT',
                            'effort_test.EstaIIArritVent_TMT',
                            'effort_test.EstaIIIArritVent_TMT',
                            'effort_test.EstaIVArritVent_TMT',
                            'effort_test.EstaVArritVent_TMT',
                            'effort_test.Recup1ArritVent_TMT',
                            'effort_test.Recup2ArritVent_TMT',
                            'effort_test.Recup3ArritVent_TMT',
                            'effort_test.Recup4ArritVent_TMT',
                            'effort_test.Recup8ArritVent_TMT',
                            'effort_test.Recup10ArritVent_TMT',
                            'effort_test.RepArritSupV_TMT',
                            'effort_test.CalArritSupV_TMT',
                            'effort_test.EstaIArritSupV_TMT',
                            'effort_test.EstaIIArritSupV_TMT',
                            'effort_test.EstaIIIArritSupV_TMT',
                            'effort_test.EstaIVArritSupV_TMT',
                            'effort_test.EstaVArritSupV_TMT',
                            'effort_test.Recup1ArritSupV_TMT',
                            'effort_test.Recup2ArritSupV_TMT',
                            'effort_test.Recup3ArritSupV_TMT',
                            'effort_test.Recup4ArritSupV_TMT',
                            'effort_test.Recup8ArritSupV_TMT',
                            'effort_test.Recup10ArritSupV_TMT',
                            'effort_test.ArritVent_Mono_TMT',
                            'effort_test.ArritVent_Polimo_TMT',
                            'effort_test.ArritVent_Bige_TMT',
                            'effort_test.ArritVent_Pareadas_TMT',
                            'effort_test.ArritVent_RT_TMT',
                            'effort_test.ArritVent_TV_TMT',
                            'effort_test.RazonDet_SolPac_TMT',
                            'effort_test.RazonDet_Arrit_TMT',
                            'effort_test.RazonDet_HTA_TMT',
                            'effort_test.RazonDet_Isq_TMT',
                            'effort_test.RazonDet_85FCmax_TMT',
                            'effort_test.Isquemia_TMT',
                            'effort_test.Arritmia_TMT',
                            'effort_test.HTA_TMT',
                            'effort_test.MetsAlc_TMT',
                            'effort_test.TtoInd1',
                            'effort_test.DosisTtoind1_TMT',
                            'effort_test.TtoInd2',
                            'effort_test.DosisTtoind2_TMT',
                            'effort_test.TtoInd3',
                            'effort_test.DosisTtoind3_TMT',
                            'effort_test.TtoInd4',
                            'effort_test.DosisTtoind4_TMT',
                            'effort_test.Doctor_TMT',
                            DB::raw('DATE_FORMAT(effort_test.Fecha_TMT2 ,"%m/%d/%Y") AS Fecha__TMT')                                                            
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xls');

       }


    public function table(Request $request)
    {
         $query = EffortTest::with('patient','user')->select('effort_test.id','effort_test.user_id','effort_test.patient_id','effort_test.Fecha_TMT as fecha','effort_test.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("prueba_esfuerzo.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank"><i class="fa fa-file-text" data-toggle="tooltip" data-placement="right" title="Ver registro"></i></a>

                  <a href="' .route("prueba_esfuerzo.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("prueba_esfuerzo.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(effort_test.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(effort_test.Fecha_TMT,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
