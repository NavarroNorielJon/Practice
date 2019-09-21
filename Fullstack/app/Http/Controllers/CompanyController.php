<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('companies.create');
    }

    public function store()
    {
        $data = request()->validate([
            'company_name' => ['required', 'unique:companies'],
            'email' => ['required', 'email', 'unique:companies'],
            'logo' => 'required'
        ]);

        $imagePath = request('logo')->store('','public');

        auth()->user();
        \App\companies::create([
            'company_name' => $data['company_name'],
            'email' => $data['email'],
            'logo' => $imagePath
        ]);

        return redirect('home');
    }
}
