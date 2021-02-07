@extends('layouts.app')
<style>
    
    .em{
        padding-left: 600px;
        padding-top: 30px;
    }
    .a{
        text-decoration: none;
        color: red;
    }
    .card{
        height: 100px;

    }
</style>

@section('content')
<div class=" w-100 h-100" style="background-color:white">
    <h3 class="em justify-content-center " style=" color:green"><i class="fa fa-italic" aria-hidden="true"><strong>Dashboard</strong></i></h3>
    <div class="row ">
        <div class="col-3 pl-lg-5">
            <div>
                <div class="card">
                    <h2 class="pl-lg-2 pt-lg-4 "><b >
                        <a href="/posts/create" style=" color:orangered">Create Project</a></b></h2>
                </div>
                <div class="card">
                    <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                    <a href="/posts"  style=" color:orangered">Manage Projects</a></b></h2>
                </div>
                <div class="card">
                    <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                        <a href="/payment"  style=" color:orangered">Payment</a></b></h2>
                </div>
                <div class="card">
                    <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                        <a href="/freelancer"  style=" color:orangered">Get Freelancers</a></b></h2>
                </div>
                <div class="card">
                    <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                        <a href="/"  style=" color:orangered">Applicants</a></b></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection