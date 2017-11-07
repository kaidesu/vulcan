<b-navbar toggleable="md" type="light" variant="white">
    <div class="container">
        <b-nav-toggle target="header-collapse"></b-nav-toggle>
        <div class="d-flex align-items-center justify-content-around">
            <a class="navbar-brand text-logo" href="/">
                <i class="fa fa-hand-spock fa-lg"></i>
            </a>
        </div>
        
        <b-collapse is-nav id="header-collapse">
            <b-nav is-nav-bar class="ml-auto">
                @if(Auth::check())
                    <b-nav-item-dropdown text="Hello, {{ auth()->user()->name }}" right>
                        <logout-button csrf="{{ csrf_token() }}"></logout-button>
                    </b-nav-item-dropdown>
                @endif
                </b-nav-item-dropdown>
            </b-nav>
        </b-collapse>
    </div>
</b-navbar>

<b-navbar toggleable="md" type="light" variant="light">
    <div class="container">
        <div class="d-flex align-items-center justify-content-around">
            <span class="navbar-brand">
                @yield('title')
                
                @if (array_key_exists('subtitle', View::getSections()))
                    <small>@yield('subtitle')</small>
                @endif
            </span>
        </div>
    </div>
</b-navbar>
