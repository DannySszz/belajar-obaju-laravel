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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user', function () {

// 	$nama='momo';
// 	$umur=20;
// 	$alamat="<b>Surabaya</b>";

//     //return view('index',compact('nama','umur','alamat'));
//     return view('index',[
//     	'nama'=> $nama,
//     	'umur'=> $umur,
//     	'alamat'=> $alamat
//     ]);
// });

// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('user2/{name?}', function ($name = 'John') {
//     return $name;
// });

// Route::get('user3/{id}/{name}', function ($id, $name) {
//     return $id . $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::prefix('admin')->group(function () {
//     Route::get('users1/{nama}', function ($nama) {
//        return view('index')->with('nama',$nama);
//     });

//     Route::get('users2', function () {
//         return 'users2';
//     });

//     Route::get('users3', function () {
//         return 'users3';
//     });
// });

//Route::get('/Content', function () {
//    return view('Content');
//});

// Route::get('/Content/{id}/{nama}', 'Controler_Lat1@show');

// Route::get('/Content_lain/{nama}', function ($nama) {
//     return view('Content_lain')->with('nama',$nama);
// });

// Route::get('/Form', 'Controler_Lat1@input');

// Route::post('/input_form_post', 'Controler_Lat1@input_post');

// Route::get('/table', 'Controler_Lat1@table');

// // Route::get('/', function () {
// //     return view('home');
// // });

// //CRUD Tutorial
// Route::get('/input','CRUDController@input');
// Route::get('/table_crud','CRUDController@view_table_crud');

// Route::post('/input','CRUDController@insert');

// Route::delete('/{id}/delete','CRUDController@delete');

// Route::get('/{id}/edit','CRUDController@edit');

// Route::put('/{id}/edit','CRUDController@update');

// obaju

Route::get('/register', function () {
    return view('register');
});

Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::get('/updateproduct', function () {
    return view('updateproduct');
});

Route::post('save_product','masterController@save_product');

// Route::get('/index', function () {
//     return view('home');
// });

Route::get('/','masterController@showhome');
Route::get('/index','masterController@showhome'); 
Route::get('/indexadmin','masterController@showhomeadmin'); 

Route::get('/404', function () {
    return view('404');
});

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/blog', function () {
    return view('blog');
});

// Route::get('/category', function () {
//     return view('category');
// });

Route::get('/category/{showpaging}/{page}/{sortpaging}/{modelpaging}/{kategoripaging}','masterController@showCategory');

Route::get('/category-full', function () {
    return view('category-full');
});

Route::get('/category-right', function () {
    return view('category-right');
});

Route::get('/checkout1', function () {
    return view('checkout1');
});

Route::get('/checkout2', function () {
    return view('checkout2');
});

Route::get('/checkout3', function () {
    return view('checkout3');
});

Route::get('/checkout4', function () {
    return view('checkout4');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/Content', function () {
    return view('Content');
});

Route::get('/Content_lain', function () {
    return view('Content_lain');
});

Route::get('/customer-account', function () {
    return view('customer-account');
});

Route::get('/customer-order', function () {
    return view('customer-order');
});

Route::post('/customer-orders', function () {
    return view('customer-orders');
});

// Route::post('/home', function () {
//     return view('customer-orders');
// });

Route::get('/customer-wishlist', function () {
    return view('customer-wishlist');
});

Route::get('/detail/{id}','masterController@show');

// Route::get('/detail', function () {
//     return view('detail');
// });

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/text', function () {
    return view('text');
});

Route::get('/text-right', function () {
    return view('text-right');
});

Route::post('/login','masterController@login');

Route::get('/detailadmin/{id}','masterController@showadmin');

// --------------- ROUTE ADMIN ------------------------------

Route::get('/registeradmin', function () {
    return view('registeradmin');
});

Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::post('save_product','masterController@save_product');

Route::get('/','masterController@showhome');
Route::get('/index','masterController@showhome'); 
Route::get('/indexadmin','masterController@showhomeadmin'); 

Route::get('/404admin', function () {
    return view('404admin');
});

Route::get('/basketadmin', function () {
    return view('basketadmin');
});

Route::get('/blogadmin', function () {
    return view('blogadmin');
});

Route::get('/categoryadmin/{showpaging}/{page}/{sortpaging}/{modelpaging}/{kategoripaging}','masterController@showCategoryadmin');

Route::get('/category-fulladmin', function () {
    return view('category-fulladmin');
});

Route::get('/category-rightadmin', function () {
    return view('category-rightadmin');
});

Route::get('/checkout1admin', function () {
    return view('checkout1admin');
});

Route::get('/checkout2admin', function () {
    return view('checkout2admin');
});

Route::get('/checkout3admin', function () {
    return view('checkout3admin');
});

Route::get('/checkout4admin', function () {
    return view('checkout4admin');
});

Route::get('/contactadmin', function () {
    return view('contactadmin');
});

Route::get('/Contentadmin', function () {
    return view('Contentadmin');
});

Route::get('/Content_lainadmin', function () {
    return view('Content_lainadmin');
});

Route::get('/customer-accountadmin', function () {
    return view('customer-accountadmin');
});

Route::get('/customer-orderadmin', function () {
    return view('customer-orderadmin');
});

Route::post('/customer-ordersadmin', function () {
    return view('customer-ordersadmin');
});

Route::get('/customer-wishlistadmin', function () {
    return view('customer-wishlistadmin');
});

Route::get('/editadmin', function () {
    return view('editadmin');
});

Route::get('/faqadmin', function () {
    return view('faqadmin');
});

Route::get('/postadmin', function () {
    return view('postadmin');
});

Route::get('/textadmin', function () {
    return view('textadmin');
});

Route::get('/text-rightadmin', function () {
    return view('text-rightadmin');
});

Route::post('/login','masterController@login');

Route::get('/detailadmin/{id}','masterController@showadmin');

Route::get('/showallproductadmin','masterController@showallproductadmin');

Route::get('/viewupdateproduct/{id}','masterController@viewupdateproduct');

Route::get('/viewdeleteproduct/{id}','masterController@viewdeleteproduct');

Route::post('/deleteproduct','masterController@deleteproduct');
Route::post('/updateproduct','masterController@updateproduct');

// Route::get('/deleteproduct', function () {
//     return view('deleteproduct');
// });

Route::get('/coba',function(){
    return view('coba');
});