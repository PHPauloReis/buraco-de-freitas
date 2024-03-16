<?php

namespace App\Http\Controllers;

use App\Models\Complaint;

class HomeController extends Controller
{
    private $complaint;

    public function __construct(Complaint $complaint) {
        $this->complaint = $complaint;
    }

    public function index()
    {
        $complaints = $this->complaint->orderBy('id', 'desc')->limit(6)->get();

        return view('home', compact('complaints'));
    }
}
