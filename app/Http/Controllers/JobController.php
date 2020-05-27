<?php

namespace App\Http\Controllers;
use App\Job;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //Get Jobs to index view
    public function index() {
        $jobs = Job::all();
        return view('jobs.index',compact('jobs'));
    }

    public function show($id) {
        $job = Job::find($id);
        return view('jobs.show', compact('job'));
    }
}
