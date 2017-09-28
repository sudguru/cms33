<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});



Auth::routes();
//later
//Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');

Route::post('/spy/{newuser}', 'SpyController@index');
Route::post('/spy/goback/now', 'SpyController@goback');

Route::get('/setlanguage/{language}', 'ProfileController@setlanguage');

Route::get('/admins' , 'Auth\RegisterController@index');
Route::get('/admins/{user}/edit', 'Auth\RegisterController@edit');
Route::patch('/admins/{user}', 'Auth\RegisterController@update');
Route::delete('/admins/{user}', 'Auth\RegisterController@destroy');

Route::get('/profile/{user}/edit' ,'ProfileController@edit');
Route::patch('/profile/{user}' ,'ProfileController@update');

//Super user (Create and Delete Admin No Edit)

Route::get('/sites', 'SitesController@index');
Route::get('/sites/create', 'SitesController@create');
Route::get('/sites/{site}', 'SitesController@show');
Route::post('/sites', 'SitesController@store');
Route::get('/sites/{site}/edit', 'SitesController@edit');
Route::patch('/sites/{site}', 'SitesController@update');
Route::delete('/sites/{site}', 'SitesController@destroy');

Route::post('/sites/languages/{site}', 'SitetabsController@savelanguage');
Route::get('/sites/deletelanguages/{site}/{lang}', 'SitetabsController@deletelanguage');
Route::post('/sites/ads/{site}', 'SitetabsController@savead');
Route::get('/sites/deleteads/{site}/{ad}', 'SitetabsController@deletead');
Route::post('/sites/socials/{site}', 'SitetabsController@savesocial');
Route::get('/sites/deletesocials/{site}/{network}', 'SitetabsController@deletesocial');
Route::post('/sites/currencies/{site}', 'SitetabsController@savecurrency');
Route::get('/sites/deletecurrencies/{site}/{network}', 'SitetabsController@deletecurrency');


Route::get('/siteinfo', 'Cms\SiteinfoController@index');
Route::post('/siteinfo', 'Cms\SiteinfoController@store');
Route::post('/siteinfosaveogimage', 'Cms\SiteinfoController@siteinfosaveogimage');
Route::post('/siteinforemoveogimage', 'Cms\SiteinfoController@siteinforemoveogimage');

Route::get('/googlemap' , 'Cms\SettingsController@googlemap');
Route::post('/googlemap', 'Cms\SettingsController@savegooglemap');

Route::get('/generalsettings', 'Cms\SettingsController@generalsettings');
Route::post('/generalsettings', 'Cms\SettingsController@savegeneralsettings');

Route::get('/socialsettings', 'Cms\SettingsController@socialsettings');
Route::post('/socialsettings', 'Cms\SettingsController@savesocialsettings');
Route::post('/socialsettings/edit', 'Cms\SettingsController@editsocialsettings');

Route::get('/analytics', 'Cms\SettingsController@analytics');

Route::get('/sharingcode', 'Cms\SettingsController@sharingcode');


//Admin, Editor, Author, Contributor after login
Route::get('/dashboard' , 'DashboardController@index');
Route::get('/dashboardsimple' , 'DashboardSimpleController@index');


//Admin user Only - Add and Edit Users
Route::get('/users' , 'Cms\UsersController@index');
Route::get('/users/create' , 'Cms\UsersController@create');
Route::post('/users' , 'Cms\UsersController@store');
Route::get('/users/{user}/edit' , 'Cms\UsersController@edit');
Route::patch('/users/{user}' , 'Cms\UsersController@update');
Route::delete('/users/{user}' , 'Cms\UsersController@destroy');



//CMS Functions
//Route::get('/homepage', 'Cms\PostsController@homepage');
//Route::get('/homepage/{post}', 'Cms\PostsController@homepageSave');
Route::get('/posts' ,'Cms\PostsController@index');
Route::get('/posts/create' ,'Cms\PostsController@create');
Route::post('/posts' , 'Cms\PostsController@store');
Route::get('/posts/{post}/edit' , 'Cms\PostsController@edit');
Route::patch('/posts/{post}' , 'Cms\PostsController@update');
Route::delete('/posts/{post}' , 'Cms\PostsController@destroy');
Route::post('/posts/gallery','Cms\PostsController@indexgallery');
Route::post('/posts/reorder','Cms\PostsController@reorder');


Route::get('featuredposts' ,'Cms\FeaturedpostController@index');
Route::post('featuredposts/reorder' ,'Cms\FeaturedpostController@reorder');
Route::post('featuredposts/{post}' ,'Cms\FeaturedpostController@store');
Route::delete('featuredposts/{featuredpost}' ,'Cms\FeaturedpostController@destroy');



// Route::get('/upload', function () {
//     return view('cms.pages.upload');
// });
Route::post('/uploadimage' , 'Cms\UploadController@uploadimage');
Route::post('/savecaption' , 'Cms\UploadController@savecaptionandinsertimagetopost');
Route::post('/searchimage' , 'Cms\UploadController@searchimage');
Route::post('/uploadfile' , 'Cms\UploadController@uploadfile');
Route::post('/savecaptionfile' , 'Cms\UploadController@savecaptionandinsertfilelink');
Route::post('/searchfile' , 'Cms\UploadController@searchfile');

Route::get('/categories' ,'Cms\CategoriesController@index');
Route::post('/categories' , 'Cms\CategoriesController@store');

Route::get('/categorybanner', 'Cms\CategoryBannerController@index');
Route::post('/savecategorybanner', 'Cms\CategoryBannerController@uploadimage');
Route::post('/savecategorydescription', 'Cms\CategoryBannerController@update');
Route::get('/getcategory/{category}','Cms\CategoryBannerController@getcategory');

Route::get('/getfields/{category}', 'Cms\CustomfieldsController@getfields');
Route::get('/customfields', 'Cms\CustomfieldsController@index');
Route::post('/savecustomfield', 'Cms\CustomfieldsController@store');
Route::post('/updatecustomfield', 'Cms\CustomfieldsController@update');
Route::get('/deletecustomfield/{customfield}', 'Cms\CustomfieldsController@destroy');

Route::get('/menus/{menu}' ,'Cms\MenusController@index');
Route::post('/menus/{menu}' , 'Cms\MenusController@store');

Route::get('/products' ,'Cms\ProductController@index');
Route::get('/products/create' ,'Cms\ProductController@create');
Route::post('/products' , 'Cms\ProductController@store');
Route::get('/products/{product}/edit' , 'Cms\ProductController@edit');
Route::patch('/products/{product}' , 'Cms\ProductController@update');
Route::delete('/products/{product}' , 'Cms\ProductController@destroy');

Route::post('/productpartial/{product}', 'Cms\ProductpartialController@update_unitsizecolor');
Route::post('/productpartial/addprice/{productprice}', 'Cms\ProductpartialController@update_price');

Route::post('/productpartial/images/{product}', 'Cms\ProductpartialController@productimage');
Route::get('/productpartial/images/{product}/{productimage}/delete', 'Cms\ProductpartialController@deleteimage');
Route::get('/productpartial/images/{product}/{productimage}/set', 'Cms\ProductpartialController@setimage');
Route::get('/productpartial/refresh/{product}', 'Cms\ProductpartialController@refreshimage');

Route::post('/productpartial/stockin/{product}', 'Cms\ProductpartialController@stockin');
Route::delete('/productpartial/deletestock/{product}/{stockin}', 'Cms\ProductpartialController@deletestockin');
Route::delete('/productpartial/deleteimage/{productimage}', 'Cms\ProductpartialController@deleteimage');



Route::get('/productsettings', 'Cms\ProducctsettingsController@index');
Route::get('/productsettings/sizes', 'Cms\ProducctsettingsController@sizes');
Route::post('/productsettings/sizes', 'Cms\ProducctsettingsController@sizessave');
Route::get('/productsettings/sizesdelete/{id}', 'Cms\ProducctsettingsController@sizesdelete');

Route::get('/productsettings/colors', 'Cms\ProducctsettingsController@colors');
Route::post('/productsettings/colors', 'Cms\ProducctsettingsController@colorssave');
Route::get('/productsettings/colorsdelete/{id}', 'Cms\ProducctsettingsController@colorsdelete');

Route::get('/productsettings/materialtypes', 'Cms\ProducctsettingsController@materialtypes');
Route::post('/productsettings/materialtypes', 'Cms\ProducctsettingsController@materialtypessave');
Route::get('/productsettings/materialtypesdelete/{id}', 'Cms\ProducctsettingsController@materialtypesdelete');

Route::get('/productsettings/brands', 'Cms\ProducctsettingsController@brands');
Route::post('/productsettings/brands', 'Cms\ProducctsettingsController@brandssave');
Route::get('/productsettings/brandsdelete/{id}', 'Cms\ProducctsettingsController@brandsdelete');
Route::post('/savebrandimage', 'Cms\ProducctsettingsController@savebrandimage');
Route::get('/deletebrandimage/{brand}', 'Cms\ProducctsettingsController@deletebrandimage');

Route::get('featuredproducts' ,'Cms\FeaturedproductController@index');
Route::post('featuredproducts/reorder' , 'Cms\FeaturedproductController@reorder');
Route::post('featuredproducts/{product}' ,'Cms\FeaturedproductController@store');
Route::delete('featuredproducts/{featuredproduct}' , 'Cms\FeaturedproductController@destroy');




Route::get('/productcategories' ,'Cms\ProductcategoriesController@index');
Route::post('/productcategories' , 'Cms\ProductcategoriesController@store');
Route::get('/productcategorybanner', 'Cms\ProductcategoryBannerController@index');
Route::post('/saveproductcategorybanner', 'Cms\ProductcategoryBannerController@uploadimage');
Route::post('/saveproductcategorydescription', 'Cms\ProductcategoryBannerController@update');
Route::get('/getproductcategory/{productcategory}','Cms\ProductcategoryBannerController@getcategory');

Route::get('/currencyexchange', 'Cms\CurrencyController@index');
Route::post('/currencyexchange', 'Cms\CurrencyController@store');


Route::get('/galleries', 'Cms\GalleriesController@index');
Route::get('/galleries/create', 'Cms\GalleriesController@create');
Route::get('/galleries/{gallery}/edit', 'Cms\GalleriesController@edit');
Route::post('/galleries', 'Cms\GalleriesController@store'); //galleries + gallerydatas
Route::post('/gallerycaption/{gallerypic}', 'Cms\GalleriesController@storecaption'); //gallerydatapics for each pic
Route::post('/uploadgallerypic', 'Cms\GalleriesController@upload'); //images to the database to gallerypics


Route::get('/ads/{pos}','Cms\AdsController@index');
Route::post('/saveadbanner' , 'Cms\AdsController@uploadimage');
Route::post('/ads/reorder', 'Cms\AdsController@reorder');
Route::post('/ads/edit', 'Cms\AdsController@update');
Route::post('/ads/delete', 'Cms\AdsController@destroy');

Route::post('/publish', 'PublishController@publish');
Route::post('/setwelcome', 'DashboardController@setwelcome');
Route::post('/setmessage', 'DashboardController@setmessage');
Route::post('/setnotificationcategory', 'DashboardController@setnotificationcategory');
