<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('employees.create');
    }

    public function store()
    {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'email' => ['required', 'email', 'unique:companies'],
            'phone_number' => ['required', 'unique:employees']
        ]);

        auth()->user();
        \App\employees::create($data);
    }
}
