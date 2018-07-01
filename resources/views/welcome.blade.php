<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Job Portal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">
        <link rel = "stylesheet" href= "{{ url('css/bootstrap.min.css')}}">
        <script src="{{ URL::asset('js/app.js')}}"></script>

        <!-- Styles -->
        <style>
            /*html, body {*/
                /*!*background-color: #fff;*!*/
                /*color: #636b6f;*/
                /*font-family: 'Raleway', sans-serif;*/
                /*font-weight: 100;*/
                /*height: 100vh;*/
                /*margin: 0;*/
            /*}*/
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                /*background-color: #fff;*/
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                /*height: 100vh;*/
                margin: 0;
            }

            /*.links > a {*/
                /*color: #636b6f;*/
                /*padding: 0 25px;*/
                /*font-size: 12px;*/
                /*font-weight: 600;*/
                /*letter-spacing: .1rem;*/
                /*text-decoration: none;*/
                /*text-transform: uppercase;*/
            /*}*/
            .m-b-md {
                margin-top: 100px;
                margin-bottom: 30px;
            }

            #exTab3 .nav-pills > li > a {
                border-radius: 4px 4px 0 0 ;
            }

            #exTab3 .tab-content {
                /*color : white;*/
                /*background-color: #337AB7;*/
                padding : 5px 15px;
            }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>JOB
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url('/') }}">
                                <span class="glyphicon glyphicon-home"></span> Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/home')}}">
                                <span class="glyphicon glyphicon-user"></span>User Profile
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-th"></span>Jobs
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('viewAllJob')}}">All Jobs</a></li>
                                {{--{{route('jobsCategoryView')}}--}}
                                <li><a href="" >Agriculture, Food and Natural Resources</a></li>
                                <li><a href="">Architecture and Construction</a></li>
                                <li><a href="">Arts, Audio/Video Technology and Communications</a></li>
                                <li><a href="">Business Management and Administration</a></li>
                                <li><a href="">Education and Training'=>'Education and Training</a></li>
                                <li><a href="">Finance</a></li>
                                <li><a href="">Government and Public Administration</a></li>
                                <li><a href="">Health Science</a></li>
                                <li><a href="">Hospitality and Tourism</a></li>
                                <li><a href="">Information Technology</a></li>
                                <li><a href="">Marketing, Sales and Service</a></li>
                                <li><a href="">Science, Technology, Engineering and Mathematics</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('viewFaq') }}">
                                <span class="glyphicon glyphicon-question-sign"></span> FAQ
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" action="{{ route('searchJobs.index') }}" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search....." name="s" value="{{ isset($s) ? $s : '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </form>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/login') }}">
                                            <span class="glyphicon glyphicon-user"></span><strong>As User</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ad.login') }}">
                                            <span class="glyphicon glyphicon-lock"></span><strong>As Admin</strong>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-menu-right"></span>Register
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/register') }}">
                                            <span class="glyphicon glyphicon-user"></span> <strong>As User</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ad.register') }}">
                                            <span class="glyphicon glyphicon-lock"></span><strong>As Admin</strong>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name.' '.Auth::user()->last_name }}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <span class="glyphicon glyphicon-remove"></span>Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="content ">
            <div class="title m-b-md  col-md-12 col-md-offset-1">
                 Job Portal
            </div>
            <div class="col-md-12  ">
                {{--{!! Form::model($job,[--}}
                {{--'route'=>$job->exists ? ['jobs.update',$job->id] : 'jobs.store',--}}
                {{--'method'=> $job->exists ? 'PUT' : 'POST' ])--}}
                {{--!!}--}}
                {!! Form::open(['route' => 'searchJobs.index','method'=>'GET']) !!}

                    {{--{!! Form::hidden('user_id',Auth::user()->id) !!}--}}
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-flag"></span>
                            {!! Form::label('Keyword') !!}
                            {!! Form::text('s',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-th"></span>
                            {!! Form::label('Job Category') !!}
                            {!! Form::select('job_category',[
                                'Any Category'=>'Any Category',
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
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-map-marker"></span>
                            {!! Form::label('Job Location') !!}
                            {!! Form::select('job_location',[
                                'Any Location'=>'Any Location',
                                'Barisal'=>'Barisal',
                                'Chittagong'=>'Chittagong',
                                'Dhaka'=>'Dhaka',
                                'Khulna'=>'Khulna',
                                'Mymensingh'=>'Mymensingh',
                                'Rajshahi'=>'Rajshahi',
                                'Rangpur'=>'Rangpur',
                                'Sylhet'=>'Sylhet',
                            ],null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-search"></span>
                        {!! Form::label('Search') !!}
                        {!! Form::submit('Search',['class'=>'btn btn-primary form-control']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    <section class="jobs">
            <div id="exTab3" class="container">
                <ul  class="nav nav-pills">
                    <li class="active">
                        <a  href="#1b" data-toggle="tab">
                            FEATURED JOBS
                        </a>
                    </li>
                    <li>
                        <a href="#2b" data-toggle="tab">
                            LATEST JOBS
                        </a>
                    </li>
                    <li>
                        <a href="#3b" data-toggle="tab">
                            JOBS BY CATEGORY
                        </a>
                    </li>
                </ul>

                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1b">
                        @foreach($jobs as $job)
                            <a href="{{route('viewJob',$job->id)}}"><h3 id="{{ $job->id }}">{{ $job->job_tittle }}</h3></a>
                        @endforeach
                    </div>
                    <div class="tab-pane" id="2b">
                        @foreach($jobs as $job)
                            <a href="{{route('viewJob',$job->id)}}"><h3 id="{{ $job->id }}">{{ $job->job_tittle }}</h3></a>
                        @endforeach
                    </div>
                    <div class="tab-pane" id="3b">
                        @foreach($jobs as $job)
                            <a href="{{route('viewJob',$job->id)}}"><h3 id="{{ $job->id }}">{{ $job->job_category }}</h3></a>
                        @endforeach
                    </div>
                </div>
             </div>
    </section>
    </body>
</html>