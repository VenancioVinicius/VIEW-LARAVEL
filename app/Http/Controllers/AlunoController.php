<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $alunos = [[
        "id" => 1,
        "nome" => "Vinicius",
        "email" => "vinicius@email.com"
    ]];

    public function __construct(){

        $aux = session('alunos');

        if(!isset($aux)){
            session(['alunos' => $this->alunos]);
        }

    }
    

    public function index(){
        $alunos = session('alunos');

        $escola = " Paranaguá";

        return view('alunos.index', compact(['alunos', 'escola']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aux = session('alunos');

        $ids = array_column($aux, 'id');

        if(count($ids) > 0){
            $new_id = max($ids) + 1;
        }else {
            $new_id = 1;
        }

        $novo = [
            "id" => $new_id,
            "nome" => $request->nome,
            "email" => $request->email
        ];

        array_push($aux, $novo);
        session(['alunos' => $aux]);

        return redirect()->route('alunos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aux = session('alunos');

        $indice = array_search($id, array_column($aux, 'id'));

        $alunos = $aux[$indice];

        return view('alunos.show', compact('alunos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aux = session('alunos');

        $indice = array_search($id, array_column($aux, 'id'));

        $alunos = $aux[$indice];

        return view('alunos.edit', compact('alunos'));
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
        $alterado = [
            "id" => $id,
            "nome" => $request->nome,
            "email" => $request->email
        ];

        $aux = session('alunos');

        $indice = array_search($id, array_column($aux, 'id'));

        $aux[$indice] = $alterado;

        session(['alunos' => $aux]);

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aux = session('alunos');

        $indice = array_search($id, array_column($aux, 'id'));

        unset($aux[$indice]);

        session(['alunos' => $aux]);

        return redirect() -> route('alunos.index');
    }
}
