@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between pr-lg-5">
        <div class="pull-left">
            <h2> Show employer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.employer') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row justify-content-center pl-lg-5 pt-lg-5">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>user id:</strong>
            {{ $user->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First name:</strong>
            {{ $user->fname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last name:</strong>
            {{ $user->lname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>

</div>
@endsection