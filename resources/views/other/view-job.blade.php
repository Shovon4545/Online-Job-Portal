@extends('layouts.app')
@section('title')
    View Job | Job Portal
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Job</div>

                    <div class="panel-body">

                        <div class="view-job">
                            <div class="view-job-tittle">
                                <h4>Tittle</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_tittle }}</p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Category</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_category }} </p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Nature</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_nature}}</p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Educational Requirement</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_educational_req }} </p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Year Of Experience</h4>
                            </div>
                            <div class="view-job-des">
                                <p> {{ $job->job_year_of_exp }}</p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Salary</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_salary }} </p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Location</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_location }} </p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_description }} </p>
                            </div>
                            <div class="view-job-tittle">
                                <h4>Job Deadline</h4>
                            </div>
                            <div class="view-job-des">
                                <p>{{ $job->job_dead_line }} </p>
                            </div>
                            {{--<div class="apply-btn">--}}
                                {{--<a  onclick="checkLogin()" class="btn btn-primary" id="apply">Apply</a>--}}
                            {{--</div>--}}

                            {{--<div class="" style="display: none" id="alert1">--}}
                                @if(Auth::user())
                                    {!! Form::model($appliedJob,[
                                            'route'=>$appliedJob->exists ? ['appliedJobs.update',$job->id] : 'appliedJobs.store',
                                            'method'=> $appliedJob->exists ? 'PUT' : 'POST'])
                                    !!}
                                        {!! Form::hidden('user_id',Auth::user()->id) !!}
                                        {!! Form::hidden('job-id',$job->id) !!}
                                         {!! Form::submit('Apply',['class'=>'btn btn-primary']) !!}
                                    {!! Form::close() !!}

                                    {{--<div class="alert alert-success" role="alert">--}}
                                        {{--Well done! You successfully Apply For This Job.--}}
                                    {{--<a href="#" class="alert-link">Go Back to Home.</a>--}}
                                     {{--</div>--}}
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        Oh snap! Looks Like You're not Login Yet.
                                        <a href="#" class="alert-link"> Login </a>and try submitting again.
                                    </div>
                                @endif
                            {{--</div>--}}

                            <script>
                                function checkLogin() {
                                    var alt= document.getElementById('alert1');
                                    if (alt.style.display=='none'){
                                        alt.style.display='block'
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
