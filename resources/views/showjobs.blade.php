@extends('inc.header')

@section('content')
<div class="container">
    <div class="row pt-lg-5 justify-content-center">
        <h3> Find Jobs</h3>
        <div class="col-6 justify-content-center">
            @foreach ($posts as $post)
                <div class=" pt-lg-5 d-flex justify-content-between ">
                    <h4 class="pl-lg-5"><strong >{{ $post->title }} </strong></h4>
                    <p class="pl-lg-5"> {{ $post->bid }} $</p>
                </div> 
                <div class="pt-3">
                    <p>{{ $post->description }}</p>

                    <a class="btn btn-primary" href="{{ route('apply.create',$post->id) }}">Apply Now</a>
                </div> 
            @endforeach
        </div>
 
    </div>
</div>
{!! $posts->links() !!}
@endsection