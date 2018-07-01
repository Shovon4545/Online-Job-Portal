@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><strong>New Job</strong></div>
                    <div class="panel-body">
                        {!! Form::model($job,[
                            'route'=>$job->exists ? ['jobs.update',$job->id] : 'jobs.store',
                            'method'=> $job->exists ? 'PUT' : 'POST'
                            ]) !!}

                                {!! Form::hidden('admin_id',Auth::guard('admins')->user()->id) !!}

                                <div class="form-group">
                                    {!! Form::label('job_tittle') !!}
                                    {!! Form::text('job_tittle',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_tittle'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_tittle') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_category') !!}
                                    {!! Form::select('job_category',[
                                        'Agriculture, Food and Natural Resources'=>'Agriculture, Food and Natural Resources',
                                        'Architecture and Construction'=>'Architecture and Construction',
                                        'Arts, Audio/Video Technology and Communications'=>'Arts, Audio/Video Technology and Communications',
                                        'Business Management and Administration'=>'Business Management and Administration',
                                        'Education and Training'=>'Education and Training',
                                        'Finance'=>'Finance',
                                        'Government and Public Administration'=>'Government and Public Administration',
                                        'Health Science'=>'Health Science',
                                        'Hospitality and Tourism'=>'Hospitality and Tourism',
                                        'Information Technology'=>'Information Technology',
                                        'Marketing, Sales and Service'=>'Marketing, Sales and Service',
                                        'Science, Technology, Engineering and Mathematics'=>'Science, Technology, Engineering and Mathematics'
                                    ],null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_category'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_category') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_nature') !!}
                                    {!! Form::select('job_nature',[
                                        'Part Time'=>'Part Time',
                                        'Full Time'=>'Full Time'
                                    ],null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_nature'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_nature') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_educational_req') !!}
                                    {!! Form::textarea('job_educational_req',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_educational_req'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_educational_req') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_year_of_exp') !!}
                                    {!! Form::text('job_year_of_exp',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_year_of_exp'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_year_of_exp') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_salary') !!}
                                    {!! Form::text('job_salary',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_salary'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_salary') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_location') !!}
                                    {!! Form::select('job_location',[
                                        'Barisal'=>'Barisal',
                                        'Chittagong'=>'Chittagong',
                                        'Dhaka'=>'Dhaka',
                                        'Khulna'=>'Khulna',
                                        'Mymensingh'=>'Mymensingh',
                                        'Rajshahi'=>'Rajshahi',
                                        'Rangpur'=>'Rangpur',
                                        'Sylhet'=>'Sylhet',
                                    ],null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_location'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_location') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_description') !!}
                                    {!! Form::textarea('job_description',null,['class'=>'form-control']) !!}

                                    @if ($errors->has('job_description'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_description') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('job_dead_line') !!}
                                    {!! Form::date('job_dead_line',\Carbon\Carbon::now(),['class'=>'form-control']) !!}

                                    @if ($errors->has('job_dead_line'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('job_dead_line') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


