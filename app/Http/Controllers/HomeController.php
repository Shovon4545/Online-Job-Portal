<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\Http\Controllers\Controller;
use function compact;
use Illuminate\Http\Request;
use App\Job;
use Auth;
use function view;

class HomeController extends Controller
{
    protected $jobs;
    protected $appliedJobs;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::orderBy('created_at', 'DESC')->get();
        $appliedJobs=AppliedJob::orderBy('created_at', 'DESC')->get();
        return view('home',compact('appliedJobs','jobs'));
    }

//    public function homeIndex()
//    {
//        $jobs=Job::orderBy('created_at', 'DESC')->get();
//        return view('welcome',compact('jobs'));
//
//    }
}
