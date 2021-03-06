<?php




//===============================================================
//
// AUTHENTICATION
//
//===============================================================

Route::redirect("/", "/admin/login", 301);
Route::get("/login", "LoginController@showLoginForm") -> name("admin.login");
Route::post("/login", "LoginController@login");




Route::group([
    "middleware" => "auth:admin",
    "as"         => "admin."
], function () {

    //===============================================================
    //
    // DASHBOARD
    //
    //===============================================================

    Route::get("/dashboard", "DashboardController@index") -> name("dashboard");



    //===============================================================
    //
    // MODERATORS
    //
    //===============================================================

    Route::resource("/moderator", "ModeratorController");



    //===============================================================
    //
    // USERS
    //
    //===============================================================

    Route::resource("/user", "UserController");



    //===============================================================
    //
    // PROFILE
    //
    //===============================================================

    Route::get("/profile", "AdminController@showProfile") -> name("profile");
    Route::put("/profile", "AdminController@updateProfile");



    //===============================================================
    //
    // SETTING
    //
    //===============================================================

    Route::get("/setting", "SettingController@edit") -> name("setting.edit");
    Route::put("/setting", "SettingController@update");

    //===============================================================
    //
    // Countries
    //
    //===============================================================

    Route::resource("/country", "CountryController");
    
    //===============================================================
    //
    // Cities
    //
    //===============================================================

    Route::resource("/city", "CityController");
 
    //===============================================================
    //
    // Category
    //
    //===============================================================

    Route::resource("/category", "CategoryController");
    
    //===============================================================
    //
    // Pages
    //
    //===============================================================

    Route::resource("/pages", "PageController");
    
    //===============================================================
    //
    // Products
    //
    //===============================================================

    Route::resource("/product", "ProductController");
    
    //===============================================================
    //
    // Offer
    //
    //===============================================================

    Route::resource("/offer", "OfferController");



    //===============================================================
    //
    // LOGOUT
    //
    //===============================================================

    Route::get("/logout", "LoginController@logout") -> name("logout");

});