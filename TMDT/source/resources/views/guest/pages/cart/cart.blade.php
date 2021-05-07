@extends('guest.elements.master')

@section('title')
	Giỏ hàng
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
							@if (!Session::has('cart'))
								{{-- Không có sản phẩm --}}
							<div class="text-center pt pb">
								<p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>		
								<p class="return-to-shop">
									<a class="button primary wc-backward" href="{{ route('getHome') }}">Quay trở lại cửa hàng</a>
								</p>
							</div>
							@else
								{{-- Có sản phẩm --}}
							<div class="woocommerce row row-large row-divided">
								<div class="col large-7 pb-0 ">
									<form class="woocommerce-cart-form" action="{{ route('postUpdateCart') }}" method="post">
										<div class="cart-wrapper sm-touch-scroll">
  											<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
    											<thead>
      												<tr>
        												<th class="product-name" colspan="3">Sản phẩm</th>
        												<th class="product-price">Giá</th>
        												<th class="product-quantity">Số lượng</th>
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
              												<a href="{{ route('getDeleteProductInCart',$item['item']->isProduct->id) }}" class="remove" aria-label="Xóa sản phẩm này">&times;
              												</a>            
              											</td>
              											@php
              												$product=$item['item']->isProduct;
              											@endphp
            											<td class="product-thumbnail">
            												<a href="
            												@if ($product->productType=='smartphone')
                                                                {{ route('getSmartPhone',$item['item']->id) }}
                                                            @elseif($product->productType=='laptop')
                                                                {{ route('getLaptop',$item['item']->id) }}
                                                            @elseif($product->productType=='tablet')
                                                                {{ route('getTablet',$item['item']->id) }}
                                                            @else
                                                                {{ route('getAccessory',$item['item']->id) }}
                                                            @endif 
                                                            ">
            													<img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset($item['item']->isProduct->imagesurl) }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />
            												</a>
            											</td>
            											<td class="product-name" data-title="Sản phẩm">
            												<a href="
            												@if ($product->productType=='smartphone')
                                                                {{ route('getSmartPhone',$item['item']->id) }}
                                                            @elseif($product->productType=='laptop')
                                                                {{ route('getLaptop',$item['item']->id) }}
                                                            @elseif($product->productType=='tablet')
                                                                {{ route('getTablet',$item['item']->id) }}
                                                            @else
                                                                {{ route('getAccessory',$item['item']->id) }}
                                                            @endif
            												">{{ $item['item']->isProduct->productName }}
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
            											<td class="product-quantity" data-title="Số lượng">	
            												<div class="quantity buttons_added">
																<input type="button" value="-" class="minus button is-form">	

																<label class="screen-reader-text" for="quantity_{{ $item['item']->isProduct->id }}">Số lượng
																</label>
																<input type="number" id="quantity_{{ $item['item']->isProduct->id }}" class="input-text qty text" step="1" min="1" max="9999" name="cart[{{ $item['item']->isProduct->id }}]" value="{{ $item['qty'] }}" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="iPhone 6S 16GB Lock Mỹ (Like New) số lượng" />
																<input type="button" value="+" class="plus button is-form">	
															</div>
														</td>
           												<td class="product-subtotal" data-title="Tổng cộng">
              												<span class="woocommerce-Price-amount amount">{{ $item['price'] }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>            
              											</td>
          											</tr>
          											@endforeach     
      												<tr>
        												<td colspan="6" class="actions clear">
          													<div class="continue-shopping pull-left text-left">
    															<a class="button-continue-shopping button primary is-outline"  href="{{ route('getHome') }}">&#8592; Tiếp tục xem sản phẩm</a>
															</div>
															<input type="hidden" name="_token" value="{{ csrf_token() }}">
          													<button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng">Cập nhật giỏ hàng</button>
          													<input type="hidden" id="_wpnonce" name="_wpnonce" value="263b818ada" /><input type="hidden" name="_wp_http_referer" />        
          												</td>
      												</tr>
          										</tbody>
  											</table>
  										</div>
									</form>
								</div>
								<div class="cart-collaterals large-5 col pb-0">
									<div class="cart-sidebar col-inner ">
										<div class="cart_totals ">
	          								<table cellspacing="0">
          										<thead>
              										<tr>
                  										<th class="product-name" colspan="2" style="border-width:3px;">Thông Tin</th>
              										</tr>
          										</thead>
          									</table>  
											<h2>Tổng số lượng</h2>
											<table cellspacing="0" class="shop_table shop_table_responsive">
												<form id="form-checkout" action="{{ route('request') }}" method="get">
													<tr class="cart-subtotal">
														<th>Họ Và Tên:</th>
														<td data-title="Tổng cộng">
															<input type="text" style="text-align: right;" class="input-text" value="" placeholder="" name="customername" id="calc_shipping_city" />
														</td>
													</tr>
													<tr class="cart-subtotal">
														<th>Email:</th>
														<td data-title="Tổng cộng">
															<input type="text" style="text-align: right;" class="input-text" value="" placeholder="" name="customeremail" id="customeremail" />
														</td>
													</tr>
													<tr class="cart-subtotal">
														<th>Số Điện Thoại:</th>
														<td data-title="Tổng cộng">
															<input type="text" style="text-align: right;" class="input-text" value="" placeholder="" name="customernumber" id="customernumber" />
														</td>
													</tr>			
													<tr class="shipping">
														<th>Địa Chỉ</th>
														<td data-title="Giao hàng">
															<p class="form-row form-row-wide" style="border: none;" id="calc_shipping_city_field">
																<input type="text" style="text-align: right;" class="input-text" value="" placeholder="" name="customeraddress" id="customeraddress" />
																<input type="hidden" name="vpc_Merchant" value="ONEPAY" size="20" maxlength="16" />
																<input type="hidden" name="vpc_AccessCode" value="D67342C2" size="20" maxlength="8" />
																<input type="hidden" name="vpc_MerchTxnRef"
																	value="<?php
																	echo date ( 'YmdHis' ) . rand ();
																	?>" size="20"
																	maxlength="40" />
																<input type="hidden" name="vpc_OrderInfo" value="Order{{ $lastID }}"
																size="20" maxlength="34" />
																<input type="hidden" name="vpc_Amount" value="{{ ($cart->totalPrice)*100 }}" size="20"
																maxlength="10" />
																<input type="hidden" name="vpc_ReturnURL" size="45"
																value="{{ route('response') }}"
																maxlength="250" />
																<input type="hidden" name="vpc_Version" value="2" size="20"
																maxlength="8" />
																<input type="hidden" name="vpc_Command" value="pay" size="20"
																maxlength="16" />
																<input type="hidden" name="vpc_Locale" value="vn" size="20"
																maxlength="5" />
																<input type="hidden" name="vpc_Currency" value="VND" size="20"
																maxlength="5" />
																<input type="hidden" name="vpc_TicketNo" maxlength="15"
																value="<?php
																	echo $_SERVER ['REMOTE_ADDR'];
																?>" />
																<input type="hidden" name="Title" value="VPC 3-Party" />
																<input type="hidden" name="virtualPaymentClientURL"
																size="63" value="https://mtf.onepay.vn/onecomm-pay/vpc.op"
																maxlength="250" />
															</p>						
														</td>
													</tr>
													<tr class="cart-subtotal">
														<th>Tổng cộng</th>
														<td data-title="Tổng cộng">
															<span class="woocommerce-Price-amount amount">{{ $cart->totalPrice }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
														</td>
													</tr>	
												</form>							
											</table>
												<div class="wc-proceed-to-checkout">		
													<a href="javascript:void(0)" id="a-checkout" class="checkout-button button alt wc-forward">Tiến hành thanh toán</a>
												</div>
													
											</div>
										<form class="checkout_coupon mb-0" method="post">
												<div class="coupon">
													<h3 class="widget-title">
														<i class="icon-tag" ></i> Mã ưu đãi
													</h3>
													<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã ưu đãi" /> 
													<input type="submit" class="is-form expand" name="apply_coupon" value="Áp dụng mã ưu đãi" />
												</div>
										</form>
										<div class="cart-sidebar-content relative"></div>
									</div>
								</div>
							</div>
							<div class="cart-footer-content after-cart-content relative"></div>
							@endif
							

							

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
			var fullname=$('#calc_shipping_city').val();
			var email=$('#customeremail').val();
			var address=$('#customeraddress').val();
			var phone=$('#customernumber').val();
			if (fullname=='' || email=='' || address=='' || phone=='') {
				alert('Chưa điền đủ thông tin.');
			} else {
				$('#form-checkout').submit();
			}
		});											
	</script>
@endsection