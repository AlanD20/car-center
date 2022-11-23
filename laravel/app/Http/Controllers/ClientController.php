<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Slide;
use App\Models\Partner;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Models\AboutSection;
use App\Http\Requests\ContactFormRequest;

class ClientController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->get();
        $services = Service::latest()->get();
        $partners = Partner::latest()->get();
        $about = AboutSection::first();
        $slides = Slide::latest()->get();
        return view('index', compact('teams', 'services', 'partners', 'about', 'slides'));
    }
    public function contact(ContactFormRequest $req)
    {
        $req->sendEmail();
        return \redirect()->to(app('url')->previous() . "#contact")->with([
            'sentSuccess' => __('index.admin.messages.mail.success')
        ]);
        // return new ContactMail([
        //     'name' => 'aland',
        //     'email' => 'aland@test.com',
        //     'phone' => '123131',
        //     'message' => 'aland',
        // ]);
    }
}
