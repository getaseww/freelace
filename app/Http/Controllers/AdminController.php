<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class AdminController extends Controller
{
  // public function __construct(){
  //     $this->middleware('auth');
  // }
  
   public function index(){
       return view('admin.dashboard');
   }
   
   public function show(){
       return User::all();
   }


    
   

}
