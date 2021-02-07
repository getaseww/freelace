@extends('inc.header')


@section('content')

@foreach ($profiles as $profile)
<div class="row justify-content-center">
    <div class="col-8 align-content-end">
        <div class="row pt-lg-5 pt-b-5">
            <div class="col-1">
                <img src="/images/pro1.jpeg" class="rounded-circle "  height="100" width="100">
            </div>
            <div class="col-11">
                <div class="d-flex align-items-center pl-lg-5 pt-lg-4 ">
                <a href="/profile/natnael"><p ><strong class=" pt-lg-5 " >Yosef </strong></p></a>
                </div>
                <div class=" pl-lg-5 d-flex">
                <p>{{$profile->profession}}</p>
                    <p class=" pl-5">{{$profile->skills}}</p>
                    <p class="pl-5">{{$profile->experience}}</p>
                </div>
                <div class=" pl-lg-5">
                  <p>{{$profile->about}}</p>
                </div>
            </div>
        </div>
            
    </div>
</div>
@endforeach

@endsection