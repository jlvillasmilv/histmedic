<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Format;
use App\Format_det;
use Response;
use Redirect;

class FormatController extends Controller
{
   
    public function index(Request $request)
    {
        $search=trim($request->get('search'));
        $formats =Format::Search($search)
            ->paginate(10);
      return View('format.index',compact('formats','search'));
    }

  
    public function create()
    {
        $id =null;
        $formats =Format::Search($search)
            ->paginate(10);

          $format_doc=DB::table('format_doc')->orderBy('name')->get();

      return View('format.form',compact('id','format_doc'));   
    }


    public function valida()
    {
         $this->validate(request(), [
            'name' => 'required|max:150',
            'description' => 'required',
            'version' => 'required|max:40',
            'date_format'  => 'required|date',
            'format_doc_id' => 'required'
        ]);


    }
    
    public function store(Request $request)
    {

        $this->valida();
          try {
         DB::beginTransaction();
         $format=new Format;
         $format->fill($request->all());
         $format->user_id=Auth::user()->id;
         $format->save();

          $num=$request->get('num');
          $title=$request->get('title');
          $variable=$request->get('variable');
          $valor=$request->get('valores');

        $cont=0;

         while ($cont < count($num)) {

            $format_det=new format_det;
            $format_det->format_id=$format->format_id;
            $format_det->num=$num[$cont];
            $format_det->title=$title[$cont];
            $format_det->var=$variable[$cont];
            $format_det->value=$valor[$cont];
            $format_det->save();
            $cont=$cont+1;
        }
                                    
         DB::commit();
    
         }catch (Exception $e){
        DB::rollBack();

        Flash::error(str_limit($e,150));
        return Redirect::action('FormatController@index');
      }
         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('FormatController@index');
       
    }

   
    public function show($id)
    {
        
        $format=Format::findOrFail($id);
        $format_det=Format_det::where('format_id',$id)->orderby('num')->get();

        return View('format.form',compact('format','format_det','id'));

    }

    
    public function edit($id)
    {
        $format=Format::findOrFail($id);
        $format_det=Format_det::where('format_id',$id);

        return View('format.form',compact('format','id','format_det'));
    }


   
    public function update(Request $request, $id)
    {
        

        $this->valida();
          try {
         DB::beginTransaction();
         $format=Format::findOrFail($id);
         $format->fill($request->all());
         $format->user_id=Auth::user()->id;
         $format->update();

          $num=$request->get('num');
          $title=$request->get('title');
          $variable=$request->get('variable');
          $valor=$request->get('valores');

        $cont=0;

        Format_det::where('format_id', $id)->delete();

         while ($cont < count($num)) {

            $format_det=new Format_det;
            $format_det->format_id=$format->format_id;
            $format_det->num=$num[$cont];
            $format_det->title=$title[$cont];
            $format_det->var=$variable[$cont];
            $format_det->value=$valor[$cont];
            $format_det->save();
            $cont=$cont+1;
        }
                                    
         DB::commit();
    
         }catch (Exception $e){
        DB::rollBack();

        Flash::error(str_limit($e,150));
        return Redirect::action('FormatController@index');
      }
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('FormatController@index');


    }

   
    public function destroy(Request $request)
    {
       $id=$request->input('id');
       Format::where('format_id', $id)->delete();// eliminar el elemento
       return Response::json(['ok' => 'ok']);
    }

     public function crear_pdf($id)
    {


      $format = Format::where('format_id',$id)
                  ->first();
       $format_det=Format_det::where('format_id',$id)->orderBy('num')->get();

       $view = \View::make('format.format_pdf', compact('format','format_det'))->render();
          
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");

       return $pdf->stream();     
  
    }

    
}
