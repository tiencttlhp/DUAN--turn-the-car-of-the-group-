@extends('employee.elements.master')
@section('title')
	Thông Tin Tài Khoản
@endsection
@section('content')
	<!-- Cover area -->
				<div class="profile-cover">
					<div class="profile-cover-img" @if ($user->avatar!=null)
						style="background-image: url('{{ asset($user->avatar) }}')"
					@else
						style="background-image: url({{ asset('uploads/placeholder.jpg') }})"
					@endif></div>
					<div class="media">
						<div class="media-left">
							<a href="#" class="profile-thumb">
								<img src="@if ($user->avatar!=null)
									{{ asset($user->avatar) }}
								@else
									{{ asset('uploads/placeholder.jpg') }}
								@endif" class="img-circle" alt="">
							</a>
						</div>

						<div class="media-body">
				    		<h1>{{ $user->fullname }} <small class="display-block">Nhân Viên</small></h1>
						</div>

						<div class="media-right media-middle">
							<ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
								
								
							</ul>
						</div>
					</div>
				</div>
				<!-- /cover area -->


				<!-- Toolbar -->
				<div class="navbar navbar-default navbar-xs content-group">
					<ul class="nav navbar-nav visible-xs-block">
						<li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
					</ul>

					<div class="navbar-collapse collapse" id="navbar-filter">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#settings" data-toggle="tab"><i class="icon-cog3 position-left"></i> Cài Đặt</a></li>
						</ul>
					</div>
				</div>
				<!-- /toolbar -->


				<!-- Content area -->
				<div class="content">

					<!-- User profile -->
					<div class="row">
						<div class="col-lg-2">

						</div>
						<div class="col-lg-8">
							<div class="tabbable">
								<div class="tab-content">
									<div class="tab-pane fade in active" id="settings">

										<!-- Profile info -->
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Thông Tin Cá Nhân</h6>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>

											<div class="panel-body">
												<form action="{{ route('postChangeInfoE') }}" class="form-change-info-e" id="form1" enctype="multipart/form-data" method="post">
													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Họ Tên:</label>
																<input type="hidden" name="_token" value="{{ csrf_token() }}">
																<input type="hidden" name="id" value="{{ $user->id }}">
																<input type="text" name="fullname" placeholder="Họ Tên" class="form-control" value="{{ $user->fullname }}">
															</div>
															<div class="col-md-6">
																<label>Vai Trò</label>
																<input type="text" readonly="readonly"
																 placeholder="Nhân Viên" value="Nhân Viên" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Số Điện Thoại</label>
																
																	<input type="text" name="phonenumber" class="form-control" required="required" placeholder="09........" value="{{ $user->phonenumber }}">
															</div>
															<div class="col-md-6">
																<label>Email</label>
																<input type="email" name="email" class="form-control" id="email" required="required" placeholder="abc@xyz.t" value="{{ $user->email }}">
															</div>
														</div>
													</div>

													

													

							                        <div class="form-group">
							                        	<div class="row">
							                        		

															<div class="col-md-6">
																<label class="display-block">Avatar</label>
							                                    <input type="file" name="avatar_new" class="file-styled">
							                                    <input type="hidden" name="old_avatar" value="{{ $user->avatar }}">
							                                    <span class="help-block">Định Dạng Hỗ Trợ: gif, png, jpg.</span>
															</div>
							                        	</div>
							                        </div>

							                        <div class="text-right">
							                        	<button type="button" class="btn btn-danger btn-sm" id="change_info_e" sw_title="Nhắc Nhở" sw_contnet="Bạn muốn thay đổi thông tin?" sw_notice="Thay đổi thành công." sw_form_id="form1">Lưu<i class="position-right icon-sync" ></i></button>
							                        </div>
												</form>
											</div>
										</div>
										<!-- /profile info -->


										<!-- Account settings -->
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Cài Đặt Mật Khẩu</h6>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>

											<div class="panel-body">
												<form action="{{ route('postChangePass') }}" enctype="multipart/form-data" method="post" id="form2" class="form-change-pass-e">
													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Username</label>
																<input type="hidden" name="_token" value="{{ csrf_token() }}">
																<input type="hidden" name="id" value="{{ $user->id }}">
																<input type="text" value="{{ $user->username }}" readonly="readonly" class="form-control">
															</div>

															<div class="col-md-6">
																<label>Mật Khẩu Hiện Tại</label>
																<input type="hidden" name="cur_pass" value="{{ $user->password }}" id="cur_pass">
																<input type="password" name="repeat_old_password" class="form-control" required="required" placeholder="Mật Khẩu Hiện Tại">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Mật Khẩu Mới</label>
																<input type="password" name="password" id="password" class="form-control" required="required" placeholder="Mật khẩu có ít nhất 6 kí tự">
															</div>

															<div class="col-md-6">
																<label>Nhập Lại Mật Khẩu</label>
																<input type="password" name="repeat_password" class="form-control" required="required" placeholder="Nhập lại mật khẩu">
															</div>
														</div>
													</div>

													

							                        <div class="text-right">
							                        	<button type="button" class="btn btn-danger btn-sm " id="change_pass_e" sw_title="Nhắc Nhở" sw_contnet="Bạn muốn thay đổi mật khẩu?" sw_notice="Thay đổi thành công." sw_form_id="form2">Lưu <i class="position-right icon-sync" ></i></button>
							                        </div>
							                        <script type="text/javascript">
							                        	
							                        </script>
						                        </form>
											</div>
										</div>
										<!-- /account settings -->

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-2">

						</div>
					</div>
					<!-- /user profile -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

		<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/fullcalendar/fullcalendar.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/visualization/echarts/echarts.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/pages/user_pages_profile.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/notifications/sweet_alert.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/pages/components_modals.js') }}"></script>
	@section('js2')
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/validation/validate.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/switch.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/switchery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/uniform.min.js') }}"></script>
	@endsection
	@section('js1')
		<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/moment/moment.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/plugins/pickers/daterangepicker.js') }}"></script>
	@endsection
	@section('js3')
		<script type="text/javascript" src="{{ asset('employee/js/pages/form_validation.js') }}"></script>
	@endsection
@endsection