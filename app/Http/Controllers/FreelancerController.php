<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;

class FreelancerController extends Controller
{
    public function index(){
        
        $profiles = Profile::latest()->paginate(7);
        
        return view('profile.showprofiles',compact('profiles'))

           ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
