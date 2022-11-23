<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with('user')->latest()->paginate(7);
        return view('admin.partners.index', compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create');
    }
    public function store(StorePartnerRequest $req)
    {
        $req->storeRecord();
        return \back()->with([
            'success' => __('index.admin.messages.partner.success.create')
        ]);
    }
    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }
    public function update(UpdatePartnerRequest $req, Partner $partner)
    {
        $req->updateRecord($partner);
        return \back()->with([
            'partner' => $partner,
            'success' => __('index.admin.messages.partner.success.update')
        ]);
    }
    public function destroy(Partner $partner)
    {
        if (file_exists($partner->image)) {
            $real_path = str_replace('uploads/', '', $partner->image);
            Storage::disk('public')->delete($real_path);
        }
        $partner->delete();
        return \back()->with([
            'success' => __('index.admin.messages.partner.success.delete')
        ]);
    }
}
