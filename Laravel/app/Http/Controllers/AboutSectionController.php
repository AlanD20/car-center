<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAboutSectionRequest;
use App\Models\AboutSection;

class AboutSectionController extends Controller
{
    public function index()
    {
        $about = AboutSection::first();
        return view('admin.about-section.edit', \compact('about'));
    }
    public function update(UpdateAboutSectionRequest $req)
    {
        $req->updateRecord();
        return \back()->with([
            'success' => __('index.admin.messages.about_section.success')
        ]);
    }
}
