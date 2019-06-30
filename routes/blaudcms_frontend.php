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

Route::get('/', 'Frontend\HomeController@home')->name('home');


Route::get('/sobre-nosotros', 'Frontend\StaticPagesController@about')->name('about-us');
Route::get('/contactenos', 'Frontend\StaticPagesController@contact')->name('contact-us');
Route::post('/contactenos','Frontend\StaticPagesController@contactSend')->name('contact-us.send');





Route::match(['GET', 'POST'], '/{contentCategorySlug?}', 'Frontend\ContentCategoriesController@index')->name('content-category');
Route::match(['GET', 'POST'], '/{contentCategorySlug?}/{contentArticleSlug?}', 'Frontend\ContentCategoriesController@show')->name('content-article');

