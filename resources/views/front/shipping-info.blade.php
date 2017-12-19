@extends('layouts.master')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Shipping Info</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('addressline', 'Address Line') }}
            {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        </div>

        
        {{ Form::submit('Proceed', array('class' => 'btn btn-primary')) }}
        {!! Form::close() !!}
    </div>


</div>


@endsection