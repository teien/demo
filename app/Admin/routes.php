<?php

use App\Admin\Controllers\AdminProductsController;
use App\Admin\Controllers\AdminUserController;
use App\Admin\Controllers\AdminCommentsController;
use App\Admin\Controllers\AdminOrderDetailsController;
use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\AdminOrderController;
use App\Admin\Controllers\AdminContactsController;
use App\Admin\Controllers\AdminCatalogsController;
use App\Admin\Controllers\AdminCouponsController;
use App\Admin\Controllers\HomeController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/auth/user', AdminUserController::class);
    $router->resource('/products', AdminProductsController::class);
    $router->resource('/comments', AdminCommentsController::class);
    $router->resource('/order', AdminOrderController::class);
    $router->resource('/order-details', AdminOrderDetailsController::class);
    $router->resource('/contacts', AdminContactsController::class);
    $router->resource('/catalogs', AdminCatalogsController::class);
    $router->resource('/coupons', AdminCouponsController::class);



});



