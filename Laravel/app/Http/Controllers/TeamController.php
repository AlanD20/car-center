<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

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
            'success' => 'Team member added successfully'
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
            'success' => 'Team member updated successfully'
        ]);
    }
    public function destroy(Team $team)
    {
        $team->delete();
        return \back()->with([
            'success' => "Team member deleted successfully"
        ]);
    }
}
