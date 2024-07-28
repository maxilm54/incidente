<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Incidencia;
use Illuminate\Support\Str;

class IncidenciaController extends Controller
{
    //muestra datos en el formulario al que pertence el cliente
    public function showForm(Request $request)
    {
        $cliente = Cliente::find($request->query('id'));
        return view('incidente', ['cliente' => $cliente]);
    }

    //Logica para el envio del formulario
    public function submitForm(Request $request)
    {
        //validar datos
        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'incidente' => 'required|string',
            'email' => 'required|email'
        ]);
        //Procesar los datos
        $incidencia = Incidencia::create([
            'cliente_id' => $request->input('cliente_id'),
            'incidente' => $request->input('incidente'),
            'email' => $request->input('email'),
            'token' => Str::random(32),
        ]);

        return redirect('/')->with('success', 'Incidente Creado de Forma Correcta.');
    }
}
