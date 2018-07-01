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
                        <p><strong>Create New Job Please</strong></p>
                        @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tittle</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobs as $job)
                                        @if($job->admin_id==(Auth::guard('admins')->user()->id))
                                            <tr>
                                                <td>{{ $job->job_tittle }}</td>
                                                <td>{{ $job->job_category}}</td>
                                                <td>{{ $job->created_at->format('y-m-d')}}</td>
                                                {{-- <td>{{ $job->job_description}}</td>--}}
                                                <td>
                                                    <div class="pull-left">
                                                        <a href="{{route('jobs.edit',$job->id)}} " class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                    <div class="pull-left">
                                                        {!! Form::open(['method'=>'delete','route'=>['jobs.destroy',$job->id]])!!}
                                                             {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
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