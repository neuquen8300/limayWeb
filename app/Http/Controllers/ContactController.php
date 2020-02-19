<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Rules\NoHtml;
class ContactController extends Controller
{
    public function Contact(){
        return view('contact');
    }

    public function contactSaveData(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', new NoHtml],
            'email' => ['required', 'email', new NoHtml],
            'user_message' => ['required', 'string', new NoHtml]
        ]);
        Contact::create($request->all());
        \Mail::send('email.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('user_message')
        ),
            function($message) use ($request)
            {
                $message->from('limayWeb@gmail.com');
                $message->to('dbouzo77@gmail.com', 'Admin')->subject('Nuevo mensaje en Limay Web');
            }
        );
        session()->flash('success', 'Gracias por escribirnos!');
        return redirect()->back()->with('status', 'Gracias por escribirnos!'); 

    }
}
