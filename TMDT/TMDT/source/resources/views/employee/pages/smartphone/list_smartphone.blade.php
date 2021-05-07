@extends('employee.elements.master')
@section('title')
	Điện Thoại
@endsection
@section('content')
	<!-- Multi column ordering -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh Sách Điện Thoại</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							
						</div>

						<table class="table datatable-multi-sorting">
							<thead>
								<tr>
									<th width="5%">ID</th>
									<th width="10%">Ảnh</th>
									<th width="40%">Tên Điện Thoại</th>
									<th width="15%">Giá Mua</th>
									<th>Giá Bán</th>
									<th class="text-center">Hành Động</th>
								</tr>
							</thead>
							<tbody>
								@if (count($list)>0)
								
								@foreach ($list as $element)
								<tr>
									<td>{{ $element->id }}</td>
									<td><img src="{{ asset($element->isProduct->imagesurl) }}" width="50px"></td>
									<td>{{ $element->isProduct->productName }}</td>
									<td>{{ $element->isProduct->purchase }} VND</td>
									<td>{{ $element->isProduct->price }} VND</td>
									<td class="text-center" width="10%">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="{{ route('getProductComment',$element->isProduct->id) }}"><i class="icon-database-refresh"></i> DS Bình Luận</a></li>
													<li><a href="{{ route('getEditSmartPhone',$element->id) }}"><i class="icon-database-refresh"></i> Sửa</a></li>
													<li><a class="deleteSmartPhone" sw_title="Thông báo" sw_contnet="Bạn muốn xóa điện thoại này?" sw_notice="Xóa thành công." sw_url=" {{ route('getDeleteSmartPhone',$element->id) }} "><i class="icon-database-remove"></i> Xóa</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
					<!-- /multi column ordering -->
					<script type="text/javascript" src="{{ asset('employee/js/plugins/tables/datatables/datatables.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/datatables_sorting.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/notifications/sweet_alert.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/components_modals.js') }}"></script>
@endsection