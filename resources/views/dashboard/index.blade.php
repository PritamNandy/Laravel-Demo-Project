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
                <div class="card-header">Index View</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Display a listing of resource</h2>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                        <td scope="col">ID</td>
                        <td scope="col">JOB TITLE</td>
                        <td colspan="2">ACTIONS</td>
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->id}}</td>
                                <td>{{$job->job_title}}</td>
                                <td><a class="btn btn-primary btn-xs" href="{{route('dashboard.edit',$job->id)}}">Edit</a></td>
                                <td><form action="{{ route('dashboard.destroy',$job->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-xs">Delete</button>
                                </form></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
