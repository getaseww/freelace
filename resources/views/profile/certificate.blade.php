@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between">
        <div class="pull-left">
            <h2>Portfolio</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('profile') }}"> Back</a>
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

<form action="{{ route('certificate.store') }}" method="POST">
 @csrf
    <div class="row justify-content-center pt-lg-5">
        <div class="col-8 justify-content-center">
            <div class="card">
                <div class="card-title">
                    <div class="card-body">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Aboute the certificate</strong>
                                <input type="text" name="certificate" class="form-control" placeholder="certificate">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Your file</strong>
                                <input type="file" class="form-control-file" name="cfile">
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