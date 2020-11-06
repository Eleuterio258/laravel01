<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacto =  Contacto::all();
        $array_cliente=['listacontactos'=>$contacto];
        return view('home',$array_cliente);
    }
    public function novo(){
        return view('novo');
    }
    public function add(Request $request){
        $contacto = new Contacto();
        $contacto->con_nome= $request->nome_form;
        $contacto->con_numero= $request->email_form;
        $contacto->con_email= $request->numero_form;
        $contacto->user_id= 1;
        $contacto->save();
        return redirect('/home');
    }
    public function editar($id){
        $contacto =  Contacto::find($id);
        return view('editar',$contacto);
    }
    public function excluir($id){
        $contacto =  Contacto::find($id);
        $contacto->delete($id);
        return  redirect('/home');
    }
    public function update(Request $request,$id){
        $contacto = Contacto::find($request->id_form);
        $contacto->con_nome= $request->nome_form;
        $contacto->con_numero= $request->email_form;
        $contacto->con_email= $request->numero_form;
        $contacto->user_id= 1;
        $contacto->save();
        return  redirect('/home');
    }
}
