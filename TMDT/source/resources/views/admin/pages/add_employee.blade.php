@extends('admin.elements.master')
@section('title')
	Thêm Nhân Viên
@endsection
@section('content')
	<!-- 2 columns form -->
	<div class="col-md-3"></div>
					<form action="{{ route('postAddEmployee') }}" enctype="multipart/form-data" method="post" id="form-add-e" class="form-add-e">
						<div class="panel panel-flat col-md-6">
							<div class="panel-heading">
								<h5 class="panel-title">Thêm Nhân Viên</h5>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>

							<div class="panel-body">
								<div class="row">
									<div>
										<fieldset>
						                	<legend class="text-semibold"><i class="icon-reading position-left"></i> Thông Tin Nhân Viên</legend>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="display-block">Avatar</label>
							                            <input type="file" name="styled_file" class="file-styled" required="required">
							                            <span class="help-block">Định Dạng Hỗ Trợ: gif, png, jpg.</span>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
														<label>Tên Đăng Nhập:</label>
														<input type="text" name="username" id="username" class="form-control" required="required" placeholder="Nhập tên đăng nhập của bạn">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Mật Khẩu:</label>
														<input type="password" name="password" id="password" class="form-control" required="required" placeholder="Nhập mật khẩu của bạn">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label>Họ Và Tên:</label>
														<input type="text" name="fullname" class="form-control" required="required" placeholder="Nguyễn Văn A">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Số Điện Thoại:</label>
														<input type="text" name="digits" class="form-control" required="required" placeholder="+8412345678">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Email:</label>
														<input type="email" name="email" class="form-control" id="email" required="required" placeholder="abc@email.com">
													</div>
												</div>
											</div>

										</fieldset>
									</div>
									<div class="col-md-3"></div>
								</div>

								<div class="text-right">
									<button type="button" class="btn btn-danger btn-sm " id="btnAddE" sw_title="Nhắc Nhở" sw_contnet="Bạn muốn thêm nhân viên?" sw_notice="Thêm thành công." sw_form_id="form-add-e" url_ajax="{{ route('postCheckUserName') }}">Thêm Nhân Viên <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</div>
						</div>
					</form>
					<!-- /2 columns form -->
					<script type="text/javascript" src="{{ asset('employee/js/pages/form_layouts.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/notifications/sweet_alert.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/components_modals.js') }}"></script>
@endsection

@section('js2')
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/validation/validate.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/switch.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/switchery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/uniform.min.js') }}"></script>
	@endsection
	@section('js3')
		<script type="text/javascript" src="{{ asset('employee/js/pages/form_validation.js') }}"></script>
	@endsection