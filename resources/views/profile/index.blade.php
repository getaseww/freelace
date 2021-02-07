@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <img src="/images/pro2.jpeg" class="rounded-circle "  height="100" width="100">
                        </div>
                        <div class="col-11">
                            <div class="d-flex align-items-center pl-lg-5 pt-lg-4 justify-content-between">
                            <p ><strong class=" pt-lg-5 " >{{ Auth::user()->fname}} {{Auth::user()->lname}}</strong></p>
                                <a href=" /profile/create" class="pull-right" >complete profile</a>
                            </div>
                            <div class=" pl-lg-5">
                            <p>website developer</p>
                            </div>
                            <div class=" d-flex align-items-center pl-lg-5">
                                <p>experience</p>
                                <p class=" pl-5">$20/hr</p>
                            </div>
                            <div class=" pl-lg-5">
                                <p>helo guyes i am a software engineer graduated from 
                                    adama science and technology university. now i am worked as a freelancer 
                                    and i have more than 3 years experience on web development and web design</p>
                            </div>
                            <div class=" justify-content-between">
                                <a class="btn btn-success" href="{{ route('profile.edit') }}" role="buttton">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class=" row justify-content-center pt-lg-5">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h3 class=" pb-3">Portfolio</h3>
                            
                            <div class="">
                                <p>Add new portfolio</p>
                            </div>
                            <div class="col-2 ">
                                <a class="btn btn-success" href="{{route('portfolio.create')}}" role="buttton">Add new</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" row justify-content-center pt-lg-5">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h3 class=" pb-3">Certificate</h3>
                            
                            <div class="">
                                <p>Add new certificate</p>
                            </div>
                            <div class="col-2 ">
                                <a class="btn btn-success" href="/certificate/create" role="buttton">Add new</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection