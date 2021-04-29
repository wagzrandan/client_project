<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index() {
        return view('registration');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'uname' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('registration.index')
                        ->with('success','Details added successfully.');
    }
}
