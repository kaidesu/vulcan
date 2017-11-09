@extends('layouts.app')

@section('title', 'Journal')

@section('actions')
    <a href="/journal/create" class="btn btn-primary">Create Entry</a>
@endsection

@section('content')
    <div class="row no-gutters border">
        <div class="col-2">
            <div class="card card-body mb-3 border-left-0 border-top-0 border-bottom-0 h-100">
                <b>Library</b>
                
                <small>
                    <a href="#"><i class="fa fa-inbox fa-fw"></i> Inbox</a><br>
                    <a href="#"><i class="fa fa-clock fa-fw"></i> Recents</a><br>
                    <a href="#"><i class="fa fa-archive fa-fw"></i> All Entries</a><br>
                </small>
                
                <hr>
                
                <b>Journals</b>

                <small>
                    <a href="#">Artificial Intelligence</a><br>
                    <a href="#">Natural Language Processing</a><br>
                    <a href="#">Personal</a><br>
                    <a href="#">Vulcan</a><br>
                </small>
            </div>
        </div>
    
        <div class="col-3">
            <div class="card border-left-0 border-top-0 border-bottom-0 h-100">
                <div class="card-body text-center">
                    <span class="card-title">Inbox</span>
                </div>
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        
        <div class="col">
            <div class="card card-body border-0 h-100">
                <h5 class="card-title">Lorem Ipsum</h5>
                
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
@endsection
