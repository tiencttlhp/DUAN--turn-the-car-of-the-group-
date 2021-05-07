<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('getAdminHome') }}"><img src="{{ asset('uploads/logo_light.png') }}" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-newspaper position-left"></i> Nhân Viên <span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{ route('getAddEmployee') }}"><i class="icon-quill4"></i> Thêm Nhân Viên</a></li>
						<li><a href="{{ route('getEmployees') }}"><i class="icon-file-text"></i> Danh Sách</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-newspaper position-left"></i> Thống Kê <span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{ route('getSaleStatistic') }}"><i class="icon-quill4"></i> Doanh Số</a></li>
						<li><a href="{{ route('getIncomeStatistic') }}"><i class="icon-file-text"></i> Danh Thu</a></li>
						<li><a href="{{ route('getProfitStatistic') }}"><i class="icon-file-text"></i> Lợi Nhuận</a></li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset(session('admin')->avatar) }}" alt="" width="30" height="30">
						<span>{{ session('admin')->fullname }}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{ route('getEditPass') }}"><i class="icon-cog5"></i> Đổi mật khẩu</a></li>
						<li><a href="{{ route('getLogoutA') }}"><i class="icon-switch2"></i> Đăng xuất</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>