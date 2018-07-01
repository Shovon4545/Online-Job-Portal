@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Job Dashboard</div>

                    <div class="panel-body">
                        <div class="pull-right">
                            <a href="{{ route('jobs.create') }}" class="btn btn-primary">Create New Job</a>
                        </div>
                        @if(empty($jobs))
                            <p><strong>New Job is Created!</strong></p>
                        @else
                            @foreach($jobs as $job)
                                <h3>{{ $job->job_tittle }}</h3>
                                <i>{{ $job->created_at->format('y-m-d')}}</i><br>
                                <b>{{ $job->job_category}}</b>
                                <p>{{ $job->job_description}}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection