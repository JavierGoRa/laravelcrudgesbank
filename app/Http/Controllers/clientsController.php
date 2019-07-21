<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


use App\Client;
use App\Account;
use App\Transaction;
use App\Http\Requests\clientRequest;
use App\Http\Requests\UpdateClientRequest;

use PDF;
use App\Mail\WelcomeClient;

class clientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->autorizeRoles(["admin", "user"]);
        $clientes = Client::search($request->search)->paginate(5);
        return view('clients.indexClients', compact('clientes'));
        //$clients = Client::paginate(5);
        //return view('clients.indexClients', ['clientes'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->autorizeRoles(["admin"]);
        return view('clients.createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(clientRequest $request)
    {
        $request->user()->autorizeRoles(["admin"]);
        $cliente = new client($request->all());

        var_dump($cliente->nombre);

        $pdf = PDF::loadView('pdf', $cliente);

        return $pdf->download('Bienvenido a Gesbank.pdf');

        $cliente->save();

        flash('cliente creado correctamente')->success();

        Mail::to("javigora97@gmail.com", "Javier")
            ->send(new WelcomeClient($cliente));

        return redirect()->route('clients.index');

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
        $cliente = Client::find($id);
        return view('clients.showClient', compact('cliente'));
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
        $cliente = Client::find($id);
        return view('clients.editClient', compact('cliente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateClientRequest $request, $id)
    {
        $request->user()->autorizeRoles(["admin", "user"]);

        $cliente = Client::find($id);

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->ciudad = $request->ciudad;
        $cliente->dni = $request->dni;
        $cliente->email = $request->email;

        $cliente->save();

        flash('Cliente actualizado Correctamente')->success();

        return redirect()->route('clients.index');
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

        $cliente = Client::find($id);

        //$cuentas = $cliente->accounts;

        /* var_dump($cliente);

        exit();
        if ($cuentas->count() > 0) {
            flash('Cliente con cuentas asociadas. No se puede eliminar')->success();
        } else { */
            $cliente->delete();
            flash('Cliente eliminado correctamente')->success();
        /* } */

        return redirect()->route('clients.index');

    }

    public function generarPdf(){

        $clientes = Client::all();

        $pdf = PDF::loadView('pdfClientes', compact('clientes'));

        return $pdf->download('Listado de clientes.pdf');

        return view('clients.index', compact('cliente'));
        
    }
}
