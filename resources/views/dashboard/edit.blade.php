@extends('layouts.app')

@section('content')
<div class="container">
@if($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
@endif
@if(session()->get('message'))
<div class="alert alert-success">
    <strong>SUCCESS: </strong>{{ session()->get('message') }}
</div>
@endif
    <div class="row justify-content-center">
        @include('includes.profile_sidebar')

                <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit View</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('dashboard.update',$job->id)}}" method="POST">
                    @method('PATCH')
                    @csrf 
                        <div class="form-group">
                            <label for="job_title"><strong>JOB TITLE</strong></label>
                            <input type="text" class="form-control" name="job_title" value="{{$job->job_title}}">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>JOB TYPE</strong></label>
                            <input type="text" class="form-control" name="job_type" value="{{$job->job_type}}">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>SALARY</strong></label>
                            <input type="text" class="form-control" name="salary" value="{{$job->salary}}">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>SLUG</strong></label>
                            <input type="text" class="form-control" name="slug" value="{{$job->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>JOB DESCRIPTION</strong></label>
                            <textarea class="form-control" rows="10" name="job_description" >{{$job->job_description}}</textarea>
                        </div>
                        <input type="submit" class="btn btn-success" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
