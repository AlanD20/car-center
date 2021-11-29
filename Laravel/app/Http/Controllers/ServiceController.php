<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('user')->latest()->paginate(7);
        return view('admin.services.index', compact('services'));
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(StoreServiceRequest $req)
    {
        $req->storeRecord();
        return \back()->with([
            'success' => __('index.admin.messages.service.success.create')
        ]);
    }
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }
    public function update(UpdateServiceRequest $req, Service $service)
    {
        $req->updateRecord($service);
        return \back()->with([
            'service' => $service,
            'success' => __('index.admin.messages.service.success.update')
        ]);
    }
    public function destroy(Service $service)
    {
        if (file_exists($service->image)) {
            $real_path = str_replace('uploads/', '', $service->image);
            Storage::disk('public')->delete($real_path);
        }
        $service->delete();
        return \back()->with([
            'success' => __('index.admin.messages.service.success.delete')
        ]);
    }
}
