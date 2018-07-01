<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use function compact;
use Illuminate\Http\Request;
use App\Job;
use Auth;
use function view;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $jobs=Job::orderBy('created_at', 'DESC')->get();
//        $jobs = Auth::user()->jobs->sortByDesc('created_at');
        return view('admin.home',compact('jobs'));
//        return view('admin.home');
    }
}
