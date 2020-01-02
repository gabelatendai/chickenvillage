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

Route::get('/',[
    'uses' => 'FrontendController@index',
    'as' =>'index'
]);
Route::get('/admin/about',[
    'uses' => 'HomeController@about',
    'as' =>'about'
]) ->middleware('admin');

Route::get('/admin/edit/{id}',[
    'uses' => 'HomeController@edit_about',
    'as' =>'about.edit'
]);
Route::get('/page-news/{slug}',[
    'uses' => 'FrontendController@single',
    'as' =>'page-news'
]);
Route::post('/about/update/{id}',[
    'uses' => 'HomeController@update',
    'as' =>'about.update'
]);

Route::get('/homepage-2', [
    'uses' => 'FrontendController@homepage_2',
    'as' =>'/homepage-2'
]);
Route::get('/homepage-3', [
    'uses' => 'FrontendController@homepage_3',
    'as' =>'/homepage-3'
]);
Route::get('/homepage-4', [
    'uses' => 'FrontendController@homepage_4',
    'as' =>'/homepage-4'
]);
Route::get('/homepage-5', [
    'uses' => 'FrontendController@homepage_5',
    'as' =>'/homepage-5'
]);
Route::get('/homepage-6', [
    'uses' => 'FrontendController@homepage_6',
    'as' =>'/homepage-6'
]);

Route::get('/homepage-9-boxed', [
    'uses' => 'FrontendController@homepage_9',
    'as' =>'/homepage-9-boxed'
]);

Route::get('/homepage-10-wide', [
    'uses' => 'FrontendController@homepage_10',
    'as' =>'/homepage-10-wide'
]);
Route::get('/homepage-12-shop', [
    'uses' => 'FrontendController@homepage_12',
    'as' =>'/homepage-12-shop'
]);
Route::get('/homepage-11-dark', [
    'uses' => 'FrontendController@homepage_11',
    'as' =>'/homepage-11-dark'
]);
Route::get('/page-contacts', [
    'uses' => 'FrontendController@contacts',
    'as' =>'/page-contacts'
]);
#-----------------------------------------------

Route::get('/menu-board', [
    'uses' => 'FrontendController@board',
    'as' =>'/menu-board'
]);

Route::get('/menu-classic',[
    'uses' => 'FrontendController@classic',
    'as' =>'/menu-classic'
]);

Route::get('/menu-gallery',[
    'uses' => 'FrontendController@gallery',
    'as' =>'/menu-gallery'
]);

Route::get('/menu-simple',[
    'uses' => 'FrontendController@simple',
    'as' =>'/page-simple'
]);
Route::get('/page-about',[
    'uses' => 'FrontendController@about',
    'as' =>'/page-about'
]);

Route::get('/page-book-table',[
    'uses' => 'FrontendController@book',
    'as' =>'/page-book-table'
]);
Route::get('/page-chefs',[
    'uses' => 'FrontendController@chefs',
    'as' =>'/page-chefs'
]);
Route::get('/page-gallery', [
    'uses' => 'FrontendController@pgallery',
    'as' =>'/page-gallery'
]);

Route::get('/blog-carousel',[
    'uses' => 'FrontendController@carousel',
    'as' =>'/page-carousel'
]);
Route::get('/shop-4cols',[
    'uses' => 'FrontendController@cols',
    'as' =>'/page-4cols'
]);
Route::get('/shop-cart',[
    'uses' => 'FrontendController@cart',
    'as' =>'/page-cart'
]);

Route::get('/page-faqs',[
    'uses' => 'FrontendController@faqs',
    'as' =>'/page-faqs'

]);

/*-----------meals routes----*/
Route::get('/meals',[
    'uses' => 'MealsController@index',
    'as' =>'meals.index'
]);

Route::get('/meals/edit/{id}',[
    'uses' => 'MealsController@edit',
    'as' =>'meals.edit'
]);
Route::get('/meals/destroy/{id}',[
    'uses' => 'MealsController@destroy',
    'as' =>'meals.destroy'
]);


Route::get('/meals/create',[
    'uses' => 'MealsController@create',
    'as' =>'meals.create'
]);
Route::post('/meals/update/{id}',[
    'uses' => 'MealsController@update',
    'as' =>'meals.update'
]);

Route::post('/meals/store',[
    'uses' => 'MealsController@store',
    'as' =>'meals.store'
]);
/*-----------news routes----*/
Route::get('/news',[
    'uses' => 'NewsController@index',
    'as' =>'news.index'
]);

Route::get('/news/edit/{id}',[
    'uses' => 'NewsController@edit',
    'as' =>'news.edit'
]);
Route::get('/news/destroy/{id}',[
    'uses' => 'NewsController@destroy',
    'as' =>'news.destroy'
]);

Route::get('/news/create',[
    'uses' => 'NewsController@create',
    'as' =>'news.create'
]);
Route::post('/news/update/{id}',[
    'uses' => 'NewsController@update',
    'as' =>'news.update'
]);

Route::post('/news/store',[
    'uses' => 'NewsController@store',
    'as' =>'news.store'
]);
/*-----------gallery routes----*/
Route::get('/gallery',[
    'uses' => 'GalleriesController@index',
    'as' =>'gallery.index'
]);

Route::get('/gallery/edit/{id}',[
    'uses' => 'GalleriesController@edit',
    'as' =>'gallery.edit'
]);
Route::get('/gallery/destroy/{id}',[
    'uses' => 'GalleriesController@destroy',
    'as' =>'gallery.destroy'
]);

Route::get('/gallery/create',[
    'uses' => 'GalleriesController@create',
    'as' =>'gallery.create'
]);
Route::post('/gallery/update/{id}',[
    'uses' => 'GalleriesController@update',
    'as' =>'gallery.update'
]);

Route::post('/gallery/store',[
    'uses' => 'GalleriesController@store',
    'as' =>'gallery.store'
]);

/*-----------dishes routes----*/
Route::get('/dishes',[
    'uses' => 'DishesController@index',
    'as' =>'dishes.index'
]);

Route::get('/dishes/edit/{id}',[
    'uses' => 'DishesController@edit',
    'as' =>'dishes.edit'
]);
Route::get('/dishes/destroy/{id}',[
    'uses' => 'DishesController@destroy',
    'as' =>'dishes.destroy'
]);

Route::get('/dishes/create',[
    'uses' => 'DishesController@create',
    'as' =>'dishes.create'
]);
Route::post('/dishes/update/{id}',[
    'uses' => 'DishesController@update',
    'as' =>'dishes.update'
]);

Route::post('/dishes/store',[
    'uses' => 'DishesController@store',
    'as' =>'dishes.store'
]);
/*-----------banners routes----*/
Route::get('/banners',[
    'uses' => 'BannersController@index',
    'as' =>'banners.index'
]);

Route::get('/banners/edit/{id}',[
    'uses' => 'BannersController@edit',
    'as' =>'banners.edit'
]);
Route::get('/banners/destroy/{id}',[
    'uses' => 'BannersController@destroy',
    'as' =>'banners.destroy'
]);

Route::get('/banners/create',[
    'uses' => 'BannersController@create',
    'as' =>'banners.create'
]);
Route::post('/banners/update/{id}',[
    'uses' => 'BannersController@update',
    'as' =>'banners.update'
]);

Route::post('/banners/save',[
    'uses' => 'BannersController@store',
    'as' =>'banners.save'
]);
/*-----------drinks routes----*/

Route::get('/drinks',[
    'uses' => 'DrinksController@index',
    'as' =>'drinks.index'
]);

Route::get('/drinks/edit/{id}',[
    'uses' => 'DrinksController@edit',
    'as' =>'drinks.edit'
]);
Route::get('/drinks/destroy/{id}',[
    'uses' => 'DrinksController@destroy',
    'as' =>'drinks.destroy'
]);

Route::get('/drinks/create',[
    'uses' => 'DrinksController@create',
    'as' =>'drinks.create'
]);
Route::post('/drinks/update/{id}',[
    'uses' => 'DrinksController@update',
    'as' =>'drinks.update'
]);

Route::post('/drinks/save',[
    'uses' => 'DrinksController@store',
    'as' =>'drinks.save'
]);
/*!!!!!!!!-----------members routes----*/

Route::get('/team',[
    'uses' => 'MembersController@index',
    'as' =>'team.index'
]);

Route::get('/team/edit/{id}',[
    'uses' => 'MembersController@edit',
    'as' =>'team.edit'
]);
Route::get('/team/destroy/{id}',[
    'uses' => 'MembersController@destroy',
    'as' =>'team.destroy'
]);

Route::get('/team/create',[
    'uses' => 'MembersController@create',
    'as' =>'team.create'
]);
Route::post('/team/update/{id}',[
    'uses' => 'MembersController@update',
    'as' =>'team.update'
]);

Route::post('/team/save',[
    'uses' => 'MembersController@store',
    'as' =>'team.save'
]);
/*!!!!!!!!-----------testimonials routes----*/

Route::get('recent-post', [
    'uses' => 'FrontendController@recent',
    'as' =>'recent-post'
]);

Route::get('/page-testimonials', [
    'uses' => 'FrontendController@testimonial',
    'as' =>'/page-testimonials'
]);

Route::get('/testimonial', [
    'uses' => 'MealsController@index_testimonial',
    'as' =>'/testimonial.index'
]);
Route::get('/testimonial/edit/{id}',[
    'uses' => 'MealsController@edit_testmonial',
    'as' =>'testimonial.edit'
]);
Route::get('/testimonial/destroy/{id}',[
    'uses' => 'MealsController@destroy_testimonial',
    'as' =>'testimonial.destroy'
]);
Route::get('/testimonial/create',[
    'uses' => 'MealsController@create_testimonial',
    'as' =>'testimonial.create'
]);
Route::post('/testimonial/update/{id}',[
    'uses' => 'MealsController@update_testimonial',
    'as' =>'testimonial.update'
]);
Route::post('/testimonial/store',[
    'uses' => 'MealsController@test_store',
    'as' =>'testimonial.store'
]);
/*!!!!!!!!-----------faqs routes----*/



Route::get('/faqs', [
    'uses' => 'FaqsController@index',
    'as' =>'faqs.index'
]);
Route::get('/faqs/destroy/{id}',[
    'uses' => 'FaqsController@destroy',
    'as' =>'faqs.destroy'
]);
Route::get('/faqs/create',[
    'uses' => 'FaqsController@create',
    'as' =>'faqs.create'
]);
Route::post('/faqs/store',[
    'uses' => 'FaqsController@store',
    'as' =>'faqs.store'
]);
Route::post('/respond/store',[
    'uses' => 'FaqsController@store_respond',
    'as' =>'respond.store'
]);

Route::get('/results', function (){

$news = \App\News::where('title','like','%'. request('query').'%')->get();
return view('results')->with('news',$news)
    ->with('title','Search results:'.request('query'))
    ->with('banners',\App\Banners::first())
    ->with('abouts',\App\Abouts::all())
    ->with('posts',\App\News::orderBy('created_at','desc')->get()->take(3))
    ->with('query',request('query'));
});

Auth::routes();


//Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/auth/register', 'UsersController@create')->name('adduser');

Route::get('/admin/index', 'UsersController@index')->name('users');


Route::get('/users/make-admin/{id}',[
    'uses' => 'UsersController@remove',
    'as' =>'admin.remove'
])->middleware('admin');

Route::get('/users/not-admin/{id}',[
    'uses' => 'UsersController@add_permissions',
    'as' =>'admin.permissions'
])->middleware('admin');
Route::get('/users/delete/{id}',[
    'uses' => 'HomeController@destroy',
    'as' =>'admin.delete'
])->middleware('admin');


Route::get('/home', 'HomeController@index')->name('/dashboard');


Route::get('/dashboard',[
    'uses' => 'HomeController@dashboard',
    'as' =>'admin.dashboard'
]);