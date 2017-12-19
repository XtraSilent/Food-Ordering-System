@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <img src="{{ Auth::user()->avatar }}"
            alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-4 col-md-4">
            <blockquote>
                <p>{{ Auth::user()->name }}</p>
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> {{ Auth::user()->email }}
                <br
                />
                <br /> <i class="glyphicon glyphicon-envelope"></i> {{ Auth::user()->created_at }}</p>
        </div>
        
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
