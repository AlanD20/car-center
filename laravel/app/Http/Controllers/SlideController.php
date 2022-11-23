<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\UpdateSlideRequest;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::get();
        return view('admin.slides.index', compact('slides'));
    }
    public function create()
    {
        return view('admin.slides.create');
    }
    public function store(StoreSlideRequest $req)
    {
        $req->storeRecord();
        return \back()->with([
            'success' => __('index.admin.messages.slide.success.create')
        ]);
    }
    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));
    }
    public function update(UpdateSlideRequest $req, Slide $slide)
    {
        $req->updateRecord($slide);
        return \back()->with([
            'slide' => $slide,
            'success' => __('index.admin.messages.slide.success.update')
        ]);
    }
    public function destroy(Slide $slide)
    {
        if (file_exists($slide->file)) {
            $real_path = str_replace('uploads/', '', $slide->file);
            Storage::disk('public')->delete($real_path);
        }
        $slide->delete();
        return \back()->with([
            'success' => __('index.admin.messages.slide.success.delete')
        ]);
    }
}
