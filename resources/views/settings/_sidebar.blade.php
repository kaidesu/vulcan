<div class="card mb-3">
    <div class="card-header">
        Personal Settings
    </div>
    
    <div class="list-group list-group-flush">
        <a href="{{ route('settings.profile') }}" class="list-group-item list-group-item-action">Profile</a>
        <a href="{{ route('settings.account') }}" class="list-group-item list-group-item-action">Account</a>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        Developer Settings
    </div>
    
    <div class="list-group list-group-flush">
        <a href="{{ route('settings.tokens') }}" class="list-group-item list-group-item-action">Personal Access Tokens</a>
    </div>
</div>
