<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Cornford\Googlmapper\Facades\MapperFacades;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    
Mapper::map(
        
2.16362,
        
102.42863,
        
[
            
'zoom' => 16,
            
'draggable' => false,
            
'markers => true',
            
'eventAfterLoad' =>
            
'circleListerner(maps[0].shapes[0].circle_0);'
        
]
        
);

return view('welcome');
});

/*Route::get('/', function () {
    return view('welcome');
    /*$posts = App\Cuisine::all();
    return view('menu', compact('posts'));
});
*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::get('/user/job', 'JobsController@create')->name('job.create');
Route::post('/user/job', 'JobsController@store')->name('job.store');
Route::get('/user/survey', 'SurveyController@create')->name('survey.create');
Route::post('/user/survey', 'SurveyController@store')->name('survey.store');

Route::resource('/cart', 'CartController');
Route::get('/user/food', 'FoodController@menus')->name('cart.create');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/profile','ProfileController@index')->name('profile.index');

//Route::get('shipping-info','CheckoutController@shipping')->name('cart.shipping');
Route::get('front/shipping-info','CheckoutController@shipping')->name('checkout.shipping');
Route::resource('address', 'AddressController');
//address
//Route::get('/cart/shipping-info', 'CheckoutController@shipping')->name('address.store');

//Route::resource('address','AddressController');
/*Route::get('/cart/shopping', 'AddressController@create')->name('shopping.create');
Route::post('/cart/shopping', 'AddressController@store')->name('shopping.store');*/

//Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');

/*Route::get('test',function(){
   $orders=App\Order::find(2);
   $items=$orders->orderItems;
dd($items);*/

//Route::get('/cart', 'OrderController@create')->name('order.create');
//Route::post('/cart', 'OrderController@createOrder')->name('order.store');

