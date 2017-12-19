<?php
namespace App;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Order extends Model
{
    protected $fillable=['cuisine_id','user_id','status_id','quantity','totalprice'];
    
   

}