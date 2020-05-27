@extends('layouts.master')
@section('PageTitle','Quote Home Page')
@section('description','Description for Quotes index page')
@section('content')
    <!-- END Site header -->
    <!-- Main container -->
    <main>
      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <h2>Recent Jobs</h2>
          </header>
          @auth()
          @component('components.alert')
          @slot('alertClass')
          success
          @endslot
          @slot('alertType')
          Welcome to the website
          @endslot
          @endcomponent
          @endauth

          @guest 
          @component('components.alert')
          @slot('alertClass')
          danger
          @endslot
          @slot('alertType')
          You are not welcome to the website
          @endslot
          @endcomponent
          @endguest
          <div class="row jobs-details">
            <!-- START JOB DETAILS -->
              @foreach($jobs as $job)
              <div class="col-xs-12">
              <div class="jobs-block">
                <header>
                <img src="img/{{ $job->client->avatar }}" alt="" style="width: 70px;">
                  <a href="{{ route('jobs.show',$job->id) }}"></a>
                  <div class="hgroup">
                    <h4>
                    <a href="{{ route('jobs.show',$job->id)}}">{{$job->job_title}}</a>
                    </h4>
                     <div class="spacer-front">{{$job->salary}}</div>
                  </div>

                </header>

               <footer>
              <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>{{$job->created_at->diffForHumans()}} &nbsp; By:&nbsp;<a href="author-jobs-details.html">{{$job->client->name}}</a></div>
                  <div class="action-btn">
                    <a class="btn btn-xs btn-info" href="category-details.html">{{ $job->job_type }}</a>
                  </div>
                </footer>
              </div>
            </div>
            @endforeach
          <!-- END JOB DETAILS -->
          </div>

          <br><br>
    <p class="text-center">
      <ul class="pagination" role="navigation">
      <li class="page-item disabled" aria-label="&laquo; Previous">
        <span class="page-link" aria-hidden="true">&lsaquo;</span></li>
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span></li>
         <li class="page-item">
          <a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">
              </a>
            </li>
            </ul>

</p>

        </div>
      </section>
      <!-- END Recent jobs -->
@endsection