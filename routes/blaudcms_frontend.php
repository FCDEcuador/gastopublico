<?php

/*
|--------------------------------------------------------------------------
| Web Routes Frontend
|--------------------------------------------------------------------------
|
| Aquí es donde debe registrar las rutas web para el FRONTEND de la aplicacion 
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo que contiene
| el "web" middleware group.
|
*/

/*
Route::get('/', function(){
	return redirect()->route('home');
});*/

Route::get('/', 'Frontend\HomeController@home')->name('home');


Route::get('/sobre-nosotros', 'Frontend\StaticPagesController@about')->name('about-us');
Route::get('/contactenos', 'Frontend\StaticPagesController@contact')->name('contact-us');
Route::post('/contactenos','Frontend\StaticPagesController@contactSend')->name('contact-us.send');

Route::get('/indicadores', 'Frontend\IndicatorsController@index')->name('indicators');

Route::match(['GET', 'POST'], '/{contentCategorySlug?}', 'Frontend\ContentCategoriesController@index')->name('content-category');
Route::match(['GET', 'POST'], '/{contentCategorySlug?}/tag/{sTag?}', 'Frontend\ContentCategoriesController@index')->name('content-category-with-tag');
Route::match(['GET', 'POST'], '/{contentCategorySlug?}/{contentArticleSlug?}', 'Frontend\ContentCategoriesController@show')->name('content-article');

