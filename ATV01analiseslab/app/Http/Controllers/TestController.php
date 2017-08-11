<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Procedure;
use App\User;
use Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listarexamesusers()
    {
      $testes = Test::orderBy('id')->get();
      $total = Test::orderBy('id')->get()->count();

      if(Auth::user()->type == 1) {
        return view('areaAdmin.lstexames')->with('testes', $testes)->with('total', $total);
      } else {
        return view('areaOperador.lstexames')->with('testes', $testes)->with('total', $total);
      }


    }

    public function create()
    {
        $procedimentos = Procedure::orderBy('name')->get();
        return view('areaCliente.addtest')->with('procedimentos', $procedimentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Test::create($request->all());
      return redirect('/areacliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function listarexames()
     {
       $testes = Test::where('user_id', '=', Auth::user()->id)->orderBy('date','desc')->get();
       $total = Test::where('user_id', '=', Auth::user()->id)->count();

       $valortotal = Test::join('procedures', 'tests.procedure_id', '=', 'procedures.id')
       ->where('tests.user_id', '=', Auth::user()->id)->sum('procedures.price');

       return view('areaCliente.listtest')->with('testes', $testes)->with('total', $total)->with('valortotal', $valortotal);
     }

     public function listaexcluirexames()
     {
       $testes = Test::where('user_id', '=', Auth::user()->id)->get();
       return view('areaCliente.dltlstexame')->with('testes', $testes);
     }

     public function listaeditarexames()
     {
       $testes = Test::where('user_id', '=', Auth::user()->id)->get();
       return view('areaCliente.edtlstexame')->with('testes', $testes);
     }

    public function show(Test $test)
    {
        return view('areaCliente.showexame')->with('teste', $test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        $procedimentos = Procedure::orderBy('name')->get();
        return view('areaCliente.edit')->with('teste', $test)->with('procedimentos', $procedimentos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
      $test->user_id = $request->user_id;
      $test->procedure_id = $request->procedure_id;
      $test->date = $request->date;
      $test->save();
      return redirect('/areacliente/listaexames');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return redirect('/areacliente/listaexames');
    }
}
