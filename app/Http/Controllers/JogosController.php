<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\VarDumper\VarDumper;

class JogosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //views 
        return view('jogos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $cadastro)
    {
        //

        return view('jogos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

      

        $request->validate([
            'NomeJogo' => 'required|string|max:255',
            'sinopse' => 'required|string',
        ]); 

        $jogo = new Jogo; 
        $jogo->id_user = $request->id_user;  
        $jogo->nome_jogo = $request->NomeJogo;
        $jogo->descrição = $request->sinopse;
        $jogo->URL_jogo = $request->sitejogo;
        $jogo->URL_video = $request->videojogo;

        $jogo->save();
        
        return redirect('adicionar')->with('status', 'Jogo Cadastrado ;)');
        
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
