<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact-form.create');
    }

    public function store(\App\Http\Requests\ContactForm\Store $request)
    {
        ContactForm::create($request->validated());

        return redirect()->back()->withSuccess('Pesan telah diterima dan menunggu tindak lanjut.');
    }
}
