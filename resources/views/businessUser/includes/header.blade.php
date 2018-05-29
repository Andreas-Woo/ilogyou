<div class="navbar">
    <div class="navbar-inner">
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/businessUser/deliveryOrder/list">delivery process</a></li>
            <li><a href="/projects">tracking</a></li>
            <li><a href="/contact">help</a></li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
        @if (Auth::guard('web_businessUser')->guest())

            <!--Seller Login and registration Links -->

            <li><a href="{{ url('/businessUser_login') }}">Business User 로그인</a></li>
            <li><a href="{{ url('/businessUser_register') }}">Business User 등록</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::guard('web_businessUser')->user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/businessUser_logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/businessUser_logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
        </ul>
    </div>
</div>