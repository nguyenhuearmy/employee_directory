@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if(Session::has('message'))
                <div class="alert alert-warning">
                    <strong>{{ Session::get('message') }}</strong>
                </div>
            @endif
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 20px;">Welcome</div>

                <div class="panel-body" style="font-size: 15px;">
                    Welcome to Employee Directory website.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
