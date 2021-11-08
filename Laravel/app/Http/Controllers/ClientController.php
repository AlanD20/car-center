<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Partner;
use App\Models\Service;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;

class ClientController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->get();
        $services = Service::latest()->get();
        $partners = Partner::latest()->get();
        return view('index', compact('teams', 'services', 'partners'));
    }
    public function contact(ContactFormRequest $req)
    {
        $req->sendEmail();
        return \redirect('/#contact')->with([
            'success' => "Message has been sent."
        ]);
        // return new ContactMail([
        //     'name' => 'aland',
        //     'email' => 'aland@test.com',
        //     'phone' => '123131',
        //     'message' => 'aland',
        // ]);
    }
}
