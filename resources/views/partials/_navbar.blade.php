<b-navbar toggleable="md" type="dark" variant="dark">
    <div class="container d-flex align-items-center justify-content-around">
        <b-nav-toggle target="header-collapse"></b-nav-toggle>
        
        <a class="navbar-brand text-logo" href="/">
            <i class="fa fa-hand-spock fa-lg fa-fw"></i> Vulcan
        </a>
        
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
