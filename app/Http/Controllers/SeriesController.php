<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $series=Serie::all();
        //$series=\DB::select("SELECT nome FROM series");
        $mensagemDeSucesso=$request->session()->get('mensagem.sucesso');
        return view('series.index',compact("series"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.insere');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome=$request->input('nome');
        $serie=new Serie();
        $serie->nome=$nome;
        $serie->save();
        return redirect('/series');
        // if(\DB::insert("INSERT INTO series (nome) VALUES (?)",[$nome])){
        //     echo 'funcionou';
        // }else{
        //     echo 'deu erro';
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serie $series)
    {
        return view('series.atualiza',compact("series"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Serie $series)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
        $request->session()->put('mensagem.sucesso','Serie removida com sucesso');
        return to_route('series.index');
    }
}
