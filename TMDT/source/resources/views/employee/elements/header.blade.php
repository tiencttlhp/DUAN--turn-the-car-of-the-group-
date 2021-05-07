<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('getEmployeeHome') }}"><img src="{{ asset('uploads/logo_light.png') }}" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-menu7 position-left"></i> Sản Phẩm <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-content col-md-8">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-3">
									<a style="color: #333333" href="{{ route('getListSmartPhone') }}"><span class="menu-heading underlined"><i style="font-size: 20px;" class="fa fa-mobile-phone"></i>Điện Thoại</span></a>
									<ul class="menu-list">
										<li><a href="{{ route('getAddSmartPhone') }}">Thêm Điện Thoại</a></li>
										<li><a href="{{ route('getSmartPhoneByManufacturer','iphone') }}">Iphone</a></li>
										<li><a href="{{ route('getSmartPhoneByManufacturer','samsung') }}">Samsung</a></li>
										<li><a href="{{ route('getSmartPhoneByManufacturer','lg') }}">Lg</a></li>
										<li><a href="{{ route('getSmartPhoneByManufacturer','sony') }}">Sony</a></li>
										<li><a href="{{ route('getSmartPhoneByManufacturer','htc') }}">HTC</a></li>
										<li><a href="{{ route('getSmartPhoneByManufacturer','xiaomi') }}">Xiaomi</a></li>
										<li><a href="{{ route('getSmartPhoneByManufacturer', ' hang-khac') }}">Hãng Khác</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<a href="{{ route('getListLaptop') }}" style="color: #333333"><span class="menu-heading underlined"><i style="font-size: 20px;" class="fa fa-laptop"></i>Laptop</span></a>
									<ul class="menu-list">
										<li><a href="{{ route('getAddLaptop') }}">Thêm Laptop</a></li>
										<li><a href="{{ route('getLaptopByManufacturer','apple') }}">Apple</a></li>
										<li><a href="{{ route('getLaptopByManufacturer','asus') }}">Asus 
											{{-- <span class="badge badge-default">30+</span> --}}
										</a></li>
										<li><a href="{{ route('getLaptopByManufacturer','acer') }}">Acer</a></li>
										<li><a href="{{ route('getLaptopByManufacturer','dell') }}">Dell</a></li>
										<li><a href="{{ route('getLaptopByManufacturer','hp') }}">HP</a></li>
										<li><a href="{{ route('getLaptopByManufacturer','lenovo') }}">Lenovo</a></li>
										<li><a href="{{ route('getLaptopByManufacturer','hang-khac') }}">Hãng Khác 
											{{-- <span class="badge badge-danger">3</span> --}}
										</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<a href="{{ route('getListTablet') }}" style="color: #333333"><span class="menu-heading underlined"><i style="font-size: 20px;" class="fa fa-tablet"></i>Máy Tính Bảng</span></a>
									<ul class="menu-list">
										<li><a href="{{ route('getAddTablet') }}">Thêm Máy Tính Bảng</a></li>
										<li><a href="{{ route('getTabletByManufacturer','samsung') }}">Samsung</a></li>
										<li><a href="{{ route('getTabletByManufacturer','asus') }}">Asus</a></li>
										<li><a href="{{ route('getTabletByManufacturer','acer') }}">Acer</a></li>
										<li><a href="{{ route('getTabletByManufacturer','apple') }}">Apple</a></li>
										<li><a href="{{ route('getTabletByManufacturer','hang-khac') }}">Hãng Khác</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<a href="{{ route('getListAccessory') }}" style="color: #333333"><span class="menu-heading underlined"><i style="font-size: 20px;" class="fa fa-headphones"></i>Phụ Kiện</span></a>
									<ul class="menu-list">
										<li><a href="{{ route('getAddAccessory') }}">Thêm Phụ Kiện</a></li>
										<li><a href="{{ route('getAccessoryByProductType','bao-da-op-lung') }}">Bao Da Ốp Lưng</a></li>
										<li><a href="{{ route('getAccessoryByProductType','sac-du-phong') }}">Sạc Dự Phòng</a></li>
										<li><a href="{{ route('getAccessoryByProductType','the-nho') }}">Thẻ Nhớ</a></li>
										<li><a href="{{ route('getAccessoryByProductType','tai-nghe-loa') }}">Tai Nghe, Loa</a></li>
										<li><a href="{{ route('getAccessoryByProductType','chuot') }}">Chuột</a></li>
										<li><a href="{{ route('getAccessoryByProductType','mieng-dan-man-hinh') }}">Miếng Dán Màn Hình</a></li>
										<li><a href="{{ route('getAccessoryByProductType','phu-kien-khac') }}">Phụ Kiện Khác</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-newspaper position-left"></i> Bài Đăng <span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{ route('getPostNews') }}"><i class="icon-quill4"></i> Thêm Bài Đăng</a></li>
						<li><a href="{{ route('getListNews') }}"><i class="icon-file-text"></i> Danh Sách</a></li>
					</ul>
				</li>
				<li><a href="{{ route('getListBill') }}">Danh Sách Đơn Hàng</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				{{-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bell2"></i>
							<span class="visible-xs-inline-block position-right">Thông báo</span>
							<span class="badge bg-warning-400">58</span>
						</a>

						<div class="dropdown-menu dropdown-content">
							<div class="dropdown-content-heading">
								Thông báo
								<ul class="icons-list">
									<li><a href="#"><i class="icon-menu7"></i></a></li>
								</ul>
							</div>

							<ul class="media-list dropdown-content-body width-350">
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Taylor Swift</a> đã bình luận bài của bạn.
										<div class="media-annotation">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Taylor Swift</a> đã bình luận bài của bạn.
										<div class="media-annotation">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i class="icon-plus3"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Taylor Swift</a> đã bình luận bài của bạn.
										<div class="media-annotation">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i class="icon-truck"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Taylor Swift</a> đã bình luận bài của bạn.
										<div class="media-annotation">Feb 8, 11:30</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i class="icon-bubble8"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Taylor Swift</a> đã bình luận bài của bạn.
										<div class="media-annotation">Feb 2, 10:20</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Taylor Swift</a> đã bình luận bài của bạn.
										<div class="media-annotation">Feb 1, 05:46</div>
									</div>
								</li>
							</ul>
						</div>
					</li> --}}

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset(session('nhan-vien')->avatar) }}"  width="30" height="30" alt="">
						<span>{{ session('nhan-vien')->fullname}}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{ route('getInfo') }}"><i class="icon-user"></i> Thông tin</a></li>
						{{-- <li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Thông báo</a></li> --}}
						<li class="divider"></li>
						<li><a href="{{ route('getLogoutE') }}"><i class="icon-switch2"></i> Đăng xuất</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>