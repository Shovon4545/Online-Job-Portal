@extends('layouts.app')
@section('title')
    User Dashboard | Job Portal
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>



                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tittle</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Deadline</th>
                        </tr>
                        </thead>
                        @foreach($appliedJobs as $appliedJob)
                            @if(($appliedJob->user_id)==(Auth::user()->id))
                                @foreach($jobs as $job)
                                    @if(($appliedJob->job_id) == ($job->id))
                                        <tbody>
                                            <tr>
                                                <td> <a href="{{route('viewJob',$job->id)}}">{{ $job->job_tittle }} </a> </td>
                                                <td>{{ $job->job_category}}</td>
                                                <td>{{ $job->created_at->format('y-m-d')}}</td>
                                                <td>{{ $job->job_dead_line}}</td>
                                            </tr>
                                        </tbody>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
