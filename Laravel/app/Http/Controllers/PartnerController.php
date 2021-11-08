<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;

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
            'success' => 'Partner added successfully'
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
            'success' => 'Partner updated successfully'
        ]);
    }
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return \back()->with([
            'success' => "Partner deleted successfully"
        ]);
    }
}
