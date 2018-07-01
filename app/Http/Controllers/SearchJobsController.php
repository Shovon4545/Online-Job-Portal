<?php

namespace App\Http\Controllers;

use function compact;
use Illuminate\Http\Request;
use App\Job;
use Auth;
use function view;

class SearchJobsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->input('s');
        $jobs=Job::latest()
            ->search($s)
            ->paginate(20);
        return view('other.search-view-job',compact('jobs','s'));
    }

//    public function homeIndex()
//    {
//        $jobs=Job::orderBy('created_at', 'DESC')->get();
//        return view('welcome',compact('jobs'));
//
//    }
}
