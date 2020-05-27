@extends('layouts.app')

@section('content')
<div class="container">
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
                    <form action="dashboard.store" method="post">
                        <div class="form-group">
                            <label for="job_title"><strong>JOB TITLE</strong></label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>JOB TYPE</strong></label>
                            <input type="text" class="form-control" name="type">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>SALARY</strong></label>
                            <input type="text" class="form-control" name="salary">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>SLUG</strong></label>
                            <input type="text" class="form-control" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="job_title"><strong>JOB DESCRIPTION</strong></label>
                            <textarea class="form-control" rows="10" name="description"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
