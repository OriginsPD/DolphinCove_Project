<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest_details;
use App\Models\Program;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Booking.create')->with('Programs', Program::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'guest_name' => 'required|max:255',
            'program_id' => 'required',
        ],[
            'guest_name.required' => 'Guest Name is Required',
            'program_id.required' => 'Program is Required',
        ]);

        $id = Guest_details::where('name',$request->guest_name)->first('id');

        if($id == null){
            return redirect()->route('Booking.create')->withErrors(['guest_name' => 'Guest Name No Found']);
        }

        if ($request) {
            $save = new Booking;
            $save->guest_id = $id->id;
            $save->program_id = $request->program_id;
            $save->booked_date = date('Y-m-d');
            $save->save();
        }

        return redirect()->route('Booking.create')->with('success','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}