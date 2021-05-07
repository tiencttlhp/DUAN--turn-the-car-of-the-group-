<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Nhập</title>
	<link rel="icon" type="image/png" href="{{ asset('uploads/logo_icon_dark.png') }}" />

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('employee/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('employee/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/validation/validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/switch.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/notifications/sweet_alert.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/pages/components_modals.js') }}"></script>
	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('employee/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/pages/form_validation.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee//js/plugins/ui/ripple.min.js') }}"></script>
	<!-- /theme JS files -->
</head>
<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-danger-600">
		<div class="navbar-header">
			<a class="navbar-brand" href=""><img src="{{ asset('uploads/logo_light.png') }}" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Trở Lại Trang Chính</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Liên Hệ Quản Trị Viên</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Tùy Chọn</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="{{ route('postEditPassA') }}" method="post" id="edit_pass" class="edit_pass">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-key"></i></div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<h5 class="content-group">Đăng Nhập <small class="display-block"></small></h5>
							</div>
							@if (session('thong-bao'))
						        <div class="alert alert-warning">
						          {{ session('thong-bao') }}
						        </div>
						        @endif
							<div class="form-group has-feedback has-feedback-left">
								<input type="hidden" name="cur_pass" id="cur_pass" value="{{ session('admin')->password }}">
								<input type="password" name="repeat_old_password" class="form-control" required="" placeholder="Mật khẩu hiện tại">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="password" id="password" class="form-control" required="" placeholder="Mật khẩu mới">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="repeat_password" class="form-control" required="required" placeholder="Nhập lại mật khẩu">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="button" class="btn bg-danger-600 btn-block" id="btnEditPassA" sw_title="Nhắc Nhở" sw_contnet="Bạn muốn thay đổi mật khẩu?" sw_notice="Thay đổi thành công." sw_form_id="edit_pass">Thay Đổi Mật Khẩu <i class="icon-circle-right2 position-right"></i></button>
							</div>

							{{-- <div class="text-center">
								<a href="login_password_recover.html">Quên Mật Khẩu?</a>
							</div> --}}
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>