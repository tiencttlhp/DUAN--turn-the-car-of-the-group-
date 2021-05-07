@extends('guest.elements.master')

@section('title')
	Thông Báo
@endsection
@section('style2')
	<link rel='stylesheet' id='select2-css'  href='{{ asset('plugins/woocommerce/assets/css/select2.css?ver=3.3.4') }}' type='text/css' media='all' />
@endsection

@section('main')
	<main id="main" class="">
		<div id="content" class="content-area page-wrapper" role="main">
			<div class="row row-main">
				<div class="large-12 col">
					<div class="col-inner">																		
						<div class="woocommerce">
							<div class="woocommerce row row-large row-divided">
								<div class="col large-7 pb-0 ">
									<form class="woocommerce-cart-form" action="{{ route('postUpdateCart') }}" method="post">
										<div class="cart-wrapper sm-touch-scroll">
  											<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
    											<thead>
      												<tr>
        												<th class="product-name" colspan="3">Sản phẩm</th>
        												<th class="product-price">Giá</th>
        												<th class="product-subtotal">Số lượng</th>
        												<th class="product-subtotal">Tổng cộng</th>
      												</tr>
    											</thead>
    											<tbody>
    												@php
    													$cart=Session::get('cart');
    													$items=$cart->items;
    												@endphp
    												@foreach ($items as $item)
               										<tr class="woocommerce-cart-form__cart-item cart_item">
            											<td class="product-remove">
              												           
              											</td>
            											<td class="product-thumbnail">
            												<a href="{{ route('getSmartPhone',$item['item']->id) }}">
            													<img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset($item['item']->isProduct->imagesurl) }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />
            												</a>
            											</td>
            											<td class="product-name" data-title="Sản phẩm">
            												<a href="{{ route('getSmartPhone',$item['item']->id) }}">{{ $item['item']->isProduct->productName }}
            												</a>
            												{{-- <dl class="variation">
																<dt class="variation-DungLng">Dung Lượng:</dt>
																<dd class="variation-DungLng">
																	<p>{{ $item['item']->getSmartDevice->memory }}</p>
																</dd>
																
																<dt class="variation-Trngthi">Trạng thái:</dt>
																<dd class="variation-Trngthi">
																	<p>Máy mới 100%</p>
																</dd>
															</dl> --}}
              												
            											</td>
            											<td class="product-price" data-title="Giá">
              												<span class="woocommerce-Price-amount amount">{{ $item['item']->isProduct->price }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>            
              											</td>
            											<td class="product-subtotal" data-title="Tổng cộng" style="text-align: center;">
              												<span class="woocommerce-Price-amount amount">{{ $item['qty'] }}</span>            
              											</td>
           												<td class="product-subtotal" data-title="Tổng cộng">
              												<span class="woocommerce-Price-amount amount">{{ $item['price'] }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>            
              											</td>
          											</tr>
          											@endforeach     
          										</tbody>
  											</table>
  										</div>
									</form>
								</div>
								<div class="cart-collaterals large-5 col pb-0">
									<div class="cart-sidebar col-inner ">
										<div class="cart_totals ">
											<center>
												<table id="background-image" summary="Meeting Results">
													<thead>
														<tr>
															<th scope="col" >Thông Tin</th>
															<th scope="col">Giá Trị</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<td style="text-align: left;" colspan="4"></td>
														</tr>
													</tfoot>
													<tbody>
														
														<tr>
															<td style="text-align: left;"><strong>Mã Đặt Hàng</strong></td>
															<td style="text-align: left;">Order{{ $bill->id }}</td>
														</tr>
														<tr>
															<td style="text-align: left;"><strong>Tên Khách Hàng</strong></td>
															<td style="text-align: left;">{{ Session::get('customername') }}</td>
														</tr>
														<tr>
															<td style="text-align: left;"><strong>Email</strong></td>
															<td style="text-align: left;">@if (Session::has('customeremail'))
																{{ Session::get('customeremail') }}
															@else
																Không Có
															@endif</td>
														</tr>
														<tr>
															<td style="text-align: left;"><strong>Số Điện Thoại</strong></td>
															<td style="text-align: left;">@if (Session::has('customernumber'))
																{{ Session::get('customernumber') }}
															@else
																Không Có
															@endif</td>
														</tr>
														<tr>
															<td style="text-align: left;"><strong>Địa Chỉ</strong></td>
															<td style="text-align: left;">{{ Session::get('customeraddress') }}</td>
														</tr>
														<tr>
															<td style="text-align: left;"><strong>Tổng Tiền</strong></td>
															<td style="text-align: left;">{{ $cart->totalPrice }}VND</td>
														</tr>
														
														<tr>
															<td style="text-align: left;"><strong>Trạng Thái Giao Dịch</strong></td>
															
															<td style="text-align: left;">{{ $transStatus }}</td>
														</tr>
														<tr>
															<td style="text-align: left;"><strong>Thông Báo</strong></td>
															
															<td style="text-align: left;">{{ $notice }}</td>
														</tr>   
													</tbody>
												</table>
												</center>

										<div class="cart-sidebar-content relative"></div>
									</div>
								</div>
							</div>
							<div class="cart-footer-content after-cart-content relative"></div>
						</div>
					</div><!-- .col-inner -->
				</div><!-- .large-12 -->
			</div><!-- .row -->
		</div>
	</main><!-- #main -->
@endsection

@section('script')
	<script type='text/javascript'>
		/* <![CDATA[ */
			var wc_cart_params = {"ajax_url":"","wc_ajax_url":"\/TGDD\/?wc-ajax=%%endpoint%%","update_shipping_method_nonce":"f3b94d7e1f","apply_coupon_nonce":"7b0af84177","remove_coupon_nonce":"36497b5e8b"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/cart.min.js?ver=3.3.4') }}'></script>
	<script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.3') }}'></script>
	<script type="text/javascript" src="{{ asset('js/mycart.js') }}"></script>
	<script type="text/javascript">
		$('#a-checkout').on('click',function(){
			$('#form-checkout').submit();
		});											
	</script>
@endsection
@php
	if ($isComplete) {
		if(Session::has('cart')){
    		Session::forget('cart');
    	}
    	if(Session::has('customername')){
    		Session::forget('customername');
    	}
    	if(Session::has('customernumber')){
    		Session::forget('customernumber');
    	}
    	if(Session::has('customeraddress')){
    		Session::forget('customeraddress');
    	}
    	if(Session::has('customeremail')){
    		Session::forget('customeremail');
    	}
	}
@endphp
