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
        width: 350px;
    }
</style>

@section('content')
<div class=" w-100 h-100" style="background-color:white">
    <h3 class="em justify-content-center " style=" color:green"><i class="fa fa-italic" aria-hidden="true"><strong>Admin Dashboard</strong></i></h3>
    <div class="row pt-lg-5 justify-content-center">
        <div class="col-3 pl-lg-5">
            <div >
                <div class="card">
                    <div class="card-header"><h4 class="cardh">Manage projects</h4></div>
                    <div class="card-body">
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/posts"  style=" color:orangered">View Projects</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/posts/create"  style=" color:orangered">Create Project</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/posts/create"  style=" color:orangered">Delete Project</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/posts/update"  style=" color:orangered">Update Project</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/posts/edit"  style=" color:orangered">Edit Project</a></b></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 pl-lg-5">
            <div >
                <div class="card">
                    <div class="card-header"><h4 class="cardh">Manage Freelancers</h4></div>
                    <div class="card-body">
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/freelancer"  style=" color:orangered">View freelancers</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/freelancer/delete"  style=" color:orangered">Delete freelancer</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/freelancer/chat"  style=" color:orangered">chat with freelancer</a></b></h2>
    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 pl-lg-5">
            <div >
                <div class="card">
                    <div class="card-header"><h4 class="cardh">Manage Employers</h4></div>
                    <div class="card-body">
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/employer"  style=" color:orangered">View employers</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/admin/employer/delete"  style=" color:orangered">Delete employer</a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/freelancer"  style=" color:orangered"><a></b></h2>
                        <h2 class="pl-lg-2 pt-lg-4"><b style=" color:orangered">
                            <a href="/"  style=" color:orangered">Create Project</a></b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection