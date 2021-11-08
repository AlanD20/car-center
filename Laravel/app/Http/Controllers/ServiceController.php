<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

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
            'success' => 'Service added successfully'
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
            'success' => 'Service updated successfully'
        ]);
    }
    public function destroy(Service $service)
    {
        $service->delete();
        return \back()->with([
            'success' => "Service deleted successfully"
        ]);
    }
}
