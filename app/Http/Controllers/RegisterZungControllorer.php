<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\FormatRequest;
use App\AnswerPacient;
use App\RegisterFormat;
use App\Format;
use App\Format_det;
use Response;
use Redirect;
use Carbon\Carbon;

class RegisterZungControllorer extends Controller
{
    
    public function index(Request $request)
    {

        $search=trim($request->get('search'));
             if($request->get('imp')=='E'){
            return $this->export_excel($search);
        }
       
        $zung =RegisterFormat::Search($search,'Zung')
            ->paginate(10);
      return View('format_zung.index',compact('zung','search'));

    }

   
    public function create()
    {
        
      $format = Format::where('format_id',1)
                  ->select('format_id','name','version')
                  ->get();
      
      return View('format_zung.form',compact('format'));

    }

   
    public function store(FormatRequest $request)
    {
    //   dd($request->all());
         try {

        $num=$request->get('num');
        $title=$request->get('title');
        $var=$request->get('valo');
        $valor=$request->get('valor');

         $this->validate(request(), [
            'valor.*' => 'required',
            'valo.*' => 'required',
            ]); 


         DB::beginTransaction();

         $zung=new RegisterFormat;
         $zung->fill($request->all());
         $zung->user_id=Auth::user()->id;
         $zung->total=array_sum($valor);
         $zung->save();

        
        $cont=0;

         while ($cont < count($num)) {

  
        $zung_det=new AnswerPacient;
         
         $zung_det->register_format_id=$zung->register_id;
         $zung_det->format_det_id=$var[$cont];
         $zung_det->value=$valor[$cont];
         $zung_det->save();

          $cont=$cont+1;
        }

         DB::commit();
    
         }catch (Exception $e){
        DB::rollBack();

        Flash::error(str_limit($e,150));
        return Redirect::action('RegisterZungControllorer@index');
      }
         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('RegisterZungControllorer@index');


    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

  
    public function update(FormatRequest $request, $id)
    {
        //
    }

  
    public function destroy(Request $request)
    {
       RegisterFormat::where('register_id', $request->input('id'))->delete();// eliminar el elemento
      AnswerPacient::where('register_format_id',$request->input('id'))->delete();// eliminar el elemento
       
       return Response::json(['ok' => 'ok']);
    }

    public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
          Excel::create('Zung Evaluation', function($excel) {
              
            $excel->sheet('Zung Evaluation', function($sheet) {

                if(trim($GLOBALS['variable']) != ""){
                  
                $zung= DB::table('zung')->where('Hist_ID', 'LIKE', "%".$GLOBALS['variable']."%")
                ->orWhere('Nombre', 'LIKE', "%".$GLOBALS['variable']."%")
                ->get();
                }
                else {
                $zung= DB::table('zung')->get();
                }
          /*  $zung= DB::table('answer_pacient as ap')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as Nombre"),
                'p.hist_id',
                DB::raw('DATE_FORMAT(date_evaluation,"%m/%d/%Y") AS Fecha_zung'),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_1' THEN ap.value END) AS Zung_1"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_2' THEN ap.value END) AS Zung_2"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_3' THEN ap.value END) AS Zung_3"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_4' THEN ap.value END) AS Zung_4"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_5' THEN ap.value END) AS Zung_5"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_6' THEN ap.value END) AS Zung_6"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_7' THEN ap.value END) AS Zung_7"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_8' THEN ap.value END) AS Zung_8"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_9' THEN ap.value END) AS Zung_9"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_10' THEN ap.value END) AS Zung_10"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_11' THEN ap.value END) AS Zung_11"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_12' THEN ap.value END) AS Zung_12"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_13' THEN ap.value END) AS Zung_13"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_14' THEN ap.value END) AS Zung_14"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_15' THEN ap.value END) AS Zung_15"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_16' THEN ap.value END) AS Zung_16"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_17' THEN ap.value END) AS Zung_17"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_18' THEN ap.value END) AS Zung_18"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_19' THEN ap.value END) AS Zung_19"),
                DB::raw("SUM(CASE WHEN fd.var = 'Zung_20' THEN ap.value END) AS Zung_20"),
                DB::raw("SUM(ap.`value`) as Total_zung"),
                DB::raw("((SUM(ap.`value`)*100)/80) as EAD_indice")
                 ) 
            ->join('format_det as fd','ap.format_det_id','fd.format_det_id')
            ->join('register_format as z','z.register_id','ap.register_format_id')
            ->join('patient as p','p.patient_id','z.patient_id')
            ->where('p.hist_id', 'LIKE', "%".$GLOBALS['variable']."%")  
            ->groupBy('z.register_id')
            ->get();*/
           // DD($zung);
              
                $zung = json_decode( json_encode($zung), true);
                $sheet->fromArray($zung);

            });
        })->export('xls');

       }

    public function crear_pdf($id)
    {


      $zung = RegisterFormat::join('patient as p','p.patient_id','register_format.patient_id')
                     ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as nombre"),
                'p.hist_id', 'register_format.*')
                    ->where('register_id',$id)->first();

      $zung_det = DB::table('answer_pacient as ap')
                 ->leftjoin('format_det as fd','fd.format_det_id','ap.format_det_id')
                 ->select('fd.num','fd.title','fd.var','fd.value','ap.value','fd.value as valor')
                 ->where('ap.register_format_id',$zung->register_id)
                 ->orderBy('fd.num')
                 ->get();


      $format = Format::where('format_id',$zung->format_id)
                  ->first();

     
       $view = \View::make('format_zung.format_pdf', compact('format','zung','zung_det'))->render();
          
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");

       return $pdf->stream();     
  
    }


}
