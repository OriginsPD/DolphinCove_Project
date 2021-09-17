<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Guest_details;

class GuestController extends Controller
{
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
        return view('Guest.create')->with('hotels', Hotel::all())
        ->with('companies', Company::orderBy('id', 'desc')->get());
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
            'company_id' => 'required'
        ]);

     

        if ($request) {
            $save = new Guest_details;
            $save->name = $request->guest_name;
            if($request->company_id != 'Walk-In')
            {
                $save->company_id = $request->company_id;
                $save->payment_id = 2;
                $save->guest_type_id = 1;

                Company::find($request->company_id)->increment('guest-count');

                $save->save();

                return redirect()->route('Guest.create')->with('success', 'success');
            }
            $save->company_id = 999;
            $save->guest_type_id = 2;
            $save->save();
        }

        return redirect()->route('Guest.create')->with('success', 'success');
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
