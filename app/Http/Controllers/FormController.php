<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    //

    public function store(Request $request){
        //dd($request->all());

        $this->validate($request, [
            'nombre' => 'required|max:245',
            'apellidos' => 'required|max:245',
            'email' => 'required|email|max:245',
            'tel' => 'required|max:15',
            'empresa' => 'required|max:245',
            'asunto' => 'required|max:245',
            'mensaje' => 'required|max:255',
        ]);


        $data = [
            'nombre' => $request->get('nombre'),
            'apellidos' => $request->get('apellidos'),
            'email' => $request->get('email'),
            'tel' => $request->get('tel'),
            'empresa' => $request->get('empresa'),
            'asunto' => $request->get('asunto'),
            'mensaje' => $request->get('mensaje'),

        ];

        //dd($data);


        try {

            $contacto = Contacto::create($data);

            //dd('afueraa');
            if ($contacto) {
                //dd($contacto);


                Mail::send('store.partials.notifi-email', [
                    'nombre' => $request->get('nombre'),
                    'apellidos' => $request->get('apellidos'),
                    'email' => $request->get('email'),
                    'tel' => $request->get('tel'),
                    'empresa' => $request->get('empresa'),
                    'asunto' => $request->get('asunto'),
                    'mensaje' => $request->get('mensaje'),
                ], function ($mail) use ($request) {
                    //dd($request);
                    $tituloAsunto = $request->get('asunto') . ' - ' . $request->get('empresa') . ' - ' . $request->get('nombre');
                    $mail->from('info@fermaplastic.com', 'FERMAPLASTIC.COM');

                    $mail->to('info@fermaplastic.com')->subject("Formulario de contacto " . $tituloAsunto);
                });


                /*** email al cliente***/
//                Mail::send('store.partials.notifi-email-user', [
//                    'nombre' => $request->get('nombre'),
//                    'mensaje' => $request->get('mensaje'),
//                ], function ($mail) use ($request) {
//                    $mail->from('noreplay@plastifer.cat', 'PLASTIFER.CAT');
//
//                    $mail->to($request->$request->get('email'))->subject("Formulario de contacto " . $request->get('nombre'));
//                });

                $message = 'Formulario enviado correctamente';
                // dd($message);
            } else {
                $message = "Formulario no se ha podido enviar.";
            }
            //dd($message);
            return redirect()->back()->with('message', $message);
            //return "test";


        } catch (\Exception $e) {
//            return redirect()->back()->with('error', $e);
            //dd($e);
            //return redirect()->back()->with('error', 'Ha habido un error, intentalo de nuevo'. $e);
            return redirect()->back()->with('error', 'Ha habido un error, intentalo de nuevo');

        } catch (\Illuminate\Http\Exceptions\PostTooLargeException $e) {
            return redirect()->back()->with('error', 'Archivo mesa demaciado!');
        }


    }
}
