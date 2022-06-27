
<nav class="navbar navbar-inverse">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="nav navbar-nav">
                        <li><a href="/laravelearn/public/">Home</a></li>
                        <li><a href="/laravelearn/public/index.php/about">About</a></li>
                        <li><a href="/laravelearn/public/index.php/services">Services</a></li>
                        <li><a href="/laravelearn/public/index.php/posts">blog</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                </ul>
                            @endif
                            
                            @if (Route::has('register'))
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                </ul>
                            @endif
                        @else
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown">
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
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
