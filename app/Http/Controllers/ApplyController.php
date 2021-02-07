<?php

namespace App\Http\Controllers;

use App\Apply;
use App\Post;
use Illuminate\Http\Request;

class ApplyController extends Controller
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
    {
        $applies = Apply::latest()->paginate(5);

         return view('apply.index',compact('applies'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apply.create');
        
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

            'duration' => 'required',
            'bid' => 'required',

            

        ]);
        $apply=new Apply;
        $apply->user_id =auth()->user()->id;
        $apply->post_id = auth()->user()->id;
        $apply->bid= $request->input('bid');
        $apply->duration= $request->input('duration');
        $apply->portfolio= $request->input('portfolio');
        

        $apply->save();
        return redirect('/');

        

   

        return redirect()->route('posts.index')

                        ->with('success','application submitted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
