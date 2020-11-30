


<div class="custom-nav">
        <nav class="navbar navbar-inverse" style="margin: 0;">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
            <li class="nav-li"><a id="len1" class="hoverable" href="/">Home</a></li>
            <li class="nav-li"><a id="len2" class="hoverable" href="/about">About</a></li>
            <li class="nav-li"><a id="len3" class="hoverable" href="/contacts">Contact</a></li>
            @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#">Current user is:   {{ auth()->user()->name }}</a>
                </li>
                <li class="nav-li"><a id="len4" class="hoverable" href="/logout">Log Out</a></li>
                @if ( auth()->user()->is_admin == true)
                    <li class="nav-li"><a id="len5" class="hoverable" href="/admin">Admin Panel</a></li>
                @endif
            @else
            <li class="nav-li"><a id="len4" class="hoverable" href="/login">Login</a></li>
            <li class="nav-li"><a id="len5" class="hoverable" href="/register">Registration</a></li>
            @endif

           
            </ul>
        </div>
        </nav>
    </div>