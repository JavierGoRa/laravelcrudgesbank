<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Account;
use App\Transaction;
use App\Http\Requests\transactionRequest;

class transactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $request->user()->autorizeRoles(["admin", "user"]);
        $cuenta = Account::find($id);
        $movimientos = Transaction::where('account_id', 'like', $id)->paginate(5);
        //$cliente = $cuenta->client;
        
        return view('transactions.indexTransactions', compact('movimientos', 'cuenta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $request->user()->autorizeRoles(["admin"]);
        $cuenta = Account::find($id);
        $cliente = $cuenta->cliente;
        return view('transactions.createTransactions', compact('cuenta', 'cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->autorizeRoles('admin');

        $cuenta = Account::find($request->account_id);
        $movimiento = $cuenta->movimientos;
        $ultimoMovimiento = $movimiento->last();

        $movimiento = new transaction($request->all());

        $movimiento->numMovimiento = $ultimoMovimiento->numMovimiento +1;
        if ($request->tipo == "I") {
            $movimiento->saldo = $request->cantidad + $ultimoMovimiento->saldo;
        } else {
            $movimiento->saldo = $ultimoMovimiento->saldo - $request->cantidad;
        }

        $cuenta->saldo = $movimiento->saldo;
        $cuenta->save();
        $movimiento->save();

        flash('Movimiento Añadido Correctamente')->success();

        return redirect()->route('transactions.index', $cuenta->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $request->user()->autorizeRoles(["admin", "user"]);
        $movimiento = Transaction::find($id);
        return view('transactions.showTransaction', compact('movimiento'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
