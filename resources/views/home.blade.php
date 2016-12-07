@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading lavender">
                    @include('links.top-links')
                    </div>

                <div class="panel-body">
                    <h3>Links</h3>
                        <ul>
                            <li>Companies</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
