<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
