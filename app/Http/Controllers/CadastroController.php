<?php

namespace App\Http\Controllers;

use App\Cadastro;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastro = Cadastro::all();

        return view('main', compact('cadastro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadastro = new Cadastro();
        return view('form', [
            'cadastro' => $cadastro->all()
        ]);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = new Cadastro();
        $cadastro->nome = $request->nome;
        $cadastro->email = $request->email;
        $cadastro->telefone = $request->telefone;
        $cadastro->dataNascimento = $request->dataNascimento;
        $cadastro->cep = $request->cep;
        $cadastro->estado = $request->estado;
        $cadastro->cidade = $request->cidade;
        $cadastro->bairro = $request->bairro;
        $cadastro->rua = $request->rua;
        $cadastro->numero = $request->numero;

        $cadastro->save();

        // Alert::success('Cadastrado', 'Cadastrado com sucesso');

        return redirect()->route('cadastro.show')->with('sucess', 'Produto cadastrado com sucesso!')
;    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */

    public function show(Cadastro $cadastro)
    {
        $cadastro = new Cadastro();
        return view('listcadastro', [
            'cadastro' => $cadastro->all()
        ]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadastro $cadastro, $id)
    {
        $cadastro = Cadastro::where('id', '=', $id)->first();
        return view('editcadastro', [
            'Cadastro' =>$cadastro
        ]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadastro $cadastro)
    {
        $id = $request->id;
        $nome = $request->nome;
        $email = $request->email;
        $telefone = $request->telefone;
        $dataNascimento = $request->dataNascimento;
        $cep = $request->cep;
        $estado = $request->estado;
        $cidade = $request->cidade;
        $bairro = $request->bairro;
        $rua = $request->rua;
        $numero = $request->numero;

        Cadastro::find($id)->update([
            'id' => $id,
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'dataNascimento' => $dataNascimento,
            'cep' => $cep,
            'estado' => $estado,
            'cidade' => $cidade,
            'bairro' => $bairro,
            'rua' => $rua,
            'numero' => $numero

        ]);
        return redirect()->route('cadastro.show');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadastro $cadastro, $id)
    {
        if (!$cadastro= Cadastro::find($id)) 
        return redirect()->back;
               $cadastro->delete();

            // Redireciona, informando que deu tudo certo!
            return redirect()->route('cadastro.show')->with('success', 'Deletado com sucesso!');
        }
     
        // Em caso de falhas redireciona o usuário de vola e informa que não foi possível deletar
      
    public function menu()
    {
        return view('main');
    }
}
