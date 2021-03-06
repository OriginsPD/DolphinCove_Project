<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Guest_details;
use Database\Seeders\GuestSeeder;

class AdminController extends Controller
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
        $guest = Guest_details::join('companies', 'guest_details.company_id', '=', 'companies.id')
        ->join('payment_types', 'guest_details.payment_id', '=', 'payment_types.id')
        ->join('guest_types', 'guest_details.guest_type_id', '=', 'guest_types.id')
        ->join('hotels', 'companies.hotel_id', '=', 'hotels.id')
        ->orderBy('guest_details.id', 'desc')
        ->get();

        
    
        return view('admin.index', compact('guest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $guest = Guest_details::where('name',$name)
        ->join('bookings', 'guest_details.id', '=', 'bookings.guest_id')
        ->join('companies', 'guest_details.company_id', '=', 'companies.id')
        ->join('payment_types', 'guest_details.payment_id', '=', 'payment_types.id')
        ->join('guest_types', 'guest_details.guest_type_id', '=', 'guest_types.id')
        ->join('hotels', 'companies.hotel_id', '=', 'hotels.id')
        // ->orderBy('guest_details.id', 'desc')
        ->first();
        dd($guest);
        return view('admin.show', compact($guest));
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