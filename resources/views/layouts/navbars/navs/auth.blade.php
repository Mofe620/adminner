<nav class="navbar navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
        </div>
        <a class="navbar-brand" href="#">{{ auth()->user()->name }}</a>
        <div class="">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                </li>
                <li class="nav-item">
                    <div class="photo">
                        <img src="{{ asset('black') }}/img/anime3.png" alt="{{ __('Profile Photo') }}">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
