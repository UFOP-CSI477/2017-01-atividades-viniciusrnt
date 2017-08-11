<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use App\Test;
use Auth;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $procedimentos = Procedure::orderBy('name')->get();
      return view('areaGeral.relatorio')->with('procedimentos', $procedimentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('areaAdmin.addprocedure');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Procedure::create($request->all());
        return redirect('/areaadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedimento)
    {
        return view('areaAdmin.showprocedure')->with('procedimento', $procedimento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editList()
    {
      $procedimentos = Procedure::orderBy('name')->get();
      if(Auth::user()->type == 1) {
        return view('areaAdmin.edtlstprocedure')->with('procedimentos', $procedimentos);
      } else {
        return view('areaOperador.edtlstprocedure')->with('procedimentos', $procedimentos);
      }
    }

    public function edit(Procedure $procedimento)
    {
      if(Auth::user()->type == 1) {
        return view('areaAdmin.edit')->with('procedimento', $procedimento);
      } else {
        return view('areaOperador.edit')->with('procedimento', $procedimento);
      }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedimento)
    {
        $procedimento->name = $request->name;
        $procedimento->price = $request->price;
        $procedimento->user_id = $request->user_id;
        $procedimento->save();
        return redirect('/areaadmin/editlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function deleteList()
     {

       $procedimentos = Procedure::orderBy('name')->get();
       $testes = Test::orderBy('procedure_id')->get();

       //$procedimentos = Procedure::join('tests', 'tests.procedure_id', '=', 'procedures.id')
       //->where ('procedures.id', '<>', 'tests.procedure_id')->get();

       return view('areaAdmin.dltlstprocedure')->with('procedimentos', $procedimentos);//->with('testes', $testes);
     }

    public function destroy(Procedure $procedimento)
    {
        $procedimento->delete();
        return redirect('/areaadmin/deletelist');
    }


}
