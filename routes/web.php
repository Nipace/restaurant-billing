<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();
Route::post('/print','Cashier\BillController@print')->name('print');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['role:Super-Admin']], function () {
        Route::resource('settings', Admin\SettingController::class);
        Route::resource('permissions', Admin\PermissionController::class);
        Route::resource('roles', Admin\RoleController::class);
    });
    // Route::group(['middleware' => ['role:Super-Admin|Admin|Tester']], function () {

    // });


    Route::group(['middleware' => ['role:Super-Admin|Admin|Tester|User']], function () {
        Route::resource('users', Admin\UserController::class);
        Route::resource('foods', Admin\FoodController::class);
        Route::resource('stocks', Admin\StockController::class);
        Route::resource('category', Admin\CategoryController::class);
        Route::resource('coupons', Admin\CouponController::class);
        Route::resource('schemes', Admin\SchemeController::class);
        Route::get('report', 'Admin\ReportController@index')->name('report.index');
        Route::get('report/stocks', 'Admin\ReportController@stocks')->name('report.stocks');
        Route::get('report/orders', 'Admin\ReportController@orders')->name('report.orders');
        Route::get('report/users', 'Admin\ReportController@users')->name('report.users');
        Route::resource('tables', Admin\TableController::class);

    });
    Route::group(['middleware' => ['role:Super-Admin|Admin|Cashier|Tester|User']], function () {
        Route::get('report/current-user', 'Admin\ReportController@currentUserCollection')->name('report.currentUserCollection');
        Route::get('report/current-user/history', 'Admin\ReportController@historyCurrentUserCollection')->name('report.historyCurrentUser');
        Route::resource('dashboard', Admin\DashboardController::class);

        Route::resource('generalstocks', Cashier\StockController::class);
        Route::get('billing', 'Cashier\BillController@index')->name('billing.index');
        Route::post('billing/checkout', 'Cashier\BillController@checkout')->name('billing.checkout');


        Route::get('order/cancel/{order_id}', 'Admin\ReportController@cancelOrder')->name('order.cancel');
        Route::get('user/profile', 'Admin\UserController@profile')->name('user.profile');
    });
});

    // Route::get('billing/index', 'Cashier\BillController@index')->name('billing.index');

    // Route::post('billing\search', 'Cashier\BillController@search')->name('billing.search');

    // Route::get('/add-to-cart/{food}','Cashier\CartController@add')->name('cart.add');
    // Route::get('/cart','Cashier\CartController@index')->name('cart.index');
    // Route::get('/cart/destroy/{itemId}','Cashier\CartController@destroy')->name('cart.destroy');
    // Route::get('/cart/update/{rowId}','Cashier\CartController@update')->name('cart.update');
