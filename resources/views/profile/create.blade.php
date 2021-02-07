@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between">
        <div class="pull-left">
            <h2>complete profile</h2>
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

<form action="{{ route('profile.store') }}" method="POST">
 @csrf
    <div class="row justify-content-center pt-lg-5">
        <div class="col-8 justify-content-center">
            <div class="card">
                <div class="card-title">
                    <div class="card-body">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Profession</strong>
                                <input type="text" name="profession" class="form-control" placeholder="profession">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Skills</strong>
                                <label for="skills" class="col-md-4 col-form-label text-md-right" placeholder="skills"></label>
                                    <select class="form-control" id="skills" type="text" class="form-control @error('skills') is-invalid @enderror" name="skills" >
                                      <option>Frontend developer</option>
                                      <option>Backend developer</option>
                                      <option>full stack developer</option>
                                      <option>mobile app developer</option>
                                      <option>android developer</option>
                                      <option>writter</option>
                                      <option>graphic designer</option>
                                      <option>logo designer</option>
                                      <option>digital amrketer</option>
                                      <option>social media expert</option>
                                    </select>
                                    @error('skills')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Experience </strong>
                                <label for="experience" class="col-md-4 col-form-label text-md-right" ></label>
                                    <select class="form-control" id="experience" type="integer" class="form-control @error('experience') is-invalid @enderror" name="experience" >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    @error('skills')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>About yourself</strong>
                                <textarea class="form-control" style="height:150px" name="about" placeholder="about yourself"></textarea>
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