<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;


use App\Models\Usuarios;
use App\Models\Eventos;

class UsuariosController extends Controller
{
    use AuthenticatesUsers;
    
    public function index()
    {
        
        
    	    if(Auth::check()){
            return redirect()->route('home');
         }
    	    
    	    return view('Artem.index');
    }
        
    public function login()
    {
        
        if(Auth::check()){
            return redirect()->route('home');
         }
        
    	   $usuarios = Usuarios::all();
    	    
        	$erroLogin = "	visibility: hidden;	height: 1px;";	
    	
    	    return view('Auth.login')
    	           ->with('erroLogin', $erroLogin)
    	           ->with('email', "");
    }
    
    public function logar(Request $req)
    {      
        $usuarios = Usuarios::all();
        
        $email = $req->email;
        $senha = $req->senha;
             
        
        if (Auth::attempt(['email' => $email, 'password' => $senha], true)) { 
            // Authentication passed... 
            return redirect()->intended('home'); 	   
        }
        
        $erroLogin = "position: relative; visibility: visible; height: auto;";    
        
        return view('Auth.login')
               ->with('erroLogin', $erroLogin)
               ->with('email', $email);    	       
    }
    
    
    public function logOut()
    {
        if(Auth::check()){
            
           Auth::logout();
           return redirect('/');           
        }else {
            
           return redirect('home');
        }
    }
    
    
    public function esqueceuSenha()
    {
        return view('Auth.esqueceuSenha');
    }
            
    public function cadastro()
    {
        
    	    $erroEmail = "position: absolute; visibility: hidden;";
    	    
    	    return view('Auth.cadastro')
    	           ->with('erroEmail', $erroEmail)
    	           ->with('nome', "")
    	           ->with('email', "")
    	           ->with('estados', Estados::getEstados());
    	           
    }
    
    
    public function store(Request $request)
    {
    	
    	 $usuarios = Usuarios::all();
     
      $email = $request->email;
     
      foreach($usuarios as $usuario){
     	   if($usuario->email == $email){
     	   	$erroEmail = "position: relative; visibility: visible;";
    	    
     	   	return view('Auth.cadastro')
     	   	       ->with('erroEmail', $erroEmail)
     	   	       ->with('nome', $request->nome)
    	           ->with('email', $request->email)
    	           ->with('estados', Estados::getEstados());
    	           
     	    }
      }
        
        Usuarios::create([
            'nome' => $request->nome,
            'estado' => $request->estado,
            'email' => $request->email,
            'senha' => bcrypt($request->senha),
        ]);
        
        $this->logar($request);
        
        return redirect()->route('home'); 

    }
    
    /**
    
    public function show($id)
    {
        //
    }
    
    */    
    
    public function usuarioPerfil()
    {
        
        $eventos = Eventos::where('id_usuario', Auth::user()->id)->get();        
        
        return view('Usuario.UsuarioPerfil')
        ->with('user', Auth::user())
        ->with('eventos', $eventos);
    }

    

    
    public function editarUsuario()
    {   
    
        
        $erroEmail = "position: absolute; visibility: hidden;";
    	    
    
        return view('Usuario.edit')
        ->with('user', Auth::user())
        ->with('estados', Estados::getEstados())
        ->with('erroEmail', $erroEmail);
        
    }

    public function updateUsuario(Request $req, $id)
    {
        
        $senhaCorreta = false;
          
        $erroEmail = "position: absolute; visibility: hidden;";
        
        if(Hash::check($req->senhaVelha,  Auth::user()->senha)){
            $senhaCorreta = true;
        }
        
        //dd($senhaCorreta);
        
       // dd(["senha" => $req->senha, "verificacao" => $senhaCorreta]);
        
        if(!$senhaCorreta && $req->senhaVelha != null){
            return view('Usuario.edit')
            ->with('user', Auth::user())
            ->with('estados', Estados::getEstados())
            ->with('erroEmail', $erroEmail)
            ->with('senhaErr', 'Senha Incorreta');
            
        }
        
        $usuario = Usuarios::find(Auth::user()->id);
        
        if($req->senha != null && $senhaCorreta){
            $usuario->senha = bcrypt($req->senha);
        }
        
        $usuario->nome = $req->nome;
        $usuario->email = $req->email;
        $usuario->estado = $req->estado;
        
        
        $usuario->save();
        
        return redirect()->route('usuario');
        
        
        
    }
    
    
    public function destroy($id)
    {
        //
    }
    
}