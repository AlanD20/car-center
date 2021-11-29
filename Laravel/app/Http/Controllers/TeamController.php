<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('user')->latest()->paginate(7);
        return view('admin.teams.index', compact('teams'));
    }
    public function create()
    {

        return view('admin.teams.create');
    }
    public function store(StoreTeamRequest $req)
    {
        $req->storeRecord();
        return \back()->with([
            'success' => __('index.admin.messages.team.success.create')
        ]);
    }
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }
    public function update(UpdateTeamRequest $req, Team $team)
    {
        $req->updateRecord($team);
        return \back()->with([
            'team' => $team,
            'success' => __('index.admin.messages.team.success.update')
        ]);
    }
    public function destroy(Team $team)
    {
        if (file_exists($team->image)) {
            $real_path = str_replace('uploads/', '', $team->image);
            Storage::disk('public')->delete($real_path);
        }
        $team->delete();
        return \back()->with([
            'success' => __('index.admin.messages.team.success.delete')
        ]);
    }
}
