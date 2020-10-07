 <nav class="navbar  navbar-static-top navbarc">
            <div class="container">
                <div class="navbar-header ">
                    <!-- Branding Image -->
            
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                        <li class="nav-item">
             <a class="nav-link text " href="{{ url('/') }}" >
                       Home
                    </a>    
                    </li>    

      <li class="nav-item">
        <a class="nav-link text" href="/msds">MSD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text" href="/hospitals" >Hospitals</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text" href="/labs" >Diagnostic Lab</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown text" href="/doctors">Doctors</a>
         </li>
         <!--li class="nav-item dropdown">
      <a class="nav-link dropdown" href="/doctor">Specialist</a>
        
      </li-->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" class="text">Staff Login</a></li>
                            <li><a href="{{ route('register') }}" class="text">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="/home">Dashboard</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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