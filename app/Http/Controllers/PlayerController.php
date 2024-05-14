<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players=Player::all();
        return view('player.index',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('player.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $player = new Player;

        $player->player_name = $request->player_name;
        $player->cap_number = $request->cap_number;
        $player->debut_date = $request->player_debut_date;
        $player->matches_played = $request->player_match_played;
        $player->player_age = $request->player_age;

        $player->save();

        return redirect(route('player.index'));

    }

    public function allPlayers(){

        $players = Player::orderBy('debut_date', 'asc')->get();
        return view('player.frontend.all',compact('players'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($player_id)
    {
        $player = Player::find($player_id);
        return view('player.edit',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $player_id)
    {
        $player = Player::find($player_id);

        $player->player_name = $request->player_name;
        $player->cap_number = $request->cap_number;
        $player->debut_date = $request->player_debut_date;
        $player->matches_played = $request->player_match_played;
        $player->player_age = $request->player_age;

        $player->update();

        return redirect(route('player.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $player=Player::findOrFail($request->player_delete_id);

        $player->delete();

        return redirect(route('player.index'));
    }
}
