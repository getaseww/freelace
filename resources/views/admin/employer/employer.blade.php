@extends('layouts.app')

 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 pt-lg-5 d-flex justify-content-between">
            <div class="pull-left">
                <h2>Manage Employers</h2>
            </div>
            <div class="">
                <a class="btn btn-secondary" href="{{ route('admin') }}">Back</a>
            </div>
        </div>
        <div class=" col-10 pt-lg-5">
            <div><h4>Employers</h4></div>
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th width="280px">Action</th>
                </tr>   
                @foreach ($users as $user)
                    @if ($user->role==="Employer")
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->fname }}</td>
                        <td>{{ $user->lname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('admin.employer.destroy',$user->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('admin.employer.show',$user->id) }}">Show</a>
                                @csrf
                                @method('DELETE')    
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                    </tr>   
                        
                    @endif
                @endforeach
            </table>               
        </div>
    </div> 
</div>   
</div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    
  

    {!! $users ?? '' ?? ''->links() !!}

      

@endsection