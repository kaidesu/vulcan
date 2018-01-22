<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Vulcan</a>
        
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}"><i data-feather="home"></i> Home</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}"><i data-feather="inbox"></i> Logs</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('settings.profile') }}"><i data-feather="settings"></i> Settings</a>
            </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <logout-button csrf="{{ csrf_token() }}"></logout-button>
                {{-- <a class="btn btn-outline-secondary btn-sm" href="/logout"><i data-feather="log-out"></i> Logout</a> --}}
            </li>
        </ul>
    </div>
</nav>
