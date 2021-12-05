<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function indexPost(ContactRequest $request)
    {
        $input = $request->validated();
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
