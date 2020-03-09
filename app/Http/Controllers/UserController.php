<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Requests\UserRequest;

use Yajra\DataTables\Facades\DataTables;
use Session;
use Response;
use Redirect;

class UserController extends Controller
{

    public function index(Request $request)
    {
        
      return View('auth.index');
    }

 
    public function create()
    {
        $id=null;
        return View('auth.register',compact('id'));
    }

  

    public function store(UserRequest $request)
    {
        

        $this->validate(request(), [
            'password' => 'required|min:6|confirmed',
            ]); 

         try {    
        $usuario= new User;     
        $usuario->fill($request->all()); 
        $usuario->password=bcrypt($request->get('password'));
        $usuario->save();
        
          }catch (Exception $e){

          Flash::error('Error Ingresando Datos Intente mas Tarde');
          return Redirect::action('UserController@index');

          }
            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('UserController@index');

    }

    
    public function show($id)
    {
       $data =User::findOrFail($id);
       return View('auth.show', compact('data','id'));
    }

    public function password($id)
    {
         return View('auth.cambioclave'); 
    }

    
    public function edit($id)
    {
       $users =User::findOrFail($id);
       return View('auth.register', compact('users','id'));
    }

    
    public function update(UserRequest $request, $id)
    {
        

         try {    
        $users =User::findOrFail($id);  
        $users->name=$request->get('name');
        $users->user_name=$request->get('user_name');
        $users->email=$request->get('email');   
        $users->type=$request->get('type');
        if (empty($request->get('password'))) {

            }else{
            $this->validate(request(), [
            'password' => 'required|min:6|confirmed ',
            ]);
            $users->password=bcrypt($request->get('password'));      
            }
       
        $users->update();

        }catch (Exception $e){

          Flash::error('Error Ingresando Datos Intente mas Tarde');
          return Redirect::action('UserController@index');

          }
           Flash::success('Registro Editado con exito');
           return Redirect::action('UserController@index');

    }

    
    public function cambio(Request $request)
    {

        $this->validate(request(), [
              'password' => 'required|min:6|confirmed',

            ]);

        if (Auth::check()) {


            $usuid=Auth::user()->id;
            $usu=Auth::user()->user_name;
            $password=bcrypt($request->get('password'));

            try { 
            DB::table('users')
            ->where('id', $usuid)
            ->where('user_name', $usu)
            ->update(['password'=>$password]);

             }catch (Exception $e){
            Session::flash('status','Error Modificando Contraseña');
            return redirect('/');

            }

            Session::flash('status','Exito!');
            return redirect('/');
            }
       
    }


    public function destroy($id)
    {
         User::where('id', $id)->delete();// eliminar el elemento
         return Response::json(['ok' => 'ok']);
    }

    public function multidelete(Request $request)
    {
        User::whereIn('id',  $request->input('id'))->delete();
        return Response::json(['ok' => 'ok']);
    }


    public function table(Request $request)
    {
        
        return Datatables::of(User::query())->addColumn('action', function ($dat) {

              return '
                      <a href="' .route("user.show", $dat->id) . '" class="btn btn-sm btn-info"><i class="fa fa-file-text" data-toggle="tooltip" data-placement="right" title="Ver '.$dat->user_name.'"></i></a>

                      <a href="'.route("user.edit", $dat->id).'" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar usuario: '.$dat->user_name.'"></i></a>

                      <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar '.$dat->user_name.'" data-remote="'.route("user.destroy", $dat->id).'"><i
                                   class="fa fa-trash-o"></i></button> ';
                })
                ->rawColumns(['action'])
                ->make(true);
    }










}
