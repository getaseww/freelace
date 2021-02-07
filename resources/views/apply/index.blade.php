@extends('layouts.app')

 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 pt-lg-5 d-flex justify-content-between">
            <div class="pull-left">
                <h2>Your applications</h2>
            </div>
        </div>
        <div class=" col-10 pt-lg-5">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Bid</th>
                    <th>Duration</th>
                    <th>Portfolio</th>
                    <th width="280px">Action</th>
                </tr>   
                @foreach ($applies ?? ''  as $apply)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $apply->bid }}</td>
                        <td>{{$apply->bid  }}</td>
                        <td>{{ $apply->portfolio }}</td>
                        <td>
                            <form action="{{ route('apply.destroy',$apply->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('apply.show',$apply->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('apply.edit',$apply->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')    
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>   
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

      

@endsection