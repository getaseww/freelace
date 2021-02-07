@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between">
        <div class="pull-left">
            <h2>Apply</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('apply') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('apply.store') }}" method="POST">
 @csrf
    <div class="row justify-content-center pt-lg-5">
        <div class="col-8 justify-content-center">
            <div class="card">
                <div class="card-title">
                    <div class="card-body">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Your Bid</strong>
                                <input type="text" name="bid" class="form-control" placeholder="bid">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Duration to finish the project</strong>
                                <input type="text" name="duration" class="form-control" placeholder="duration">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Links of your portfolio </strong>
                                <input type="text" name="portfolio" class="form-control" placeholder="portfolio">
                            </div>
                        </div>
                        
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection