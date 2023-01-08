<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Product;
use App\Models\User;

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/product/{product}', [ProductController::class, 'show']);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/edit-products', function () {
    return view('edit-products');
});

Route::get('/edit-users', [UserController::class, 'index']);



//REFERENCE

// Route::get('/edit-users', function () {
//     return view('edit-users', [
//         'users' => User::all()
//     ]);
// });


// Route::get('/', function () {
//     return view('welcome');
// });

// //All listings
// Route::get('/listings', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all()
//     ]);
// });

// //Single listing
// Route::get('/listings/{id}', function($id) {
//     $listing  = Listing::find($id);
//     if($listing){
//         return view('listing', [
//             'listing' => Listing::find($id)
//         ]);
//     } else {
//         abort('404');
//     }
// });



// Route::get('/wsb', function () {
//     return view('wsb', ['name' => 'Jacek', 'surname' => 'Cielecki']);
// });

// Route::get('pages/{x}', function($x) {
//     $pages = [
//         'about' => 'Strona WSB',
//         'contact' => 'poznan@gmail.com',
//         'home' => 'Strona domowa'
//     ];
//     return $pages[$x];
// });

// Route::get('address/{city?}/{street?}/{zipCode?}', function(String $city = " brak danych ",
//  String $street = " - ", int $zipCode = null){
//     if (is_null($zipCode)){
//         $zipCode = " brak ";
//     }else{
//         $zipCode = substr($zipCode,0,2)."-".substr($zipCode,2,3);
//     }
//     echo <<<ADDRESS
//     Kod pocztowy: $zipCode,
//     Miasto: $city<br>
//     Ulica: $street
//     <hr>
// ADDRESS;
// }) -> name('address');

// Route::redirect('/adres/{city?}/{street?}/{zipCode?}', '/address/{city?}/{street?}/{zipCode?}');

// Route::prefix('admin')->group(function(){
//     Route::get('/home/{name}', function(String $name){
//         echo "Witaj $name na stronie administracyjnej";
//     });

//     Route::get('users', function(){
//         echo "<h3>Użytkownicy systemu</h3>";
//     });
// });

// Route::redirect('/admin/{name}', '/admin/home/{name}');

// Route::get('/user/{name}/{age?}', function(String $name, int $age = null){
//     echo "Imię: $name";
//     if ($age !=null){
//         echo "<br>Wiek: $age";
//     }
// })->where(['name' => '[A-Za-z]+', 'age' => '[0-9]+']);

// Route::get('/car/{marka?}/{model?}/{kolor?}/{cena?}', function(String $marka = '...', String $model = '...', String $kolor = '...', String $cena = '...'){
//     echo <<<CAR
//     Marka: $marka, model: $model<br>
//     Kolor: $kolor<br>
//     Cena: $cena
//     CAR;
// })->where(['marka?' => '[A-Za-z]+', 'model?' => '[A-Za-z]+', 'kolor?' => '[A-Za-z]+', 'cena?' => '[A-Za-z]+']);
