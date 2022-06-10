<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Immunization;

class ImmunizationController extends Controller
{
    public function index()
    {
        $immunizations = Immunization::all();
        return view('index',compact('immunizations'));
    }

    public function store(Request $request)
    {

        $immunization = new Immunization;

        $immunization->first_name = $request->first_name;
        $immunization->last_name = $request->last_name;
        $immunization->dob = $request->dob;
        $immunization->vaccine = $request->vaccine;
        $immunization->save();

        return redirect('/')->with('status', 'Record success');
    }

    public function create()
    {

        return view('create');
    }

    public function edit($id)
    {
        $immunization = Immunization::findOrFail($id);
        return view('edit',compact('immunization'));
    }

    public function update(Request $request,$id)
    {
        $immunization = Immunization::findOrFail($id);

        $immunization->first_name = $request->first_name;
        $immunization->last_name = $request->last_name;
        $immunization->dob = $request->dob;
        $immunization->vaccine = $request->vaccine;
        $immunization->update();

        return redirect('/')->with('status', 'Record update success');
    }

    public function report()
    {
        $immunizations = Immunization::all();

        return view('report',compact('immunizations'));
    }
}
