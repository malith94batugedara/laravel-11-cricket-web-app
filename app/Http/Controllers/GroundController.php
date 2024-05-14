<?php

namespace App\Http\Controllers;

use App\Models\Ground;
use Illuminate\Http\Request;

class GroundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grounds=Ground::all();
        return view('ground.index',compact('grounds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ground.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ground = new Ground;

        $ground->ground_name = $request->ground_name;
        $ground->ground_location = $request->ground_location;
        $ground->capacity = $request->capacity;
        $ground->number_of_gates = $request->num_of_gate;
        $ground->number_of_matches_played = $request->num_of_match_played;

        $ground->save();

        return redirect(route('ground.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function allGrounds(){
        $grounds = Ground::orderBy('number_of_matches_played', 'desc')->get();
        return view('ground.frontend.all',compact('grounds'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ground_id)
    {
        $ground = Ground::find($ground_id);
        return view('ground.edit',compact('ground'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ground_id)
    {
        $ground =Ground::find($ground_id);

        $ground->ground_name = $request->ground_name;
        $ground->ground_location = $request->ground_location;
        $ground->capacity = $request->capacity;
        $ground->number_of_gates = $request->num_of_gate;
        $ground->number_of_matches_played = $request->num_of_match_played;

        $ground->update();

        return redirect(route('ground.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ground=Ground::findOrFail($request->ground_delete_id);

        $ground->delete();

        return redirect(route('ground.index'));
    }
}
