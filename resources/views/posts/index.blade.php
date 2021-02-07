@extends('layouts.app')

 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 pt-lg-5 d-flex justify-content-between">
            <div class="pull-left">
                <h2>Employer page</h2>
            </div>
            <div class="">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
        <div class=" col-10 pt-lg-5">
            <div><h4>Posted projects</h4></div>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Average bid</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>   
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->bid }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
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

    
  

    {!! $posts->links() !!}

      

@endsection