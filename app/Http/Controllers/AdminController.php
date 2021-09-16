<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Hotel;
use App\Models\Program;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function hotel(){
        
        return view('create.add-hotel')->with('hotels',Hotel::orderBy('id', 'desc')->get());
    }

    public function addHotel(Request $request){
        
        $request->validate([
            'hotel_name' => 'required|max:255|unique:hotels',
        ]);

        if ($request) {
            $save = new Hotel;
            $save->hotel_name = $request->hotel_name;
            $save->save();

            return redirect()->back()->with('message','🤘🏾💀🤘🏾');
        }
        
    }
    
    public function company(){
        
        return view('create.add-company')->with('hotels', Hotel::all())
        ->with('companies', Company::orderBy('id', 'desc')->get());
    }

    public function addCompany(Request $request){

        $request->validate([
            'company_name' => 'required|max:255',
            'hotel_id' => 'required'
        ]);

        if ($request) {
            $save = new Company;
            $save->company_name = $request->company_name;
            $save->hotel_id = $request->hotel_id;
            $save->save();

            return redirect()->back()->with('message', '🤘🏾💀🤘🏾');
        }
    }
    
    public function program(){
        
        return view('create.add-program')->with('programs', Program::orderBy('id', 'desc')->get());
    }

    public function addProgram(Request $request){
        
        $request->validate([
            'program_name' => 'required|max:255|unique:programs',
            'cost' => 'required',
            'excursion_date' => 'required'
        ]);

        if ($request) {
            $save = new Program;
            $save->program_name = $request->program_name;
            $save->cost = $request->cost;
            $save->excursion_date = $request->excursion_date;
            $save->save();

            return redirect()->back()->with('message', '🤘🏾💀🤘🏾');
        }
    }
}