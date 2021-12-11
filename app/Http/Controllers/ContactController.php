<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function indexPost(ContactRequest $request)
    {
        $input = $request->validated();
        Mail::to($input['email'])->send(new ContactMail($input));
        return redirect()->route('contact.done')
               ->with(['input' => $input]);
    }

    public function done()
    {
        $input = session('input');
        if(is_null($input)) {
            return redirect()->route('home.index');
        }
        return view('contact.done', ['input' => $input]);
    }
}
