<?php

namespace App\Http\Controllers;

use App\Mail\Contactenos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CitasEnlinea;
use App\Mail\Sugerencias;
use App\Mail\TrabajaConNosotros;

class FormulariosController extends Controller
{
    public function contactenos()
    {
        return view('formularios.contactenos');
    }

    public function citas()
    {
        return view('formularios.citasEnlinea');
    }

    public function sugerencias()
    {
        return view('formularios.Sugerencias');
    }

    public function trabajaConNosotros()
    {
        return view('formularios.trabajaConNosotros');
    }

    public function enviarContactenos(Request $request)
    {
        $contactenos = new Contactenos($request->all());
        $contactenos->replyTo($request->input('email'));
        $sedes = $request->input('sedes');
        Mail::to($sedes)->send($contactenos);
        return redirect()->back()->with('success', 'ok');
    }

    public function enviarCitas(Request $request)
    {
        $citas = new CitasEnlinea($request->all());
        $citas->replyTo($request->input('email'));
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'cedula' => 'required|string',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'email' => 'required|email',
            'sedes' => 'required|string',
            'fena' => 'required|date',
            'entidad' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        // Crear una instancia del modelo CitasEnlinea con los datos del formulario
        $citas = new CitasEnlinea($request->all());
        // dd($citas);
        // Configurar la dirección de correo para responder al correo electrónico del usuario
        $citas->replyTo($request->input('email'));

        // Obtener la sede seleccionada del formulario

        $sedeCorreo = $request->input('sedes');
        // dd($sedeCorreo);
        try {
            // Enviar el correo a la sede seleccionada

            Mail::to($sedeCorreo)->send($citas);

            // Redirigir con mensaje de éxito
            return redirect()->route('citas.home')->with('success', 'ok');
        } catch (\Exception $e) {
            dd("error" . $e);
            // Manejar errores de envío de correo (opcional)
            return redirect()->back()->with('error', 'Hubo un problema al enviar el correo. Por favor, intenta nuevamente.');
        }
    }


    public function enviarSugerencias(Request $request)
    {
        $sugerencias = new Sugerencias($request->all());
        $sedes = $request->input('sedes');
        Mail::to($sedes)->send($sugerencias);
        return redirect()->route('sugerir.home')->with('success', 'ok');
    }

    public function enviarTrabajaConNosotros(Request $request)
    {
        $trabaja = new TrabajaConNosotros($request->all());
        $sedes = $request->input('sedes');
        Mail::to($sedes)->send($trabaja);
        return redirect()->route('trabajar.home')->with('success', 'ok');
    }
}
