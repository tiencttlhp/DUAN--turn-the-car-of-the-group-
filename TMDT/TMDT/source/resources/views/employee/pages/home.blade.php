@extends('employee.elements.master')
@section('title')
	Trang Quản Lý
@endsection
@section('content')
	<!-- Dashboard content -->
					<div class="row">

						<div class="col-lg-4">

							<!-- Daily sales -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Mua Hàng Gần Đây</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li class="dropdown text-muted">
					                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-list-unordered"></i> Xem Danh Sách</a></li>
												</ul>
					                		</li>
					                	</ul>
									</div>
								</div>

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th>Tên</th>
												<th>Thời Gian</th>
											</tr>
										</thead>
										<tbody>
											@if (count($bills)>0)
											@foreach ($bills as $bill)
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">{{ $bill->customername }}</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-checkmark3 text-size-mini position-left"></i> Mã: {{ $bill->id }}</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">{{ $bill->datetime }}</span>
												</td>
											</tr>
											@endforeach
											@endif
										</tbody>
									</table>
								</div>
							</div>
							<!-- /daily sales -->

						</div>

						<div class="col-lg-8">

							<!-- Latest posts -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bài Đăng Gần Đây</h6>
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
										<div class="col-lg-6">
											<ul class="media-list content-group">
												@foreach ($news_left as $new)
												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset($new->logo) }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">{{ $new->title }}</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> {{ $new->type }}</li>
							                    			<li>{{ date('d/m/y',strtotime($new->postDate)) }}</li>
							                    		</ul>
														...
													</div>
												</li>
												@endforeach
											</ul>
										</div>

										<div class="col-lg-6">
											<ul class="media-list content-group">
												@foreach ($news_right as $new)
												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset($new->logo) }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">{{ $new->title }}</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> {{ $new->type }}</li>
							                    			<li>{{ date('d/m/y',strtotime($new->postDate)) }}</li>
							                    		</ul>
														...
													</div>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>

							</div>
							<!-- /latest posts -->

						</div>
					</div>
					<!-- /dashboard content -->
					@section('js3')
						<script type="text/javascript" src="{{ asset('employee/js/pages/dashboard.js') }}"></script>
					@endsection
					@section('js1')
					<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/moment/moment.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/pickers/daterangepicker.js') }}"></script>
					@endsection
@endsection