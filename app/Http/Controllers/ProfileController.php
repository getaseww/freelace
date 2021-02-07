<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{ 
    public function __construct(){
     $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $profiles = Profile::class;
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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

            'profession' => 'required',
            'skills' => 'required',
            'experience' => 'required',

            'about' => 'required',

        ]);

  

        $profile=new Profile;
        $profile->user_id =auth()->user()->id;
        $profile->profession= $request->input('profession');
        $profile->skills= $request->input('skills');
        $profile->experience= $request->input('experience');
        $profile->about= $request->input('about');

        $profile->save();
        return redirect('/profile');

   

        return redirect()->route('profile')

                        ->with('success','profile created successfully.');
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
    public function edit(Profile $profile  )
    {
        return view('profile.edit' ,compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Profile $profile)
    {
        $request->validate([

            'profession' => 'required',
            'skills' => 'required',
            'experience' => 'required',
            'about' => 'required',

        ]);

       $profile->update($request->all());

       return redirect()->route('profile')

                        ->with('success','profile updated successfully');
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
