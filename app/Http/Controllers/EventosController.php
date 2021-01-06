<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Eventos;
use App\Models\Endereco;
use App\Models\Participacao;
use App\Models\Usuarios;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use DateTime;

use App\Http\Controllers\Estados;

class EventosController extends Controller
{


    public function participar($id){

      $evento = Eventos::find($id);

      $autor = Usuarios::find($evento['id_usuario']);

      //dd($autor['id']);

      Participacao::create([
            "participante" => Auth::user()->id,
            "criador" => $autor['id'],
            "evento" => $id,


        ]);


        return redirect()->route('home.show', $id);
    }

    public function deletarParticipacao($id){

        $parti = Participacao::find($id);
        $evento = Eventos::find($parti['evento']);

        // deleta participação 

        $parti->delete();


      return redirect()->route('home.show', $evento['id']);
    }

    public function index()
    {

        $eventos = Eventos::all();

        if(count($eventos) < 7 && count($eventos) > 0){
            $eventos = Eventos::all()->random(count($eventos));
        }else if(count($eventos) > 6){
            $eventos = Eventos::all()->random(6);
        }else {
            $eventos = '';
        }
       //  dd($eventos);

         return view('Evento.home')
         ->with('eventos', $eventos);




    }

    public function criarEvento()
    {

        $dateTime = new DateTime('now', new \DateTimeZone('America/Sao_Paulo'));

        $data = $dateTime->format('Y-m-d');
        $hora = $dateTime->format('H:i');

        return view('evento/criarEvento')
        ->with('nome', '')
        ->with('data', $data)
        ->with('hora', $hora)
        ->with('estados', Estados::getEstados())
        ->with('cep', ['uf' => 'SP']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

  /*  public function buscarCep(){


    }
     */

    public function store(Request $request)
    {

        $dateTime = new DateTime('now', new \DateTimeZone('America/Sao_Paulo'));

        if($request->hasFile('img')){
        $data = $dateTime->format('d-m-y');

        $extencao = $request->img->extension();

        $ale = Str::random(7);

        $nameFile = "{$data}{$ale}.$extencao";

        $valueImg = "uploads/eventos/{$nameFile}";

        if(!$request->img->storeAs('/uploads/eventos', $nameFile)){

            return view('Evento.criarEvento')
               ->with('nome', $request->nome)
               ->with('dataInit', $request->dataInit)
               ->with('horaInit', $request->horaInit)
               ->with('dataTerm', $request->dataTerm)
               ->with('horaTerm', $request->horaTerm)
               ->with('estados', Estados::getEstados())
               ->with('valueCep', $request->cep)
               ->with('valueImg', $valueImg)
               ->with('erroCep', $erroCep)
               ->with('descricao', $request->descricao);


        }
        }

        if(isset($valueImg)){
             session([
                  'valueImg' => $valueImg,
             ]);
        }else {
              $valueImg = session('valueImg');
        }

        if(!isset($nameFile)){
           $nameFile = substr($valueImg, 16, strlen($valueImg));
        }

        session()->forget('valueImg');

        Endereco::create([
           "cidade" => $request->cidade,
           "bairro" => $request->bairro,
           "estado" => $request->estado,
           "num" => 2,
           "rua" => $request->rua,

       ]);


        $inicio = "$request->dataInit $request->horaInit:00";
        $termino = "$request->dataTerm $request->horaTerm:00";

       // $termino =

        if(!$nameFile || $nameFile == null || $nameFile == ""){
            $nameFile = "evento_img_default.jpg";
        }
        //dd($nameFile);
        $evento = new Eventos;

        $evento->titulo = $request->nome;
        $evento->autor = Auth::user()->nome;
        $evento->id_usuario = Auth::user()->id;
        $evento->descricao = $request->descricao;
        $evento->img = $nameFile;
        $evento->inicio = $inicio;
        $evento->termino = $termino;
        $evento->endereco = Endereco::max('id');

        $evento->save();


       return redirect()->route('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mesExtenco = [
            '0'  => "",
            '01' => "Janeiro",
            '02' => "Fevereiro",
            '03' => "Março",
            '04' => "Abril",
            '05' => "Maio",
            '06' => 'Junho',
            '07' => 'Julho',
            '08' => 'Agosto',
            '09' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro',
        ];

        $evento = Eventos::find($id);
        $endereco = Endereco::find($evento['endereco']);

        $userId = isset(Auth::user()->id) ? Auth::user()->id : 0;
        
        $consulta = Participacao::where('evento', $evento['id'])
              ->where('participante', $userId)->get();
       
       // dd($consulta[0]->id);


      // dd($evento['descricao']);
      // dd($endereco);

       $descricao = $evento['descricao'];

       //dd($descricao);
			//2019-09-09 00:00:00

			// Inicio

	   	  $iano = substr($evento['inicio'], 0, 4);
		  	$imes = substr($evento['inicio'], 5, 2);
		  	$idia = substr($evento['inicio'], 8, 2);

		  	$ih = substr($evento['inicio'], 11, 2);
			  $im = substr($evento['inicio'], 14, 2);

	    	// Termino

		  	$tano = substr($evento['termino'], 0, 4);
	  		$tmes = substr($evento['termino'], 5, 2);
			  $tdia = substr($evento['termino'], 8, 2);

		  	$th = substr($evento['termino'], 11, 2);
		   	$tm = substr($evento['termino'], 14, 2);


        $participantes = Participacao::where('evento', $evento['id'])->count();

       // dd($participantes);


        return view('Evento.evento')
        ->with('evento', $evento)
        ->with('endereco', $endereco)
        ->with('mesExtenco', $mesExtenco)
        ->with('iano', $iano)
        ->with('imes', $imes)
        ->with('idia', $idia)
        ->with('ih', $ih)
        ->with('_criador', $evento['id_usuario'] == $userId ? true : false)
        ->with('consulta', empty($consulta[0]->id) ? true : false )
        ->with('consultaId', empty($consulta[0]->id) ? 0 : $consulta[0]->id)

        ->with('participantes', $participantes)

        ->with('descricao', $descricao)

        ->with('tano', $tano)
        ->with('tmes', $tmes)
        ->with('tdia', $tdia)
        ->with('th', $th);
    }


    public function pesquisar(Request $req){
       // dd($req);

        $eventos = Eventos::where('titulo', 'like', "%$req->pesquisa%")->get();

        //dd($eventos);

        $pesquisa = $req->pesquisa;

        if(!isset($pesquisa))
              $pesquisa = '';

        return view('Evento.pesquisa')
               ->with('eventos', $eventos)
               ->with('pesquisa', $pesquisa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id, Request $request)
    {
        $mesExtenco = [
            '0'  => "",
            '01' => "Janeiro",
            '02' => "Fevereiro",
            '03' => "Março",
            '04' => "Abril",
            '05' => "Maio",
            '06' => 'Junho',
            '07' => 'Julho',
            '08' => 'Agosto',
            '09' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro',
        ];


        $evento = Eventos::find($id);
        $endereco = Endereco::find($evento['endereco']);
        
        if(Auth::user()->id != $evento['id_usuario']){
            return redirect()->route('home');
        }

        // dd($evento['descricao']);
        // dd($endereco);

        $descricao = $evento['descricao'];

        //dd($descricao);
        //2019-09-09 00:00:00

        // Inicio

        $iano = substr($evento['inicio'], 0, 4);
        $imes = substr($evento['inicio'], 5, 2);
        $idia = substr($evento['inicio'], 8, 2);

        $ih = substr($evento['inicio'], 11, 2);
        $im = substr($evento['inicio'], 14, 2);

        // Termino

        $tano = substr($evento['termino'], 0, 4);
        $tmes = substr($evento['termino'], 5, 2);
        $tdia = substr($evento['termino'], 8, 2);

        $th = substr($evento['termino'], 11, 2);
        $tm = substr($evento['termino'], 14, 2);


        return view('Evento.edit')
            ->with('evento', $evento)
            ->with('endereco', $endereco)
            ->with('mesExtenco', $mesExtenco)
            ->with('iano', $iano)
            ->with('imes', $imes)
            ->with('idia', $idia)
            ->with('ih', $ih)

            ->with('dataInit', "$iano-$imes-$idia")
            ->with('horaInit', "$ih:$im:00")
            ->with('dataTerm', "$tano-$tmes-$tdia")
            ->with('horaTerm', "$th:$tm:00")

            ->with('descricao', $descricao)
            ->with('estados', Estados::getEstados())
            ->with('tano', $tano)
            ->with('tmes', $tmes)
            ->with('tdia', $tdia)
            ->with('th', $th);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dateTime = new DateTime('now', new \DateTimeZone('America/Sao_Paulo'));

        if($request->hasFile('img')){
            $data = $dateTime->format('d-m-y');

            $extencao = $request->img->extension();

            $ale = Str::random(4);

            $nameFile = "{$data}{$ale}{$request->nome}.$extencao";

            $valueImg = "uploads/eventos/{$nameFile}";

            if(!$request->img->storeAs('/uploads/eventos', $nameFile)){

                return view('Evento.criarEvento')
                    ->with('nome', $request->nome)
                    ->with('dataInit', $request->dataInit)
                    ->with('horaInit', $request->horaInit)
                    ->with('dataTerm', $request->dataTerm)
                    ->with('horaTerm', $request->horaTerm)
                    ->with('estados', Estados::getEstados())
                    ->with('valueImg', $valueImg)
                    ->with('descricao', $request->descricao);


            }
        }

        if(isset($valueImg)){
            session([
                'valueImg' => $valueImg,
            ]);
        }else {
            $valueImg = session('valueImg');
        }

        if(!isset($nameFile)){
            $nameFile = substr($valueImg, 16, strlen($valueImg));
        }

        session()->forget('valueImg');

        /**


        Endereco::create([
            "cidade" => $request->cidade,
            "bairro" => $request->bairro,
            "estado" => $request->estado,
            "num" => 2,
            "rua" => $request->rua,

        ]);

        */




        $evento = Eventos::find($id);
        $endereco = Endereco::find($evento['endereco']);


        $endereco->cidade = $request->cidade;
        $endereco->bairro = $request->bairro;
        $endereco->estado = $request->estado;
        $endereco->num = 2;
        $endereco->rua = $request->rua;

        $endereco->save();

       // dd($endereco);


        $inicio = "$request->dataInit $request->horaInit";
        $termino = "$request->dataTerm $request->horaTerm";

        // $termino =

        if(!$nameFile){
            $nameFile = $evento['img'];
        }

        $evento->titulo = $request->titulo;
        $evento->descricao = $request->descricao;
        $evento->img = $nameFile;
        $evento->inicio = $inicio;
        $evento->termino = $termino;

        $evento->save();


        return redirect()->route('home.editar', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Eventos::find($id);

        $evento->delete();

        return redirect()->intended('home');
    }
}