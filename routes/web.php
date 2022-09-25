<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
/////////////////////===============WEB===============///////////
use App\Http\Controllers\HomeController;
/////////////////==============Backend=========================///////////////////
use App\Http\Controllers\auth\CustomAuthController;
use App\Http\Controllers\Backend\forgetPasswordController;
use App\Http\Controllers\Backend\changePasswordController;
////////////////////////=====Admin==========///////////////////
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SectionController;

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




///////////////////////======================USER Website=============////////////////

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [App\Http\Controllers\Front\ShopController::class, 'index'])->name('shop');
///////////////=================PAGES==============///////////////////
Route::get('/shop_details', [App\Http\Controllers\Front\Pages\ShopDetailsController::class, 'index'])->name('shop.details');
Route::get('/shoping_cart', [App\Http\Controllers\Front\Pages\ShopingCartController::class, 'index'])->name('shoping.cart');
Route::get('/check_out', [App\Http\Controllers\Front\Pages\CheckOutController::class, 'index'])->name('check.out');
Route::get('/blog_details', [App\Http\Controllers\Front\Pages\BlogDetailsController::class, 'index'])->name('blog.details');
//////////////////////////END PAGES======================////////////////////////
Route::get('/blog', [App\Http\Controllers\Front\BlogController::class, 'index'])->name('blog');

Route::get('/contact', [App\Http\Controllers\Front\ContactController::class, 'index'])->name('contact');


///////////////=============END USER=============//////////////////////


/////======================BackendAdminLogin============/////////
Route::post('/auth.update/{id}', [App\Http\Controllers\auth\CustomAuthController::class, 'update'])->name('auth.update');
Route::POST('/auth/save', [App\Http\Controllers\auth\CustomAuthController::class, 'save'])->name('auth.save');
Route::POST('/auth/check', [App\Http\Controllers\auth\CustomAuthController::class, 'check'])->name('auth.check');
Route::POST('/auth/signout', [App\Http\Controllers\auth\CustomAuthController::class, 'signout'])->name('auth.signout');

Route::get('/login', [App\Http\Controllers\auth\CustomAuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\auth\CustomAuthController::class, 'register'])->name('register');


/////////====================ForgetPassword================////////
Route::get('/forget/password', [App\Http\Controllers\Backend\forgetPasswordController::class, 'forgetPassView'])->name('forgetPassView');
Route::post('/forget/password/link', [App\Http\Controllers\Backend\forgetPasswordController::class, 'forgetPasslink'])->name('forgetPasslink');
Route::get('/reset-password/{token}', [App\Http\Controllers\Backend\forgetPasswordController::class, 'showResetForm'])->name('reset.password.get');
Route::post('/reset-password', [App\Http\Controllers\Backend\forgetPasswordController::class, 'updatePass'])->name('resetPass');



Route::group(['middleware' => ['Authcheck']], function () {

    /////======================BackendAdmin============/////////
    Route::get('/home', [App\Http\Controllers\Backend\homeController::class, 'home']);


    /////======================BackendAdminDashboard============/////////
    Route::get('/dashboard', [App\Http\Controllers\Dashboard\dashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Dashboard\dashboardController::class, 'dashboardView'])->name('dashboardView');


    ///////====================ChangePassword==================/////////
    Route::get('/change/password', [App\Http\Controllers\Backend\changePasswordController::class, 'index'])->name('changePass');
    Route::post('/changepassword', [App\Http\Controllers\Backend\changePasswordController::class, 'updatePass'])->name('updatePass');


    ////////==========EditProfile=============//////////////
    Route::get('/editProfile', [App\Http\Controllers\Backend\profileController::class, 'profile'])->name('EditProfile');
    ////////////////========ViewProfile===============////////
    Route::get('/ViewProfile', [App\Http\Controllers\Backend\profileController::class, 'vewiProfile'])->name('ViewProfile');
});

///////////////////====================Admin================///////////////
/////////////////////===================Category==========================/////////////////////
Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');
Route::post('/new.category', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('new.category');
Route::get('/category.manage', [App\Http\Controllers\Admin\CategoryController::class, 'manage'])->name('category.manage');
Route::get('/category.edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category.update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
// Route::get('/category.delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'category_delete'])->name('category.delete');


//////////////=====================Section=========================///////////////////
Route::get('/section', [App\Http\Controllers\Admin\SectionController::class, 'index'])->name('section');
Route::post('/new.section', [App\Http\Controllers\Admin\SectionController::class, 'create'])->name('new.section');
Route::get('/section.manage', [App\Http\Controllers\Admin\SectionController::class, 'manage'])->name('section.manage');
Route::get('/section.edit/{id}', [App\Http\Controllers\Admin\SectionController::class, 'edit'])->name('section.edit');
Route::post('/section.update/{id}', [App\Http\Controllers\Admin\SectionController::class, 'update'])->name('section.update');
// Route::get('/section.delete/{id}', [App\Http\Controllers\Admin\SectionController::class, 'section_delete'])->name('section.delete');


//////////////////////////=============Brands==========/////////////////////////
Route::get('/brand', [App\Http\Controllers\Admin\BrandsController::class, 'index'])->name('brand');
Route::post('/new.brand', [App\Http\Controllers\Admin\BrandsController::class, 'create'])->name('new.brand');
Route::get('/brand.manage', [App\Http\Controllers\Admin\BrandsController::class, 'manage'])->name('brand.manage');
Route::get('/brand.edit/{id}', [App\Http\Controllers\Admin\BrandsController::class, 'edit'])->name('brand.edit');
Route::post('/brand.update/{id}', [App\Http\Controllers\Admin\BrandsController::class, 'update'])->name('brand.update');
// Route::get('/brand.delete/{id}', [App\Http\Controllers\Admin\BrandsController::class, 'brand_delete'])->name('brand.delete');




////////////////////////==================Manufacfures=================================////////////////////
Route::get('/manufacfure', [App\Http\Controllers\Admin\ManufacfuresController::class, 'index'])->name('manufacfure');
Route::post('/new.manufacfure', [App\Http\Controllers\Admin\ManufacfuresController::class, 'create'])->name('new.manufacfure');
Route::get('/manufacfure.manage', [App\Http\Controllers\Admin\ManufacfuresController::class, 'manage'])->name('manufacfure.manage');
Route::get('/manufacure.edit/{id}', [App\Http\Controllers\Admin\ManufacfuresController::class, 'edit'])->name('manufacure.edit');
Route::post('/manufacfure.update/{id}', [App\Http\Controllers\Admin\ManufacfuresController::class, 'update'])->name('manufacfure.update');
// Route::get('/manufacfure.delete/{id}', [App\Http\Controllers\Admin\ManufacfuresController::class, 'manufacfure_delete'])->name('manufacfure.delete');


///////////////////////////=====================UOM=============///////////////////
Route::get('/uom', [App\Http\Controllers\Admin\UOMController::class, 'index'])->name('uom');
Route::post('new.uom', [App\Http\Controllers\Admin\UOMController::class, 'create'])->name('new.uom');
Route::get('/uom.manage', [App\Http\Controllers\Admin\UOMController::class, 'manage'])->name('uom.manage');
Route::get('/uom.edit/{id}', [App\Http\Controllers\Admin\UOMController::class, 'edit'])->name('uom.edit');
Route::post('/uom.update/{id}', [App\Http\Controllers\Admin\UOMController::class, 'update'])->name('uom.update');
// Route::get('/uom.delete/{id}', [App\Http\Controllers\Admin\UOMController::class, 'uom_delete'])->name('uom.delete');

///////////////////////////=====================Product=============///////////////////
Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product');
Route::post('new.product', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('new.product');
Route::get('/product.manage', [App\Http\Controllers\Admin\ProductController::class, 'manage'])->name('product.manage');
Route::get('/product.edit/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product.edit');
Route::post('/product.update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('product.update');
Route::get('/product.delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'product_delete'])->name('product.delete');
Route::get('/product.details/{id}', [App\Http\Controllers\Admin\ProductController::class, 'details'])->name('product.details');

///////////////////////////=====================Customer=============///////////////////
Route::get('/customer', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customer');
Route::post('new.customer', [App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('new.customer');
Route::get('/customer.manage', [App\Http\Controllers\Admin\CustomerController::class, 'manage'])->name('customer.manage');
// Route::get('/customer.edit/{id}',[App\Http\Controllers\Admin\CustomerController::class,'edit'])->name('customer.edit');
// Route::post('/customer.update/{id}',[App\Http\Controllers\Admin\CustomerController::class,'update'])->name('customer.update');
Route::get('/customer.delete/{id}', [App\Http\Controllers\Admin\CustomerController::class, 'customer_delete'])->name('customer.delete');

///////////////////////////=====================TransactionTypesController=============///////////////////
Route::get('/transaction', [App\Http\Controllers\Admin\TransactionTypesController::class, 'index'])->name('transaction');
Route::post('new.transaction', [App\Http\Controllers\Admin\TransactionTypesController::class, 'create'])->name('new.transaction');
Route::get('/transaction.manage', [App\Http\Controllers\Admin\TransactionTypesController::class, 'manage'])->name('transaction.manage');
Route::get('/transaction.edit/{id}', [App\Http\Controllers\Admin\TransactionTypesController::class, 'edit'])->name('transaction.edit');
Route::post('/transaction.update/{id}', [App\Http\Controllers\Admin\TransactionTypesController::class, 'update'])->name('transaction.update');
Route::get('/transaction.delete/{id}', [App\Http\Controllers\Admin\TransactionTypesController::class, 'transaction_delete'])->name('transaction.delete');

//////////////////////////=====================SupplierController=============///////////////////
Route::get('/supplier', [App\Http\Controllers\Admin\SupplierController::class, 'index'])->name('supplier');
Route::post('new.supplier', [App\Http\Controllers\Admin\SupplierController::class, 'create'])->name('new.supplier');
Route::get('/supplier.manage', [App\Http\Controllers\Admin\SupplierController::class, 'manage'])->name('supplier.manage');
Route::get('/supplier.edit/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'edit'])->name('supplier.edit');
Route::post('/supplier.update/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'update'])->name('supplier.update');
Route::get('/supplier.delete/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'supplier_delete'])->name('supplier.delete');

//////////////////////////=====================StatusController=============///////////////////
Route::get('/status', [App\Http\Controllers\Admin\StatusController::class, 'index'])->name('status');
Route::post('new.status', [App\Http\Controllers\Admin\StatusController::class, 'create'])->name('new.status');
Route::get('/status.manage', [App\Http\Controllers\Admin\StatusController::class, 'manage'])->name('status.manage');
Route::get('/status.edit/{id}', [App\Http\Controllers\Admin\StatusController::class, 'edit'])->name('status.edit');
Route::post('/status.update/{id}', [App\Http\Controllers\Admin\StatusController::class, 'update'])->name('status.update');
Route::get('/status.delete/{id}', [App\Http\Controllers\Admin\StatusController::class, 'status_delete'])->name('status.delete');


//////////////////======================HR Module =============================//////////////
//////////////////////////=====================StatusController=============///////////////////
Route::get('/department', [App\Http\Controllers\Admin\HR\DepartmentController::class, 'index'])->name('department');
Route::post('new.department', [App\Http\Controllers\Admin\HR\DepartmentController::class, 'create'])->name('new.department');
Route::get('/department.manage', [App\Http\Controllers\Admin\HR\DepartmentController::class, 'manage'])->name('department.manage');
Route::get('/department.edit/{id}', [App\Http\Controllers\Admin\HR\DepartmentController::class, 'edit'])->name('department.edit');
Route::post('/department.update/{id}', [App\Http\Controllers\Admin\HR\DepartmentController::class, 'update'])->name('department.update');
Route::get('/department.delete/{id}', [App\Http\Controllers\Admin\HR\DepartmentController::class, 'department_delete'])->name('department.delete');

//////////////////////////=====================PositionController=============///////////////////
Route::get('/position', [App\Http\Controllers\Admin\HR\PositionController::class, 'index'])->name('position');
Route::post('new.position', [App\Http\Controllers\Admin\HR\PositionController::class, 'create'])->name('new.position');
Route::get('/position.manage', [App\Http\Controllers\Admin\HR\PositionController::class, 'manage'])->name('position.manage');
Route::get('/position.edit/{id}', [App\Http\Controllers\Admin\HR\PositionController::class, 'edit'])->name('position.edit');
Route::post('/position.update/{id}', [App\Http\Controllers\Admin\HR\PositionController::class, 'update'])->name('position.update');
Route::get('/position.delete/{id}', [App\Http\Controllers\Admin\HR\PositionController::class, 'position_delete'])->name('position.delete');

//////////////////////////=====================PersonController=============///////////////////
Route::get('/person', [App\Http\Controllers\Admin\HR\PersonController::class, 'index'])->name('person');
Route::post('new.person', [App\Http\Controllers\Admin\HR\PersonController::class, 'create'])->name('new.person');
Route::get('/person.manage', [App\Http\Controllers\Admin\HR\PersonController::class, 'manage'])->name('person.manage');
Route::get('/person.edit/{id}', [App\Http\Controllers\Admin\HR\PersonController::class, 'edit'])->name('person.edit');
Route::post('/person.update/{id}', [App\Http\Controllers\Admin\HR\PersonController::class, 'update'])->name('person.update');
Route::get('/person.delete/{id}', [App\Http\Controllers\Admin\HR\PersonController::class, 'person_delete'])->name('person.delete');
Route::get('/person.status/{id}', [App\Http\Controllers\Admin\HR\PersonController::class, 'updateStatus'])->name('person.status');
Route::get('/person.details/{id}', [App\Http\Controllers\Admin\HR\PersonController::class, 'details'])->name('person.details');

//////////////////////////=====================ProductGroupsController=============///////////////////
Route::get('/productgroups', [App\Http\Controllers\Admin\Product\ProductGroupsController::class, 'index'])->name('productgroups');
Route::post('new.productgroups', [App\Http\Controllers\Admin\Product\ProductGroupsController::class, 'create'])->name('new.productgroups');
Route::get('/productgroups.manage', [App\Http\Controllers\Admin\Product\ProductGroupsController::class, 'manage'])->name('productgroups.manage');
Route::get('/productgroups.edit/{id}', [App\Http\Controllers\Admin\Product\ProductGroupsController::class, 'edit'])->name('productgroups.edit');
Route::post('/productgroups.update/{id}', [App\Http\Controllers\Admin\Product\ProductGroupsController::class, 'update'])->name('productgroups.update');
Route::get('/productgroups.delete/{id}', [App\Http\Controllers\Admin\Product\ProductGroupsController::class, 'productgroups_delete'])->name('productgroups.delete');

//////////////////////////=====================ProductGroupSectionController=============///////////////////
Route::get('/productgroupsection', [App\Http\Controllers\Admin\Product\ProductGroupSectionController::class, 'index'])->name('productgroupsection');
Route::post('new.productgroupsection', [App\Http\Controllers\Admin\Product\ProductGroupSectionController::class, 'create'])->name('new.productgroupsection');
Route::get('/productgroupsection.manage', [App\Http\Controllers\Admin\Product\ProductGroupSectionController::class, 'manage'])->name('productgroupsection.manage');
Route::get('/productgroupsection.edit/{id}', [App\Http\Controllers\Admin\Product\ProductGroupSectionController::class, 'edit'])->name('productgroupsection.edit');
Route::post('/productgroupsection.update/{id}', [App\Http\Controllers\Admin\Product\ProductGroupSectionController::class, 'update'])->name('productgroupsection.update');
// Route::get('/productgroupsection.delete/{id}', [App\Http\Controllers\Admin\Product\ProductGroupSectionController::class, 'productgroupsection_delete'])->name('productgroupsection.delete');

//////////////////////////=====================ProductGroupDetailsController=============///////////////////
Route::get('/productgroupdetails', [App\Http\Controllers\Admin\Product\ProductGroupDetailsController::class, 'index'])->name('productgroupdetails');
Route::post('new.productgroupdetails', [App\Http\Controllers\Admin\Product\ProductGroupDetailsController::class, 'create'])->name('new.productgroupdetails');
Route::get('/productgroupdetails.manage', [App\Http\Controllers\Admin\Product\ProductGroupDetailsController::class, 'manage'])->name('productgroupdetails.manage');
Route::get('/productgroupdetails.edit/{id}', [App\Http\Controllers\Admin\Product\ProductGroupDetailsController::class, 'edit'])->name('productgroupdetails.edit');
Route::post('/productgroupdetails.update/{id}', [App\Http\Controllers\Admin\Product\ProductGroupDetailsController::class, 'update'])->name('productgroupdetails.update');
Route::get('/productgroupdetails.delete/{id}', [App\Http\Controllers\Admin\Product\ProductGroupDetailsController::class, 'productgroupdetails_delete'])->name('productgroupdetails.delete');
Route::get('/productgroupdetails.details/{id}', [App\Http\Controllers\Admin\Product\ProductGroupDetailsController::class, 'details'])->name('productgroupdetails.details');
////////////////////////==============Search==============/////////////////
route::get('/search',[App\Http\Controllers\Front\ShopController::class,'search']);
route::get('/addcart/{id}',[App\Http\Controllers\Front\ShopController::class,'addcart'])->name('addcart');
Route::get('/cart.delete/{id}', [App\Http\Controllers\Front\Pages\ShopingCartController::class, 'cart_delete'])->name('cart.delete');

Route::post('/cart-update', [App\Http\Controllers\Front\Pages\ShopingCartController::class, 'update_cart']);
