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
@if(session('error')) 
    <div class="alert alert-danger">
        {{ session('error') }}
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
                <div class="card-header">{{ Auth::user()->name }}'s Change Profile Password</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('updatepassword') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="current_password"><strong>Current Password:</strong></label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                        </div>
                        <div class="form-group">
                            <label for="new_password"><strong>New Password:</strong></label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                        </div>
                        <div class="form-group">
                            <label for="new_password_confirmation"><strong>Confirm Password:</strong></label>
                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                        </div>
                        <button class="btn btn-primary" value="submit">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
