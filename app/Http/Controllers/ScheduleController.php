<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules=Schedule::all();
        return view('schedule.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::all();
        return view('schedule.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schedule = new Schedule;

        $schedule->sch_name = $request->schedule_name;
        $schedule->time_period = $request->time;
        $schedule->country = $request->country;
        $schedule->num_of_staff = $request->num_of_staff;
        $schedule->depart_date = $request->deprt_date;
        $schedule->arrive_date = $request->arrive_date;

        $schedule->save();

        return redirect(route('schedule.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function allSchedules(){
        $schedules = Schedule::orderBy('num_of_staff', 'desc')->get();
        return view('schedule.frontend.all',compact('schedules'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($schedule_id)
    {
        $schedule = Schedule::find($schedule_id);
        $countries=Country::all();
        return view('schedule.edit',compact('schedule','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $schedule_id)
    {
        $schedule =Schedule::find($schedule_id);

        $schedule->sch_name = $request->schedule_name;
        $schedule->time_period = $request->time;
        $schedule->country = $request->country;
        $schedule->num_of_staff = $request->num_of_staff;
        $schedule->depart_date = $request->deprt_date;
        $schedule->arrive_date = $request->arrive_date;

        $schedule->update();

        return redirect(route('schedule.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $schedule=Schedule::findOrFail($request->schedule_delete_id);

        $schedule->delete();

        return redirect(route('schedule.index'));
    }
}
