<?php
/*
|--------------------------------------------------------------------------
|    Đa ngôn ngữ, hiện tại có tiếng việt và tiếng anh
|--------------------------------------------------------------------------
*/

// Đặt ngôn ngữ mặc định trong hệ thống là tiếng việt
App::setLocale('vi');

Route::get('/lang/{locale}', function ($locale) {

    // Cài thời gian hoạt động cho cookie
    $minutes = 43200; // 30 ngày
    switch($locale){
        case 'vi': Cookie::queue("lang", "vi", $minutes); break;
        case 'en': Cookie::queue("lang", "en", $minutes); break;
    }

    // Trả về trang trước đó
    return Redirect::back();
});

//hreflang trang chủ
Route::get('?={locale}', function ($locale) {

    // Cài thời gian hoạt động cho cookie
    $minutes = 43200; // 30 ngày
    switch($locale){
        case 'vi': Cookie::queue("lang", "vi", $minutes); break;
        case 'en': Cookie::queue("lang", "en", $minutes); break;
    }

    return view('home.home');
});

// Lấy ra cookie ngôn ngữ
if (!is_null(Cookie::get('lang'))) {
    $value = Crypt::decrypt(Cookie::get('lang'));
    if($value == 'vi') App::setLocale('vi');
    if($value == 'en') App::setLocale('en');
}

/*
|--------------------------------------------------------------------------
| // Router cho ngôn ngữ tiếng việt
|--------------------------------------------------------------------------
*/
    // Trang chủ
    Route::get('/', 'PublicController@getHomePage');

    // Nhóm điều khiển dành cho sản phẩm
    Route::group(['prefix' => 'san-pham'], function () {

        Route::get('/', 'PublicController@getAppPage');

        Route::get('/co-bay-ngua',       'PublicController@getIntroCoDiem');
        Route::get('/the-gioi-trollface','PublicController@getIntroTheGioiTrollface');
    });

    // Nhóm điều khiển dành cho services
    Route::group(['prefix' => 'dich-vu'], function () {

        Route::get('/',                'PublicController@getServicesPage');
        Route::get('/ung-dung-di-dong','PublicController@getAppDesignPage');
        Route::get('/thiet-ke-web',    'PublicController@getWebDesignPage');
        Route::get('/ung-dung-kinect', 'PublicController@getKinectDesignPage');
        Route::get('/dat-hang',        'PublicController@getOrderServicePage');
    });

    // Nhóm điều khiển dành cho blog
    Route::group(['prefix' => 'tin-tuc'], function () {

        Route::get('/',            'PublicController@getBlogPage');
        Route::get('/{id}-{furl}', 'PublicController@getBlogDetail');
        Route::get('/rss',         'PublicController@getRssPage');

        Route::post('/register-mail', 'PublicController@registerMail');
    });

    // Trang giới thiệu
    //Route::get('/gioi-thieu', 'PublicController@getAboutPage');

    // Tìm kiếm trong trang
    Route::get('/tim-kiem', 'PublicController@getSearchPage');

    // Link tiện ích ngoài luồng
    Route::get('/print', function () {
        return Redirect::to('https://drive.google.com/folderview?id=0B0bbTUQ3jzxtN0lXcmM3V3R0YXc&usp=sharing');
    });
	Route::get('/vi/san-pham/co-toan-viet-nam', function () {
        return Redirect::to('https://play.google.com/store/apps/details?id=com.htbros.cotoanvn&hl=vi');
    });




    // Authentication routes...
    Route::get('login',    'Auth\LoginController@getLogin');
    Route::post('login',   'Auth\LoginController@postLogin');
    // Route::get('register', 'Auth\AuthController@getRegister');
    // Route::post('register','Auth\AuthController@postRegister');
    Route::get('logout',   'Auth\AuthController@getLogout');

    // Routes for admin
    Route::post('changeAvatar',                'AdminController@changeAvatar');
    Route::post('blog/createNewBlog',          'AdminController@createNewBlog');
    Route::post('blog/deleteBlogItem',         'AdminController@deleteBlogItem');
    Route::post('blog/doUpdateBlogItemStatus', 'AdminController@doUpdateBlogItemStatus');
    Route::post('blog/doUpdateBlogThumbnail',  'AdminController@doUpdateBlogThumbnail');
    Route::post('blog/doUpdateBlogContent',    'AdminController@doUpdateBlogContent');