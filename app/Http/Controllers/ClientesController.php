<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    private $clientes = [
        ['id' => 1, 'nome' => 'Ademir'],
        ['id' => 2, 'nome' => 'Bianca'],
        ['id' => 3, 'nome' => 'Claudio'],
        ['id' => 4, 'nome' => 'Douglas'],
        ['id' => 5, 'nome' => 'Elza'],
        // ['id' => 6, 'nome' => 'Fernando']
    ];

    public function __construct()
    {
        $clientes = session('clientes');

        if (!isset($clientes))
                session(['clientes' => $this->clientes]); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $clientes = session('clientes');

        $title  = 'Listagem de Clientes';

        return view('clientes.index')->with('clientes', $clientes)->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');

        //$id = count($clientes) + 1;
        $id = end($clientes)['id'] + 1;

        $nome = $request->nome;

        $dados= ['id' => $id, 'nome' => $nome];

        $clientes[] = $dados;

        session(['clientes' => $clientes]);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');

        //$cliente = $clientes[$id - 1];
        
        //linha de codigo ajustada
        $index = $this->getId($id, $clientes);
        
        //
        $cliente = $clientes[$index];

        return view('clientes.cliente', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clientes = session('clientes');

       // $cliente = $clientes[$id - 1];
        
        //linha de codigo ajustada
        $index = $this->getId($id, $clientes);
        
        //
        $cliente = $clientes[$index];

        return view('clientes.edit', compact(['cliente']));
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
        $nome = $request->nome;

        $clientes = session('clientes');

        $index = $this->getId($id, $clientes);

        $clientes [$index]['nome'] = $nome;

        session(['clientes' => $clientes]);

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //recupera todos os clientes dentro da nossa sessao
        $clientes = session('clientes');
        
        //Utiliza a funsao que criamos paara encontrar o elemento com o ID desejado
        $index = $this->getId($id, $clientes);
        
        // remove 1 elemento que possui o ID informado
        array_splice($clientes, $index, 1);
       
        // sonre escreve a varialvel clientes da nossa sessao
        session(['clientes' => $clientes]);

        return redirect()->route('clientes.index');
    }
    
    public function getId($id, $clientes)
    {
        //Variavel criada para receber somente as colunas do nosso array
        $ids = array_column($clientes, 'id');
        //Busca o index que queremos deletar dentro do nosso array
        $index = array_search($id, $ids);
      
        return $index;
    }
}
