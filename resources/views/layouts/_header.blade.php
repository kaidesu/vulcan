<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow mb-5">
        <h5 class="my-0 mr-md-auto font-weight-normal">Vulcan</h5>
        
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('home') }}">Home</a>
            <a class="p-2 text-dark" href="#">Logs</a>
            <a class="p-2 text-dark mr-4" href="{{ route('settings.profile') }}">Settings</a>
            <logout-button csrf="{{ csrf_token() }}"></logout-button>
      </nav>
</div>
