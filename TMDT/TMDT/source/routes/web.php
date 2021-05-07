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

Route::post('kiem-tra-username','EmployeeController@postCheckUserName')->name('postCheckUserName');

Route::get('san-pham/xoa-binh-luan/{id}','CommentController@getDeleteProductComment')->name('getDeleteProductComment');

Route::get('nhan-vien/don-hang/{id}','BillController@getBill')->name('getBill');

Route::get('don-hang/xoa/{id}','BillController@getDeleteBill')->name('getDeleteBill');

Route::get('nhan-vien/danh-sach-don-hang','BillController@getListBill')->name('getListBill');

Route::get('dien-thoai/hang/{hang}','SmartPhoneController@getSmartPhoneByManufacturer')->name('getSmartPhoneByManufacturer');

Route::get('phu-kien/loai/{productType}','AccessoryController@getAccessoryByProductType')->name('getAccessoryByProductType');

Route::get('may-tinh-bang/hang/{hang}','TabletController@getTabletByManufacturer')->name('getTabletByManufacturer');

Route::get('may-tinh/hang/{hang}','LaptopController@getLaptopByManufacturer')->name('getLaptopByManufacturer');

Route::get('tin-tuc/xoa-binh-luan/{id}','CommentController@getDeleteNewComment')->name('getDeleteNewComment');

Route::get('dien-thoai/khuyen-mai','SmartPhoneController@getAllKhuyenMai')->name('getAllKhuyenMai');

Route::post('thong-ke/doanh-so','StatisticController@postSaleStatistic')->name('postSaleStatistic');

Route::post('thong-ke/doanh-thu','StatisticController@postIncomeStatistic')->name('postIncomeStatistic');

Route::post('thong-ke/loi-nhuan','StatisticController@postProfitStatistic')->name('postProfitStatistic');

Route::get('danh-sach-binh-luan/{id}','CommentController@getProductComment')->name('getProductComment');

Route::get('tin-tuc/danh-sach-binh-luan/{id}','CommentController@getNewComment')->name('getNewComment');

Route::get('thanh-toan/thong-bao','BillController@getNotice')->name('thanhtoanthongbao');

Route::get('thanh-toan','BillController@request')->name('request');

Route::get('huong-dan','GuestController@getHelp')->name('getHelp');

Route::get('thanh-toan/phan-hoi','BillController@response')->name('response');

Route::post('dien-thoai/them-vao-gio','SmartPhoneController@postSmartPhoneAddCart')->name('postSmartPhoneAddCart');

Route::get('admin/xoa-nhan-vien/{id}','EmployeeController@getDeleteEmployee')->name('getDeleteEmployee')->middleware('adminLogin');

Route::post('nhan-vien/dang-nhap','EmployeeController@postLogin')->name('postLoginE');

Route::post('admin/dang-nhap','AdminController@postLogin')->name('postLoginA');

Route::get('dien-thoai','SmartPhoneController@getAllSmartPhone')->name('getAllSmartPhone');

Route::get('may-tinh','LaptopController@getAllLaptop')->name('getAllLaptop');

Route::get('may-tinh-bang','TabletController@getAllTablet')->name('getAllTablet');

Route::get('phu-kien','AccessoryController@getAllAccessory')->name('getAllAccessory');

Route::get('xoa-san-pham/{id}','ProductsController@getDeleteProductInCart')->name('getDeleteProductInCart');

Route::get('nhan-vien/dang-xuat','EmployeeController@getLogout')->name('getLogoutE');

Route::get('admin/dang-xuat','AdminController@getLogout')->name('getLogoutA')->middleware('adminLogin');

Route::get('admin/doi-mat-khau','AdminController@getEditPass')->name('getEditPass')->middleware('adminLogin');

Route::post('admin/doi-mat-khau','AdminController@postEditPassA')->name('postEditPassA')->middleware('adminLogin');

Route::post('may-tinh-bang/them-vao-gio','TabletController@postTabletAddCart')->name('postTabletAddCart');

Route::post('phu-kien/them-vao-gio','AccessoryController@postAccessoryAddCart')->name('postAccessoryAddCart');

Route::post('may-tinh/them-vao-gio','LaptopController@postLaptopAddCart')->name('postLaptopAddCart');

Route::get('/', 'GuestController@getHome')->name('getHome');

Route::get('trang-dang-phat-trien', 'GuestController@getDevelopingPage')->name('getDevelopingPage');

Route::get('san-pham/{id}','ProductsController@getProduct')->name('getProduct');

Route::get('dien-thoai/{id}','SmartPhoneController@getSmartPhone')->name('getSmartPhone');

Route::get('may-tinh-bang/{id}','TabletController@getTablet')->name('getTablet');

Route::get('may-tinh/{id}','LaptopController@getLaptop')->name('getLaptop');

Route::get('phu-kien/{id}','AccessoryController@getAccessory')->name('getAccessory');

Route::get('tim-kiem','ProductsController@getSearch')->name('getSearch');

Route::get('tin-tuc','NewsController@getNews')->name('getNews');

Route::get('tin-tuc/{id}','NewsController@getNew')->name('getNew');

Route::get('gio-hang','CartController@getCart')->name('getCart');

Route::post('gio-hang/cap-nhat','CartController@postUpdateCart')->name('postUpdateCart');

Route::get('uu-dai',function (){
	return view('guest.pages.nothing-found');
});


Route::get('nhan-vien/trang-chu','EmployeeController@getHome')->name('getEmployeeHome')->middleware('employeelogin');

Route::get('nhan-vien/dang-nhap','EmployeeController@getLogin')->name('getLogin');

Route::get('nhan-vien/san-pham/them','ProductsController@getAddProductPage')->name('getAddProductPage')->middleware('employeelogin');

Route::get('nhan-vien/san-pham/','ProductsController@getProductList')->name('getProductList')->middleware('employeelogin');

Route::get('nhan-vien/dang-bai/','NewsController@getPostNews')->name('getPostNews')->middleware('employeelogin');

Route::get('nhan-vien/thong-tin','EmployeeController@getInfo')->name('getInfo')->middleware('employeelogin');

Route::post('nhan-vien/dang-bai','NewsController@postPostNews')->name('postPostNews')->middleware('employeelogin');

Route::get('nhan-vien/danh-sach-tin-tuc','NewsController@getListNews')->name('getListNews')->middleware('employeelogin');

Route::get('nhan-vien/sua-tin-tuc/{id}','NewsController@getEditNew')->name('getEditNew')->middleware('employeelogin');

Route::post('nhan-vien/sua-tin-tuc','NewsController@postEditNews')->name('postEditNew')->middleware('employeelogin');

Route::get('nhan-vien/xoa-tin-tuc/{id}','NewsController@getDeleteNew')->name('getDeleteNew')->middleware('employeelogin');

Route::get('nhan-vien/dien-thoai/them','SmartPhoneController@getAddSmartPhone')->name('getAddSmartPhone')->middleware('employeelogin');

Route::post('nhan-vien/them-dien-thoai','SmartPhoneController@postAddSmartPhone')->name('postAddSmartPhone')->middleware('employeelogin');

Route::get('nhan-vien/dien-thoai/{id}','SmartPhoneController@getEditSmartPhone')->name('getEditSmartPhone')->middleware('employeelogin');

Route::post('nhan-vien/sua-dien-thoai','SmartPhoneController@postEditSmartPhone')->name('postEditSmartPhone')->middleware('employeelogin');

Route::get('nhan-vien/dien-thoai','SmartPhoneController@getListSmartPhone')->name('getListSmartPhone')->middleware('employeelogin');

Route::get('nhan-vien/xoa-dien-thoai/{id}','SmartPhoneController@getDeleteSmartPhone')->name('getDeleteSmartPhone')->middleware('employeelogin');

Route::get('nhan-vien/them-laptop','LaptopController@getAddLaptop')->name('getAddLaptop')->middleware('employeelogin');

Route::post('nhan-vien/them-laptop','LaptopController@postAddLaptop')->name('postAddLaptop')->middleware('employeelogin');

Route::get('nhan-vien/sua-laptop/{id}','LaptopController@getEditLaptop')->name('getEditLaptop')->middleware('employeelogin');

Route::post('nhan-vien/sua-laptop','LaptopController@postEditLaptop')->name('postEditLaptop')->middleware('employeelogin');

Route::get('nhan-vien/xoa-laptop/{id}','LaptopController@getDeleteLaptop')->name('getDeleteLaptop')->middleware('employeelogin');

Route::get('nhan-vien/laptop','LaptopController@getListLaptop')->name('getListLaptop')->middleware('employeelogin');

Route::get('nhan-vien/may-tinh-bang/{id}','TabletController@getEditTablet')->name('getEditTablet')->middleware('employeelogin');

Route::post('nhan-vien/may-tinh-bang','TabletController@postEditTablet')->name('postEditTablet')->middleware('employeelogin');

Route::get('nhan-vien/them-may-tinh-bang','TabletController@getAddTablet')->name('getAddTablet')->middleware('employeelogin');

Route::post('nhan-vien/them-may-tinh-bang','TabletController@postAddTablet')->name('postAddTablet')->middleware('employeelogin');

Route::get('nhan-vien/may-tinh-bang','TabletController@getListTablet')->name('getListTablet')->middleware('employeelogin');

Route::get('nhan-vien/xoa-may-tinh-bang/{id}','TabletController@getDeleteTablet')->name('getDeleteTablet')->middleware('employeelogin');

Route::get('nhan-vien/them-phu-kien','AccessoryController@getAddAccessory')->name('getAddAccessory')->middleware('employeelogin');

Route::post('nhan-vien/them-phu-kien','AccessoryController@postAddAccessory')->name('postAddAccessory')->middleware('employeelogin');

Route::get('nhan-vien/phu-kien/{id}','AccessoryController@getEditAccessory')->name('getEditAccessory')->middleware('employeelogin');

Route::post('nhan-vien/phu-kien','AccessoryController@postEditAccessory')->name('postEditAccessory')->middleware('employeelogin');

Route::get('nhan-vien/phu-kien','AccessoryController@getListAccessory')->name('getListAccessory')->middleware('employeelogin');

Route::get('nhan-vien/xoa-phu-kien/{id}','AccessoryController@getDeleteAccessory')->name('getDeleteAccessory')->middleware('employeelogin');

Route::post('nhan-vien/doi-mat-khau','EmployeeController@postChangePass')->name('postChangePass')->middleware('employeelogin');

Route::post('nhan-vien/sua-thong-tin','EmployeeController@postChangeInfoE')->name('postChangeInfoE')->middleware('employeelogin');

Route::get('admin/dang-nhap','AdminController@getLogin')->name('getAdminLogin');

Route::get('admin/trang-chu','AdminController@getHome')->name('getAdminHome')->middleware('adminLogin');

Route::get('admin/them-nhan-vien','EmployeeController@getAddEmployee')->name('getAddEmployee')->middleware('adminLogin');

Route::get('admin/nhan-vien','EmployeeController@getEmployees')->name('getEmployees')->middleware('adminLogin');

Route::get('thong-ke/doanh-so','StatisticController@getSaleStatistic')->name('getSaleStatistic')->middleware('adminLogin');

Route::get('thong-ke/doanh-thu','StatisticController@getIncomeStatistic')->name('getIncomeStatistic')->middleware('adminLogin');

Route::get('thong-ke/loi-nhuan','StatisticController@getProfitStatistic')->name('getProfitStatistic')->middleware('adminLogin');

Route::post('admin/them-nhan-vien','EmployeeController@postAddEmployee')->name('postAddEmployee')->middleware('adminLogin');

Route::get('admin/sua-nhan-vien/{id}','EmployeeController@getEditEmployee')->name('getEditEmployee')->middleware('adminLogin');

Route::post('admin/sua-nhan-vien','EmployeeController@postEditEmployee')->name('postEditEmployee')->middleware('adminLogin');

Route::post('tin-tuc/them-binh-luan','CommentController@postAddCommentNew')->name('postAddCommentNew');

Route::post('san-pham/them-binh-luan','CommentController@postAddCommentProduct')->name('postAddCommentProduct');

Route::get('dien-thoai/hang-san-xuat/{name}','SmartPhoneController@getSmartPhoneByHang')->name('getSmartPhoneByHang');

Route::get('may-tinh/hang-san-xuat/{name}','LaptopController@getLaptopByHang')->name('getLaptopByHang');

Route::get('may-tinh-bang/hang-san-xuat/{name}','TabletController@getTabletByHang')->name('getTabletByHang');

Route::get('phu-kien/loai-phu-kien/{name}','AccessoryController@getAccessoryByLoai')->name('getAccessoryByLoai');

Route::get('tin-tuc/loai-tin/{name}','NewsController@getNewByLoai')->name('getNewByLoai');

Route::get('test','StatisticController@getTest');