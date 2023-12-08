<?php

namespace App\Http\Controllers\Front\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.pages.contact.index');
    }
}
