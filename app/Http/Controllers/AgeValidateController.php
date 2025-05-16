<?php

namespace App\Http\Controllers;

use App\Models\AgeValidate;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AgeValidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = AgeValidate::all();
        return view('ageValidation.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ageValidation.create');
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:age_validates,email',
            'mobile' => 'required|digits:10',
            'age' => 'required|integer|min:18',
        ]);

        $ageValidate = new AgeValidate();
        $ageValidate->name = $request->input('name');
        $ageValidate->email = $request->input('email');
        $ageValidate->number = $request->input('mobile');
        $ageValidate->age = $request->input('age');
        $ageValidate->save();

        return redirect()->back()->with('status', 'Customer added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgeValidate  $ageValidate
     * @return \Illuminate\Http\Response
     */
    public function show(AgeValidate $ageValidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgeValidate  $ageValidate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = AgeValidate::find($id);
        return view('ageValidation.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgeValidate  $ageValidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = AgeValidate::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->number = $request->input('mobile');
        $customer->age = $request->input('age');
        $customer->save();

        return redirect()->back()->with('status', 'Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgeValidate  $ageValidate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = AgeValidate::find($id);
        $customer->delete();
        return redirect()->back()->with('status', "Employee deleted successfully");
    }
}
