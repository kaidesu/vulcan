<b-navbar toggleable="md" type="light" variant="white">
    <div class="container">
        <b-nav-toggle target="header-collapse"></b-nav-toggle>
        <div class="d-flex align-items-center justify-content-around">
            <a class="navbar-brand text-logo" href="/">
                <i class="fa fa-hand-spock fa-lg fa-fw"></i> Vulcan
            </a>
        </div>
        
        <b-collapse is-nav id="header-collapse">
            <b-navbar-nav>
                <b-nav-item href="/">Home</b-nav-item>
                <b-nav-item href="/modules">Modules</b-nav-item>
            </b-navbar-nav>
            
            <b-nav is-nav-bar class="ml-auto">
                @if(Auth::check())
                    <b-nav-item-dropdown text="Hello, {{ auth()->user()->name }}" right>
                        <logout-button csrf="{{ csrf_token() }}"></logout-button>
                    </b-nav-item-dropdown>
                @endif
            </b-nav>
        </b-collapse>
    </div>
</b-navbar>

<b-navbar toggleable="md" type="dark" variant="primary">
    <div class="container d-flex align-items-center justify-content-between">
        <span class="navbar-brand">
            @yield('title')
            
            @if (array_key_exists('subtitle', View::getSections()))
                <small>@yield('subtitle')</small>
            @endif
        </span>
            
        <div>@yield('actions')</div>
    </div>
</b-navbar>
