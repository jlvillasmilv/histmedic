<?php

namespace App\Http\Controllers;

use App\EcoRP;
use Illuminate\Http\Request;
use App\Http\Requests\EcoRpRequest;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use Response;
use Redirect;

class EcoRPController extends Controller
{
    public function index(Request $request)
    {
        $create  = route('ecorp.create');
        $table   = route('ecorp_table');
        $export  = route('ecorp_xls');
        $title   = "Ecocardiograma RP";

        return View('eco_rp.index',compact('title','export','table','create'));
    }
    
    public function create()
    {
         
        return View('eco_rp.form');
    }

    
    public function store(EcoRpRequest $request)
    {
        
        $EcoRP = new EcoRP;
        $EcoRP->fill($request->all());
        $EcoRP->user_id =auth()->user()->id;
        $EcoRP->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('EcoRPController@index');
    }

    
    public function show($id)
    {
        $data = EcoRP::join('patient as p','p.patient_id','eco_rp.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),'p.hist_id','p.gender',
                     'p.cedula', DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,eco_rp.Fecha_eco) AS Edad_eco'),'eco_rp.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('eco_rp.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $data = EcoRP::findOrFail($id);
        return View('eco_rp.form',compact('data'));
    }

    
    public function update(EcoRpRequest $request, $id)
    {
        $EcoRP = EcoRP::findOrFail($id);
        $EcoRP->fill($request->all());
        $EcoRP->user_updated =auth()->user()->id;
        $EcoRP->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('EcoRPController@index');
    }

   
    public function destroy($id)
    {
       $EcoRP = EcoRP::findOrFail($id);
       $EcoRP->user_deleted =auth()->user()->id;
       $EcoRP->update();
       $EcoRP = EcoRP::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {
      $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('eco_rp', function($excel) {
              
        $excel->sheet('eco_rp', function($sheet) {

        $data = EcoRP::Search($GLOBALS['variable'])
                    ->select( DB::raw('DATE_FORMAT(eco_rp.Fecha_eco,"%m/%d/%Y") AS Fecha_eco'),
                             DB::raw("CONCAT(p.first_name,' ',p.last_name) as Nombre_eco"),
                            'p.cedula as Cedula_eco', 
                            'eco_rp.Peso_eco',
                            'eco_rp.Talla_eco',
                             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,eco_rp.Fecha_eco) AS Edad_eco'),
                             'eco_rp.Neco_eco',
                             'p.hist_id as Hist_ID',
                             'eco_rp.Referido_eco',
                            'eco_rp.Aorta_eco',
                            'eco_rp.Sept_diast_eco',
                            'eco_rp.VId_diast_eco',
                            'eco_rp.Vid_sist_eco',
                            'eco_rp.PPVI_diast_eco',
                            'eco_rp.Auriculaiz_eco',
                            'eco_rp.Auri_sist_eco',
                            'eco_rp.VentDer_eco',
                            'eco_rp.Auri_Sist2_eco',
                            'eco_rp.VI_TE_eco',
                            'eco_rp.VI_PPE_eco',
                            'eco_rp.VI_RR_eco',
                            'eco_rp.VI_PPETE_eco',
                            'eco_rp.VD_TE_eco',
                            'eco_rp.VD_PPE_eco',
                            'eco_rp.VD_RR_eco',
                            'eco_rp.VD_PPETE_eco',
                            'eco_rp.AperAo_eco',
                            'eco_rp.Exc_mitral_eco',
                            'eco_rp.EF_eco',
                            'eco_rp.QCM_eco',
                            'eco_rp.Pul_eco',
                            'eco_rp.Tricuspide_eco',
                            'eco_rp.VDF_eco',
                            'eco_rp.VSF_eco',
                            'eco_rp.VL_eco',
                            'eco_rp.FE_eco',
                            'eco_rp.FacPer_eco',
                            'eco_rp.Masa_eco',
                            'eco_rp.Dop_mit_e_eco',
                            'eco_rp.Dop_mit_a_eco',
                            'eco_rp.Dop_mit_tac_eco',
                            'eco_rp.Dop_mit_tdec_eco',
                            'eco_rp.Dop_mit_tto_eco',
                            'eco_rp.Dop_mit_tva_eco',
                            'eco_rp.Dop_tric_e_eco',
                            'eco_rp.Dop_tric_a_eco',
                            'eco_rp.Dop_tric_tac_eco',
                            'eco_rp.Dop_tric_tdec_eco',
                            'eco_rp.Dop_tric_tto_eco',
                            'eco_rp.Dop_tric_tva_eco',
                            'eco_rp.Ao_vmax_eco',
                            'eco_rp.Ao_ta_eco',
                            'eco_rp.Ao_tdec_eco',
                            'eco_rp.Ao_tvi_eco',
                            'eco_rp.Pulm_vmax_eco',
                            'eco_rp.Pulm_ta_eco',
                            'eco_rp.Pulm_tdec_eco',
                            'eco_rp.Pulm_tvi_eco',
                            'eco_rp.Moti_eco',
                            'eco_rp.Conc1_eco',
                            'eco_rp.Conc2_eco',
                            'eco_rp.Conc3_eco',
                            'eco_rp.Conc4_eco',
                            'eco_rp.Conc5_eco',
                            'eco_rp.Conc6_eco'
                                                
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xlsx');

       }

    public function table(Request $request)
    {
         $query = EcoRP::with('patient','user')->select('eco_rp.id','eco_rp.user_id','eco_rp.patient_id','eco_rp.Fecha_eco as fecha','eco_rp.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("ecorp.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank"><i class="fa fa-file-text" data-toggle="tooltip" data-placement="right" title="Ver registro"></i></a>

                  <a href="' .route("ecorp.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("ecorp.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(eco_rp.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(eco_rp.Fecha_eco,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
