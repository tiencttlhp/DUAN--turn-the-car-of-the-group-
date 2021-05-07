@extends('guest.elements.master')
@section('title')
	Thông báo 
@endsection
@section('main')
	<main id="main" class="">
		<div id="content" class="content-area page-wrapper" role="main">
			<div class="row row-main">
				<div class="large-12 col">
					<div class="col-inner">																		
						<div class="woocommerce">
							{{-- Không có sản phẩm --}}
							<div class="text-center pt pb">
								<p class="cart-empty">Trang đang trong quá trình xây dựng.</p>		
								<p class="return-to-shop">
									<a class="button primary wc-backward" href="{{ route('getHome') }}">Quay trở lại trang chủ</a>
								</p>
							</div>
						</div>
					</div><!-- .col-inner -->
				</div><!-- .large-12 -->
			</div><!-- .row -->
		</div>
	</main><!-- #main -->
@endsection