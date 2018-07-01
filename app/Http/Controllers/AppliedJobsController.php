<?php

namespace App\Http\Controllers;


use App\AppliedJob;
use function compact;
use Illuminate\Http\Request;
use Auth;
use function view;

class AppliedJobsController extends Controller
{
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
       return view('home');
    }

    public function store(Request $request)
    {
        $appliedJob=new AppliedJob;

        $appliedJob->user_id = $request -> user_id;
        $appliedJob->job_id = $request -> user_id;

        $appliedJob->save();
        return redirect('home');

    }
    public function update(Request $request, $id)
    {
        //
    }
}
