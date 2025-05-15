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
        //
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
    public function edit(AgeValidate $ageValidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgeValidate  $ageValidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgeValidate $ageValidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgeValidate  $ageValidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgeValidate $ageValidate)
    {
        //
    }
}
