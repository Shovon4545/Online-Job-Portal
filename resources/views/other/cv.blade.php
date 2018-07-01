@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><strong>CV</strong></div>
                    <div class="panel-body">
                        {!! Form::model($usersCv,[
                            'route'=>$usersCv->exists ? ['usersCvs.update',$usersCv->id] : 'usersCvs.store',
                            'method'=> $usersCv->exists ? 'PUT' : 'POST'
                            ]) !!}

                        {!! Form::hidden('user_id',Auth::user()->id) !!}

                        <div class="form-group">
                            {!! Form::label('user_full_name') !!}
                            {!! Form::text('user_full_name',null,['class'=>'form-control']) !!}

                            @if ($errors->has('user_full_name'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_full_name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('user_address') !!}
                            {!! Form::textarea('user_address',null,['class'=>'form-control']) !!}

                            @if ($errors->has('user_address'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_address') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('user_phone') !!}
                            {!! Form::text('user_phone',null,['class'=>'form-control']) !!}

                            @if ($errors->has('user_phone'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_phone') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('user_email') !!}
                            {!! Form::email('user_email',null,['class'=>'form-control']) !!}

                            @if ($errors->has('user_email'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_email') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group">
                            {!! Form::label('user_objective') !!}
                            {!! Form::textarea('user_objective',null,['class'=>'form-control']) !!}

                            @if ($errors->has('user_objective'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_objective') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('user_education') !!}
                            {!! Form::textarea('user_education',null,['class'=>'form-control']) !!}

                            @if ($errors->has('user_education'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_education') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_date_of_birth') !!}
                            {!! Form::date('user_date_of_birth',\Carbon\Carbon::now(),['class'=>'form-control']) !!}

                            @if ($errors->has('user_date_of_birth'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_date_of_birth') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_experience') !!}
                            {!! Form::textarea('user_experience',null,['class'=>'form-control']) !!}

                            @if ($errors->has('user_experience'))
                                <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_experience') }}</strong>
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


