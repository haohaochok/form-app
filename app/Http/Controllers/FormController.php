<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm(){
        return view('form');
    }

    public function processForm(Request $request)
    {
        // Handle form submission logic here
        // $request->input('fieldname') can be used to get form data
    }
}
