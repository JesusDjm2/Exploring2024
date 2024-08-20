<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\ContactoMailable;
use Exception;
use Http;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getMail(Request $request)
    {
        if (!empty($request->input('my_name')) || (time() - $request->input('form_time')) < 5) {
            return back()->with('error', 'No se pudo enviar el formulario. Intente nuevamente.');
        }

        $datos = $request->all();

        Mail::send("emails.tours", $datos, function ($message) use ($datos) {
            $message->from($datos['email'], $datos['nombre'])
                ->to('exploringperutours1@gmail.com', 'DJM2')
                ->subject('Envio de formulario desde la página web.');
        });

        session()->flash('status', 'Mensaje enviado exitosamente!');
        return back();
    }
    public function getMailEn()
    {
        $datos = request()->all();
        Mail::send("emails.contacto", $datos, function ($message) use ($datos) {
            $message->from($datos['email'], $datos['nombre'])
                ->to('exploringperutours1@gmail.com', 'DJM2')
                ->subject('Envio de formulario desde la página web.');
        });
        session()->flash('status', 'Message sent successfully!');
        return back();
    }
    public function getMailIndex(Request $request) 
    {
        if (!empty($request->input('my_name')) || (time() - $request->input('form_time')) < 5) {
            return back()->with('error', 'No se pudo enviar el formulario. Intente nuevamente.');
        }
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'adults' => $request->adults,
            'tipo' => $request->tipo,
            'message' => $request->message
        ];

        Mail::to('exploringperutours1@gmail.com')->send(new ContactoMailable($data));

        return redirect()->back()->with('mail_sent', true);
    }
}
