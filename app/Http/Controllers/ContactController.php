<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailContactRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function form()
    {
        $defaultReportMessage = base64_decode($this->request->get('mensagem'));

        return view('contato', compact('defaultReportMessage'));
    }

    public function sendMail(SendMailContactRequest $request)
    {
        $formData = $request->all();

        Mail::to(env('DEFAULT_EMAIL_DESTINATION_CONTACT'))->send(new Contact($formData));

        session()->flash('success', 'Sua mensagem foi enviada com sucesso e em breve será pelo nossos time!');

        return redirect()->back();
    }
}
