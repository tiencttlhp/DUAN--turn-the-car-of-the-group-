@extends('employee.elements.master')
@section('title')
	Thêm Máy Tính Bảng
@endsection
@section('content')
	<div class="panel panel-white">
		<div class="panel-heading">
			<h6 class="panel-title">Thông Tin</h6>
			<div class="heading-elements">
				<ul class="icons-list">
			        <li><a data-action="collapse"></a></li>
			        <li><a data-action="reload"></a></li>
			        <li><a data-action="close"></a></li>
			    </ul>
		    </div>
		</div>
		<form class="steps-validation" method="post" action="{{ route('postAddTablet') }}" enctype="multipart/form-data" id="addTablet">
			<h6>Bước 1</h6>
			<fieldset>
				<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="display-block">Logo:</label>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                                    <input name="imagesurl" type="file" class="file-styled required">
		                                    <span class="help-block"><!-- Accepted formats: pdf, doc. Max file size 2Mb --></span>
		                                    <input type="hidden" id="c" sw_title="Nhắc nhở" sw_contnet="Bạn muốn thêm máy tính bảng?" sw_notice="Thêm thành công" sw_form_id="addTablet">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Hãng Sản Xuất: <span class="text-danger">*</span></label>
											<select name="manufacturer" data-placeholder="Chọn hãng sản xuất" class="select required">
												<option></option>
													<option value="apple">Apple</option>
													<option value="samsung">Samsung</option>
													<option value="lenovo">Lenovo</option>
													<option value="htc">HTC</option>
													<option value="sony">Sony</option>
													<option value="xiaomi">Xiaomi</option>
													<option value="hang-khac">Hãng Khác</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Tên Máy Tính Bảng: <span class="text-danger">*</span></label>
											<input type="text" name="productName" class="form-control required" placeholder="Apple..">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Sản Xuất Tại: <span class="text-danger">*</span></label>
											<input type="text" name="madein" class="form-control required" placeholder="Việt Nam">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Khối Lượng: <span class="text-danger">*</span></label>
											<input type="number" name="weight" class="form-control required" placeholder="0.5kg">
										</div>
									</div>
								</div>
							</fieldset>

							<h6>Bước 2</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Giá Mua:<span class="text-danger">*</span></label>
											<input type="number" name="purchase" class="form-control required" placeholder="20000000 VND">
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Giá Bán:<span class="text-danger">*</span></label>
											<input type="number" name="price" class="form-control required" placeholder="20000000 VND">
	                                    </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Giảm Giá:<span class="text-danger">*</span></label>
											<input type="number" name="discountPercent" class="form-control required" placeholder="5%">
		                                </div>

										<div class="form-group">
											<label>Trạng Thái: <span class="text-danger">*</span></label>
											<select name="status" data-placeholder="Chọn tình trạng" class="select required">
												<option></option>
													<option value="0">Sắp Về</option>
													<option value="1">Sẵn Có</option>
													<option value="-1">Ngừng Kinh Doanh</option>
											</select>
		                                </div>
		                                <div class="form-group">
											<label>Quà Tặng:</label>
		                                    <textarea name="gift" rows="4" cols="4" placeholder="Thẻ nhớ, tai nghe..." class="form-control"></textarea>
		                                    
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
									
												<label>Số Lượng:<span class="text-danger">*</span></label>
											<input type="number" name="quantity" class="form-control required" placeholder="20000000" >
										
										</div>

										<div class="form-group">
											<label>Số Sim:</label>
			                                <input type="number" name="sim" placeholder="2" class="form-control">
		                                </div>
									</div>
								</div>
							</fieldset>

							<h6>Bước 3</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Màn Hình:</label>
			                                <input type="text" name="screen" placeholder="Màn Hình" class="form-control">
		                                </div>

										<div class="form-group">
											<label>Camera Trước:</label>
			                                <input type="text" name="firstcamera" placeholder="13mpx" class="form-control">
		                                </div>

										
											<div class="form-group">
												<label>Camera Sau:</label>
			                                <input type="text" name="second" placeholder="5mpx" class="form-control">
											</div>

											<div class="form-group">
												<label>Bộ Nhớ:</label>
			                                <input type="text" name="memory" placeholder="" class="form-control">
											</div>
											<div class="form-group">
												<label>Thiết Kế:</label>
			                                <input type="text" name="design" placeholder="" class="form-control">
											</div>
											<div class="form-group">
												<label>Chipset:</label>
			                                <input type="text" name="chipset" placeholder="" class="form-control">
											</div>
										
									</div>

									<div class="col-md-6">
										<div class="form-group">
												<label>GPU:</label>
			                                <input type="text" name="gpu" placeholder="" class="form-control">
											</div>
		                                <div class="form-group">
		                                    <label>Ram:</label>
			                                <input type="text" name="ram" placeholder="" class="form-control">
		                                </div>

										<div class="form-group">
											<label>Kết Nối:</label>
			                                <input type="text" name="connections" placeholder="" class="form-control">
		                                </div>
		                                <div class="form-group">
												<label>Pin:</label>
			                                <input type="text" name="battery" placeholder="" class="form-control">
											</div>
											<div class="form-group">
												<label>Utility:</label>
			                                <input type="text" name="utility" placeholder="" class="form-control">
											</div>
									</div>
								</div>
							</fieldset>

							<h6>Bước 4</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="display-block">Danh Sách Ảnh:</label>
		                                    <input type="file" name="pictures" class="file-styled">
		                                    <span class="help-block">Định Dạng Hỗ Trợ: jpg.</span>
	                                    </div>
									</div>
								</div>

								<div class="row">
									
										<div class="form-group">
											<label>Mô Tả:</label>
										<!-- Summernote editor -->
											<div class="panel-body">
												<textarea id="hidden_content" style="display: none;" name="description"></textarea>
												<div class="summernote">
												</div>
											</div>
										<!-- /summernote editor -->
										</div>
								</div>
							</fieldset>
						</form>
	</div>
@endsection

@section('js1')
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/wizards/steps.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/core/libraries/jasny_bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/validation/validate.min.js') }}"></script>
@endsection

@section('js3')
	<script type="text/javascript" src="{{ asset('employee/js/pages/wizard_steps.js') }}"></script>
@endsection

@section('js4')
	<script type="text/javascript" src="{{ asset('employee/js/plugins/editors/summernote/summernote.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/editor_summernote.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/notifications/sweet_alert.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('employee/js/pages/components_modals.js') }}"></script>
@endsection