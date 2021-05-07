@extends('admin.elements.master')
@section('title')
	Trang Quản Trị
@endsection
@section('content')
<div class="row">
	<div class="col-lg-9">
		<!-- Quick stats boxes -->
		<div class="row">
			<div class="col-lg-4">
				<!-- Current server load -->
				<div class="panel bg-teal-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li class="dropdown">
							    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
										<li><a href="#"><i class="icon-list-unordered"></i> Xem</a></li>
									</ul>
								</li>
							</ul>
						</div>
						Doanh Số
						<h3 class="no-margin">{{ $kq[0] }}</h3>										
						<div class="text-muted text-size-small">VND</div>
					</div>
					<div id="server-load"></div>
				</div>
				<!-- /current server load -->
			</div>
			<div class="col-lg-4">
				<!-- Current server load -->
				<div class="panel bg-pink-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li class="dropdown">
							    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
										<li><a href="#"><i class="icon-list-unordered"></i> Xem</a></li>
									</ul>
								</li>
							</ul>
						</div>
						Doanh Thu
						<h3 class="no-margin">{{ $kq[1] }}</h3>										
						<div class="text-muted text-size-small">VND</div>
					</div>
					<div id="server-load"></div>
				</div>
				<!-- /current server load -->
			</div>
			<div class="col-lg-4">
				<!-- Current server load -->
				<div class="panel bg-blue-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li class="dropdown">
							    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
										<li><a href="#"><i class="icon-list-unordered"></i> Xem</a></li>
									</ul>
								</li>
							</ul>
						</div>
						Lợi Nhuận
						<h3 class="no-margin">{{ $kq[2] }}</h3>										
						<div class="text-muted text-size-small">VND</div>
					</div>
				<div id="server-load"></div>
			</div>
			<!-- /current server load -->
		</div>								
	</div>
	<!-- /quick stats boxes -->
	<div class="row">
		<!-- Chart data colors -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title text-semibold">Biểu Đồ Thống Kê Tuần {{ $numberw }}</h6>
				<div class="heading-elements">
					<ul class="icons-list">
			            <li><a data-action="collapse"></a></li>
			            <li><a data-action="reload"></a></li>
			            <li><a data-action="close"></a></li>
			        </ul>
		        </div>
			</div>
			<div class="panel-body">
				<div id="columnchart_material" style="height: 350px;"></div>
			</div>
		</div>
		<!-- /chart data colors -->
	</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-flat">
			<div class="table-responsive">
				<table class="table text-nowrap">
					<tbody>
						<tr class="active">
							<td colspan="5">Hôm Nay</td>
							<td></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-stats"></i> Cập nhật</a></li>
											<li><a href="#"><i class="icon-file-text2"></i> Xem</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td colspan="5">Doanh Số</td>
							@if ($kq[3]>=100)
								<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> {{ round($kq[3]-100,2) }}%</span></td>
							@else
								<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> {{ round(100 - $kq[3],2) }}%</span></td>
							@endif
							
							<td >
								
							</td>
						</tr>
						<tr>
							<td colspan="5">Doanh Thu</td>
							@if ($kq[4]>=100)
								<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> {{ round($kq[4]-100,2) }}%</span></td>
							@else
								<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> {{ round(100 - $kq[4],2) }}%</span></td>
							@endif
							<td>
							</td>
						</tr><tr>
							<td colspan="5">Lợi Nhuận</td>
							@if ($kq[5]>=100)
								<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> {{ round($kq[5]-100,2) }}%</span></td>
							@else
								<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> {{ round(100 - $kq[5],2) }}%</span></td>
							@endif
							<td>
							</td>
						</tr>
						<tr class="active">
							<td colspan="5">Hôm Qua</td>
							<td></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-stats"></i> Cập nhật</a></li>
											<li><a href="#"><i class="icon-file-text2"></i> Xem</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td colspan="5">Doanh Số</td>
							@if ($kq[6]>=100)
								<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> {{ round($kq[6]-100,2) }}%</span></td>
							@else
								<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> {{ round(100 - $kq[6],2) }}%</span></td>
							@endif
							
							<td >
								
							</td>
						</tr><tr>
							<td colspan="5">Doanh Thu</td>
							@if ($kq[7]>=100)
								<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> {{ round($kq[7]-100,2) }}%</span></td>
							@else
								<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> {{ round(100 - $kq[7],2) }}%</span></td>
							@endif
							
							<td >
								
							</td>
						</tr><tr>
							<td colspan="5">Lợi Nhuận</td>
							@if ($kq[8]>=100)
								<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> {{ round($kq[8]-100,2) }}%</span></td>
							@else
								<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> {{ round(100 - $kq[8],2) }}%</span></td>
							@endif
							
							<td >
								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ asset('employee/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('employee/js/plugins/visualization/c3/c3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('employee/js/charts/c3/c3_advanced.js') }}"></script>
@endsection
@section('js3')
	<script type="text/javascript" src="{{ asset('employee/js/pages/dashboard.js') }}"></script>
@endsection

@section('js2')
	<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/pickers/daterangepicker.js') }}"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tuần {{ $numberw }}', 'Doanh Số', 'Doanh Thu', 'Lợi Nhuận'],
          ['Thứ Hai', {{ $doanhsotuan[0] }}, {{ $doanhthutuan[0] }}, {{ $loinhuantuan[0] }}],
          ['Thứ Ba', {{ $doanhsotuan[1] }}, {{ $doanhthutuan[1] }}, {{ $loinhuantuan[1] }}],
          ['Thứ Tư', {{ $doanhsotuan[2] }}, {{ $doanhthutuan[2] }}, {{ $loinhuantuan[2] }}],
          ['Thứ Năm', {{ $doanhsotuan[3] }}, {{ $doanhthutuan[3] }}, {{ $loinhuantuan[3] }}],
          ['Thứ Sáu', {{ $doanhsotuan[4] }}, {{ $doanhthutuan[4] }}, {{ $loinhuantuan[4] }}],
          ['Thứ Bảy', {{ $doanhsotuan[5] }}, {{ $doanhthutuan[5] }}, {{ $loinhuantuan[5] }}],
          ['Chủ Nhật', {{ $doanhsotuan[6] }}, {{ $doanhthutuan[6] }}, {{ $loinhuantuan[6] }}]
        ]);

        var options = {
          chart: {
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
@endsection