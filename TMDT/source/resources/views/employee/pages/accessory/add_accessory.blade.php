@extends('employee.elements.master')
@section('title')
	Phụ Kiện
@endsection
@section('content')
	<div class="panel panel-white">
		<div class="panel-heading">
			<h6 class="panel-title">Thêm</h6>
			<div class="heading-elements">
				<ul class="icons-list">
			        <li><a data-action="collapse"></a></li>
			        <li><a data-action="reload"></a></li>
			        <li><a data-action="close"></a></li>
			    </ul>
		    </div>
		</div>
		<form class="steps-validation" method="post" action="{{ route('postAddAccessory') }}" enctype="multipart/form-data" id="addAccessory">
			<h6>Bước 1</h6>
			<fieldset>
				<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="display-block">Logo:<span class="text-danger">*</span></label>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                                    <input name="imagesurl" type="file" class="file-styled required">
		                                    <span class="help-block"><!-- Accepted formats: pdf, doc. Max file size 2Mb --></span>
		                                    <input type="hidden" id="c" sw_title="Nhắc nhở" sw_contnet="Bạn muốn thêm phụ kiện?" sw_notice="Thêm thành công" sw_form_id="addAccessory">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Loại Phụ Kiện: <span class="text-danger">*</span></label>
											<select name="productType" data-placeholder="Chọn loại phụ kiện" class="select required">
												<option></option>
													<option value="bao-da-op-lung">Bao Da Ốp Lưng</option>
													<option value="sac-du-phong">Sạc Dự Phòng</option>
													<option value="the-nho">Thẻ Nhớ</option>
													<option value="tai-nghe-loa">Tai Nghe, Loa</option>
													<option value="chuot">Chuột</option>
													<option value="mieng-dan-man-hinh">Miếng Dán Màn Hình</option>
													<option value="phu-kien-khac">Phụ Kiện Khác</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Tên Phụ Kiện: <span class="text-danger">*</span></label>
											<input type="text" name="productName" class="form-control required" placeholder="Tai Nghe Samsung Note 9">
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

										
									</div>
								</div>
							</fieldset>

							<h6>Bước 3</h6>
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