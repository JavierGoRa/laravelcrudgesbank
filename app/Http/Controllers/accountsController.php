<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Account;
use App\Http\Requests\accountRequest;
use App\Http\Requests\UpdateClientRequest;


class accountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->autorizeRoles(["admin", "user"]);
        $cuentas = Account::search($request->search)->paginate(5);
        return view('accounts.indexAccounts', compact('cuentas'));
        /* $cuentas = Account::paginate(5);
        return view('accounts.indexAccounts', ['cuentas'=>$cuentas]); */
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cliente = Client::all()->pluck('apellidos','id')->sort();
        $request->user()->autorizeRoles(["admin"]);
        return view('accounts.createAccounts', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->autorizeRoles(["admin"]);
        $cuenta = new Account($request->all());
        $cuenta->save();
        flash('Cuenta creada Correctamente')->success();

        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $request->user()->autorizeRoles(["admin"]);
        $cuenta = Account::find($id);
        return view('accounts.showAccount', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->user()->autorizeRoles(["admin"]);
        $cuenta = Account::find($id);

        flash('Cuenta editada Correctamente')->success();

        return view('accounts.editAccount', compact('cuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateAccountRequest $request, $id)
    {
        $request->user()->autorizeRoles(["admin", "user"]);

        $cuenta = Account::find($id);

        $cuenta->numCuenta = $request->numCuenta;
        $cuenta->client_id = $request->client_id;
        $cuenta->saldo = $request->saldo;

        $cuenta->save();

        flash('Cuenta actualizado Correctamente')->success();

        return redirect()->route('accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->user()->autorizeRoles(["admin", "user"]);

        $cuenta = Account::find($id);

        $cuenta->delete();
        flash('Cuenta eliminado correctamente')->success();

        return redirect()->route('accounts.index');
    }
}
