@extends('layouts.master')

@section('content')

    <div class="row">
        <h3>Order List</h3> 
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fooditems as $fooditem)
            {!! Form::open(['route' => ['cart.update',$fooditem->rowId], 'method' => 'PUT']) !!}
                <tr>
                    <td>{{$fooditem->name}}</td>
                    <td>{{$fooditem->price}}</td>
                    <td width="5px">
                        
                        <input name="qty" type="text" value="{{$fooditem->qty}}">
                        

                    </td>
                    <td>
                        <input style="float: left"  type="submit" class="btn btn-primary" value="Update">
                        {!! Form::close() !!}
                        
                        <form action="{{route('cart.destroy',$fooditem->rowId)}}"  method="POST">
                        
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="btn btn-secondary" type="submit" value="Delete">
                         </form>
                    </td>
                    <input name="cuisine_id" type="hidden" value="{{$fooditem->id}}">
                    <input name="status_id" type="hidden" value="1">
                    <input name="totalprice" type="hidden" value="{{Cart::total()}}">
                
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    Tax:RM{{Cart::tax()}} <br>
                    Sub Total: RM {{Cart::subtotal()}} <br>
                    Grand Total: RM {{Cart::total()}}
                   
                </td>
                <td>Items: {{Cart::count()}}
                
               
                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a  href="{{route('checkout.shipping')}}" class="btn btn-primary">Make Order</a>
    </div>



@endsection