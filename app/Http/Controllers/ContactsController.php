<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactMessageRequest;



class ContactsController extends Controller
{
    public function message(ContactMessageRequest $request)
    {
        dd($request->all());
    }
}
