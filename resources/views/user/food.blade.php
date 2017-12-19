@extends('layouts.master')


@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
    @foreach($menus->chunk(3) as $menuchunk)
    <div class="row">
        @foreach($menuchunk as $menu)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="width:350px;height:300px;" src="{{ $menu->image }}" alt="..." class="img-responsive">
                    <div class="caption">
                        <h3>{{ $menu->name }}</h3>
                        <div class="clearfix">
                            <div class="pull-left price">Rm {{ $menu->price }}</div>
                            <a href="{{route('cart.addItem',$menu->id)}}" class="btn btn-success pull-right" role="button">Add to My Order</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach
    </div>
@endsection