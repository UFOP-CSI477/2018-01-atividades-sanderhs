<?php

namespace App\Http\Controllers;
use App\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos= Aluno::orderBy('nome')->get();
        return view('alunos.index')->with('alunos',$alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunos= Aluno::orderBy('nome')->get();
        return view ('alunos.create')->with('alunos',$alunos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());
       
        $request->session()->flash('mensagem','Aluno inserido com sucesso!');
        return redirect('/alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('alunos.show')->with('aluno',$aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        $alunos= aluno::orderBy('nome')->get();
        return view('alunos.edit')->with('aluno',$aluno)->with('alunos',$alunos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $aluno->fill($request->all());
        $aluno->save();
        session()->flash('mensagem', 'Aluno atualizado com sucesso!');
        return redirect()->route('alunos.show',$aluno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        session()->flash('mensagem','Aluno excluido com sucesso');
        return redirect()->route('alunos.index');
    }
}
