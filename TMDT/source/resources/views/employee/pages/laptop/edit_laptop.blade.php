@extends('employee.elements.master')
@section('title')
	Máy Tính
@endsection
@section('content')
	<div class="panel panel-white">
		<div class="panel-heading">
			<h6 class="panel-title">Sửa Thông Tin</h6>
			<div class="heading-elements">
				<ul class="icons-list">
			        <li><a data-action="collapse"></a></li>
			        <li><a data-action="reload"></a></li>
			        <li><a data-action="close"></a></li>
			    </ul>
		    </div>
		</div>
		<form class="steps-validation" method="post" action="{{ route('postEditLaptop') }}" enctype="multipart/form-data" id="editLaptop">
			<h6>Bước 1</h6>
			<fieldset>
				<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Hãng Sản Xuất: <span class="text-danger">*</span></label>
											<input type="hidden" id="c" sw_title="Nhắc nhở" sw_contnet="Bạn muốn sửa thông tin laptop?" sw_notice="Sửa thành công" sw_form_id="editLaptop">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="hidden" name="id" value="{{ $laptop['id'] }}">
											<select name="manufacturer" data-placeholder="Chọn hãng sản xuất" class="select required">
												<option></option>
													<option value="apple" @if ($product['manufacturer']=='apple')
														selected 
													@endif>Apple</option>
													<option value="asus" @if ($product['manufacturer']=='asus')
														selected 
													@endif>Asus</option>
													<option value="acer" @if ($product['manufacturer']=='acer')
														selected 
													@endif>Acer</option>
													<option value="dell" @if ($product['manufacturer']=='dell')
														selected 
													@endif>Dell</option>
													<option value="hp" @if ($product['manufacturer']=='hp')
														selected 
													@endif>HP</option>
													<option value="lenovo" @if ($product['manufacturer']=='lenovo')
														selected 
													@endif>Lenovo</option>
													<option value="hang-khac" @if ($product['manufacturer']=='hang-khac')
														selected 
													@endif>Hãng Khác</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Tên Máy Tính: <span class="text-danger">*</span></label>
											<input type="text" name="productName" class="form-control required" placeholder="Acer.." value="{{ $product['productName'] }}">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Sản Xuất Tại: <span class="text-danger">*</span></label>
											<input type="text" name="madein" class="form-control required" placeholder="Việt Nam" value="{{ $product['madein'] }}">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Khối Lượng: <span class="text-danger">*</span></label>
											<input type="number" name="weight" class="form-control required" placeholder="0.5kg" value="{{ $product['weight'] }}">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="text-semibold">Ảnh Bìa:</label>
											<div class="media no-margin-top">
												<div class="media-left">
													<a href="#"><img src="{{ asset($product['imagesurl']) }}" style="width: 200px; height: 150px; border-radius: 2px;" alt=""></a>
												</div>
												
												<div class="media-body">
													<input type="file" class="file-styled" name="imagesurl">
													<input type="hidden" name="old_imagesurl" value="{{ $product['imagesurl'] }}">
												</div>
											</div>
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
											<input type="number" name="purchase" class="form-control required" placeholder="20000000 VND" value="{{ $product['purchase'] }}">
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Giá Bán:<span class="text-danger">*</span></label>
											<input type="number" name="price" class="form-control required" placeholder="20000000 VND" value="{{ $product['price'] }}">
	                                    </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Giảm Giá:<span class="text-danger">*</span></label>
											<input type="number" name="discountPercent" class="form-control required" placeholder="5%" value="{{ $product['discountPercent'] }}">
		                                </div>

										<div class="form-group">
											<label>Trạng Thái: <span class="text-danger">*</span></label>
											<select name="status" data-placeholder="Chọn tình trạng" class="select required">
												<option></option>
													<option value="0" @if ($product['status']==0)
														selected 
													@endif>Sắp Về</option>
													<option value="1" @if ($product['status']==1)
														selected 
													@endif>Sẵn Có</option>
													<option value="-1" @if ($product['status']==-1)
														selected 
													@endif>Ngừng Kinh Doanh</option>
											</select>
		                                </div>
		                                <div class="form-group">
											<label>Quà Tặng:</label>
		                                    <textarea name="gift" rows="4" cols="4" placeholder="Thẻ nhớ, tai nghe..." class="form-control" >{{ $product['gift'] }}</textarea>
		                                    
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
									
												<label>Số Lượng:<span class="text-danger">*</span></label>
											<input type="number" name="quantity" class="form-control required" placeholder="20000000" value="{{ $product['quantity'] }}">
										
										</div>

										<div class="form-group">
											<label>Bàn Phím:</label>
			                                <input type="number" name="keyboard" placeholder="" class="form-control" value="{{ $laptop['keyboard'] }}">
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
			                                <input type="text" name="screen" placeholder="Màn Hình" class="form-control" value="{{ $smartdevice['screen'] }}">
		                                </div>

										<div class="form-group">
											<label>Camera Trước:</label>
			                                <input type="text" name="firstcamera" placeholder="13mpx" class="form-control" value="{{ $smartdevice['firstcamera'] }}">
		                                </div>

										
											<div class="form-group">
												<label>Chipset:</label>
			                                <input type="text" name="chipset" placeholder="" class="form-control" value="{{ $smartdevice['chipset'] }}">
											</div>

											<div class="form-group">
												<label>Bộ Nhớ:</label>
			                                <input type="text" name="memory" placeholder="" class="form-control" value="{{ $smartdevice['memory'] }}">
											</div>
											<div class="form-group">
												<label>Thiết Kế:</label>
			                                <input type="text" name="design" placeholder="" class="form-control" value="{{ $smartdevice['design'] }}">
											</div>
											
										
									</div>

									<div class="col-md-6">
										<div class="form-group">
												<label>GPU:</label>
			                                <input type="text" name="gpu" placeholder="" class="form-control" value="{{ $smartdevice['gpu'] }}">
											</div>
		                                <div class="form-group">
		                                    <label>Ram:</label>
			                                <input type="text" name="ram" placeholder="" class="form-control" value="{{ $smartdevice['ram'] }}">
		                                </div>

										<div class="form-group">
											<label>Kết Nối:</label>
			                                <input type="text" name="connections" placeholder="" class="form-control" value="{{ $smartdevice['connections'] }}">
		                                </div>
		                                <div class="form-group">
												<label>Pin:</label>
			                                <input type="text" name="battery" placeholder="" class="form-control" value="{{ $smartdevice['battery'] }}">
											</div>
											<div class="form-group">
												<label>Utility:</label>
			                                <input type="text" name="utility" placeholder="" class="form-control" value="{{ $smartdevice['utility'] }}">
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
													{!! $product['description'] !!}
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