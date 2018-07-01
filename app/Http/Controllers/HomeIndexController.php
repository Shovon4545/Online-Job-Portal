<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function compact;
use App\Job;
use Auth;
use function view;

class HomeIndexController extends Controller
{
    protected $jobs;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Job $jobs)
    {
        $this->jobs=$jobs;

        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::orderBy('created_at', 'DESC')->get();
        return view('welcome',compact('jobs'));
    }

    public function viewJob($id,AppliedJob $appliedJob)
    {
        $job=$this->jobs->findOrFail($id);
        return view('other.view-job',compact('job','appliedJob'));

    }
    public function viewAllJob()
    {
        $jobs=Job::orderBy('created_at', 'DESC')->get();
        return view('other.all-jobs',compact('jobs'));

    }
    public function viewJobsCategory($id)
    {
        $id=$id;
        $jobs=Job::orderBy('created_at', 'DESC')->get();
        return view('other.jobs-category-view',compact('jobs','id'));
    }
    public function viewFaq()
    {
        return view('other.faq');
    }

}
