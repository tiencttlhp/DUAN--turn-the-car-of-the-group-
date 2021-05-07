@extends('employee.elements.master')
@section('title')
	Đơn Hàng {{ $bill->id }}
@endsection
@section('content')
<div class="panel panel-flat">
						
						<div class="panel panel-flat col-md-3">
							<div class="panel-heading">
								<h5 class="panel-title">Đơn Hàng {{ $bill->id }}</h5>
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
						                	<legend class="text-semibold"><i class="icon-reading position-left"></i> Thông Tin Đơn Hàng</legend>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="display-block">Mã Đơn Hàng: {{ $bill->id }}</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="display-block">Tên Khách Hàng: {{ $bill->customername }}</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Số Điện Thoại: {{ $bill->customernumber }}</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Email: {{ $bill->customeremail }}</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Địa Chỉ: {{ $bill->customeraddress }}</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Thời Gian Đặt: {{ date('d/m/y H:i:s',strtotime($bill->datetime)) }}</label>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
									<div class="col-md-3"></div>
								</div>

							</div>
						</div>
						<div class="panel panel-flat col-md-9">
							<table class="table datatable-multi-sorting">
							<thead>
								<tr>
									<th width="5%">ID1</th>
									<th width="5%">ID2</th>
									<th>Logo</th>
									<th width="55%">Tên Sản Phẩm</th>
									<th width="10%">Số Lượng</th>
									<th>Giá</th>
								</tr>
							</thead>
							<tbody>
								@if (count($billitems)>0)
								@foreach ($billitems as $billitem)
									@php
										$product=$billitem->isProduct;
									@endphp
								<tr>
									<td>{{ $billitem->id }}</td>
									<td>{{ $product->id }}</td>
									<td><img src="{{ asset($product->imagesurl) }}" width="50px"></td>
									<td>{{ $product->productName }}</td>
									<td>{{ $billitem->quantity }}</td>
									<td>{{ $product->price }}</td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
						</div>
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