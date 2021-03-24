<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreMessage;
use App\Mail\Contact;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessageController
{
    public function index()
    {
        $messages = Message::all();

        return view('contacts.index', compact('messages'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(StoreMessage $request)
    {
        $validated = $request->validated();
        $message = new Message();
        $message->name = $validated['name'];
        $message->subject = $validated['subject'];
        $message->email = $validated['email'];
        $message->message = $validated['message'];

        $message->save();

        $request->session()->flash('status', 'Thank you for sending us a message. We will reach out to you soon.');

        /* Just plain text email */
        /*Mail::raw('It works!', function($message){
           $message->to(request('email'))->subject('Hello World!');
        });*/

        Mail::to(request('email'))
            ->send(new Contact());

        return redirect('/contacts');
    }
}
