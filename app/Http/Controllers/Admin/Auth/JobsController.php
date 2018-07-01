<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\StoreJobsRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function compact;
use App\Job;
use Auth;
use function view;

class JobsController extends Controller
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
        $this->middleware('auth.admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $jobs = Auth::guard('admins')->user()->jobs->sortByDesc('created_at');
//        return view('admin.home',compact('jobs'));
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Job $job)
    {
        return view('admin.jobs.form',compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobsRequest $request)
    {
        $job = new Job;

        $job->admin_id = $request -> admin_id;
        $job->job_tittle = $request -> job_tittle;
        $job->job_category = $request -> job_category;
        $job->job_nature = $request -> job_nature;
        $job->job_educational_req = $request -> job_educational_req;
        $job->job_year_of_exp = $request -> job_year_of_exp;
        $job->job_salary = $request -> job_salary;
        $job->job_location = $request -> job_location;
        $job->job_description = $request -> job_description;
        $job->job_dead_line = $request -> job_dead_line;

        $job->save();

        return redirect('/admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $job=$this->jobs->findOrFail($id);
//        return view('other.view-job',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=$this->jobs->findOrFail($id);
        return view('admin.jobs.form',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job=$this->jobs->findOrFail($id);

        $job->admin_id = $request -> admin_id;
        $job->job_tittle = $request -> job_tittle;
        $job->job_category = $request -> job_category;
        $job->job_nature = $request -> job_nature;
        $job->job_educational_req = $request -> job_educational_req;
        $job->job_year_of_exp = $request -> job_year_of_exp;
        $job->job_salary = $request -> job_salary;
        $job->job_location = $request -> job_location;
        $job->job_description = $request -> job_description;
        $job->job_dead_line = $request -> job_dead_line;

        $job->save();

        return redirect('/admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=$this->jobs->findOrFail($id);
        $job->delete();
        return redirect('/admin/home');

    }
}
