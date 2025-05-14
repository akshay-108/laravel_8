<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userDetails = UserDetails::all();
        return view('userDetails.index', compact('userDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userDetails.create');
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'user_email' => 'required|email|unique:user_details,email',
            'user_mobile' => 'required|digits:10',
            'user_password' => 'required|min:6',
        ]);

        $userDetails = new UserDetails();
        $userDetails->first_name = $request->input('first_name');
        $userDetails->last_name = $request->input('last_name');
        $userDetails->email = $request->input('user_email');
        $userDetails->mobile = $request->input('user_mobile');
        $userDetails->password = bcrypt($request->input('user_password'));
        $userDetails->save();
        return redirect()->back()->with('status', 'User Details Added Successfully');
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
        $userDetails = UserDetails::find($id);
        return view('userDetails.edit', compact('userDetails'));
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
        $userDetails = UserDetails::find($id);
        $userDetails->first_name = $request->input('first_name');
        $userDetails->last_name = $request->input('last_name');
        $userDetails->email = $request->input('user_email');
        $userDetails->mobile = $request->input('user_mobile');
        $userDetails->save();
        return redirect()->back()->with('status', 'User Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userDetails = UserDetails::find($id);
        $userDetails->delete();
        return redirect()->back()->with('status', "Employee deleted successfully");
    }
}
