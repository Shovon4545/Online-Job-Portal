<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>JOB
                    </a>
                </div>

               {{--///new--}}
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
                        @if(Auth::user())
                        <li>
                            <a href="{{ route('usersCvs.edit',Auth::user()->id) }}">
                                <span class="glyphicon glyphicon-user"></span>Resume
                            </a>
                        </li>
                        @endif
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
                    <!-- Right Side Of Navbar -->
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
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name.' '.Auth::user()->last_name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js')}}"></script>
</body>
</html>
