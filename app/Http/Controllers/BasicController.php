<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
class BasicController extends Controller
{
    public function index()
    {
        return view("static.home");
    }

    public function about()
    {
        return view("static.about");
    }

    public function contacts()
    {
        return view("static.contacts");
    }

    public function submit(ContactsRequest $request)
    {
        $request->validate();
    }
}
