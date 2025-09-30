<nav class="navbar navbar-light bg-light p-3">
    <div class="navbar-text">
        <div class="dropdown">
            @if(Session::has('user'))
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
            @else
                <li><a class="dropdown-item" href="{{url('login')}}">Login</a></li>
            @endif
            </ul>
        </div>
    </div>
</nav>