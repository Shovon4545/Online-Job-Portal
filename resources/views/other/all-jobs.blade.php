@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Job Dashboard</div>

                    <div class="panel-body">
                        @if(empty($jobs))
                            <p><strong>Create New Job Please</strong></p>
                        @else
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Tittle</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Deadline</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td> <a href="{{route('viewJob',$job->id)}}">{{ $job->job_tittle }} </a> </td>
                                        <td>{{ $job->job_category}}</td>
                                        <td>{{ $job->created_at->format('y-m-d')}}</td>
                                        <td>{{ $job->job_dead_line}}</td>
                                    </tr>
                                @endforeach



                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection