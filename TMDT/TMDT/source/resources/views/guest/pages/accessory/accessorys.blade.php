@extends('guest.elements.master')

@section('title')
	Kết quả tìm kiếm
@endsection

@section('main')
	<div class="shop-page-title category-page-title page-title ">
		<div class="page-title-inner flex-row  medium-flex-wrap container">
	  		<div class="flex-col flex-grow medium-text-center">
	  	 		<div class="is-small">
  					<nav class="woocommerce-breadcrumb breadcrumbs">
  						<a href="http://localhost/TGDD">Trang chủ</a> 
  						<span class="divider">/</span> 
  						<a href="http://localhost/TGDD/cua-hang/">Cửa hàng</a> 
  						<span class="divider">/</span> Phụ Kiện
  					</nav>
  				</div>
	  		</div><!-- .flex-left -->
	   		<div class="flex-col medium-text-center"> 	
				<p class="woocommerce-result-count hide-for-medium">Xem tất cả {{ count($list) }} kết quả</p>
				{{-- <form class="woocommerce-ordering" method="get">
					<select name="orderby" class="orderby">
						<option value="relevance" selected="selected">Độ liên quan</option>
						<option value="popularity">Thứ tự theo mức độ phổ biến</option>
						<option value="rating">Thứ tự theo điểm đánh giá</option>
						<option value="date">Thứ tự theo sản phẩm mới</option>
						<option value="price">Thứ tự theo giá: thấp đến cao</option>
						<option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
					</select>
					<input type="hidden" name="paged" value="1">
					<input type="hidden" name="s" value="iphone"><input type="hidden" name="post_type" value="product">
				</form> --}}
	   		</div><!-- .flex-right -->
		</div><!-- flex-row -->
	</div>
	<main id="main" class="">
		<div class="row category-page-row">
			<div class="col large-12">
				<div class="shop-container">		
					<div class="products row row-small large-columns-5 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-2-hover has-equal-box-heights">	
						@foreach ($list as $element)
						@php
							$product=$element->isProduct;
						@endphp
						<div class="product-small col has-hover post-2125 product type-product status-publish has-post-thumbnail product_cat-iphone product_cat-iphone-8-8-plus-x product_tag-sales pa_dung-luong-16gb pa_dung-luong-32gb  instock sale shipping-taxable purchasable product-type-variable has-default-attributes has-children">
							<div class="col-inner">
								@if ($product->discountPercent>0)
								<div class="badge-container absolute left top z-1">
									<div class="callout badge badge-circle">
										<div class="badge-inner secondary on-sale">
											<span class="onsale">-{{ $product->discountPercent }}%</span>
										</div>
									</div>
								</div>
								@endif
								<div class="product-small box ">
									<div class="box-image">
										<div class="image-none">
											<a href="{{ route('getAccessory',$element->id) }}">
												<img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset($product->imagesurl) }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />				
											</a>
										</div>
										<div class="image-tools is-small top right show-on-hover">
										</div>
										<div class="image-tools is-small hide-for-small bottom left show-on-hover">
										</div>
										<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
										</div>
									</div><!-- box-image -->

									<div class="box-text box-text-products text-center grid-style-2">
										<div class="title-wrapper">		
											<p class="category uppercase is-smaller no-text-overflow product-cat op-7">
												{{ $product->productType }}		
											</p> 
											<p class="name product-title">
												<a href="{{ route('getAccessory',$element->id) }}">{{ $product->productName }}
												</a>
											</p>
										</div>
										<div class="price-wrapper">
											<span class="price">
												@if ($product->discountPercent>0)
												<del>
													<span class="woocommerce-Price-amount amount">{{ ((100-$product->discountPercent)*$product->price)/100 }}
														<span class="woocommerce-Price-currencySymbol">&#8363;
														</span>
													</span>
												</del>
												@endif 
												<ins>
													<span class="woocommerce-Price-amount amount">{{ $product->price }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
										</div>		
									</div><!-- box-text -->
								</div><!-- box -->
							</div><!-- .col-inner -->
						</div><!-- col -->
						@endforeach
						
					</div><!-- row -->
					<div style="text-align: center;" class="row">
							{{ $list->render('vendor\pagination\semantic-ui') }}
					</div>
				</div><!-- shop container -->        
				<hr/>
				{{-- <h4 class="uppercase">Trang và bài đăng tìm thấy</h4>
    			<div class="row large-columns-3 medium-columns- small-columns-1 slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>

  					<div class="col post-item" >
						<div class="col-inner">
							<a href="http://localhost/TGDD/huong-dan-cach-thoat-xoa-tai-khoan-icloud-tren-iphone-ipad/" class="plain">
								<div class="box box-text-bottom box-blog-post has-hover">
            						<div class="box-image" >
  										<div class="image-cover" style="padding-top:16-9;">
  											<img width="300" height="300" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }} 300w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-510x510.jpg') }} 510w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-100x100.jpg') }} 100w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-150x150.jpg') }} 150w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-768x768.jpg') }} 768w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1.jpg') }} 800w" sizes="(max-width: 300px) 100vw, 300px" />
  										</div>
  						  			</div><!-- .box-image -->
          							<div class="box-text text-center" >
										<div class="box-text-inner blog-post-inner">
											<h5 class="post-title is-large ">Hướng dẫn cách thoát, xóa tài khoản iCloud trên iPhone iPad</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt "> [...]</p>					  			
										</div><!-- .box-text-inner -->
									</div><!-- .box-text -->
									<div class="badge absolute top post-date badge-square">
										<div class="badge-inner">
											<span class="post-date-day">14</span><br>
											<span class="post-date-month is-xsmall">Th3</span>
										</div>
									</div>
								</div><!-- .box -->
							</a><!-- .link -->
						</div><!-- .col-inner -->
					</div><!-- .col -->
					<div class="col post-item" >
						<div class="col-inner">
							<a href="http://localhost/TGDD/huong-dan-cach-thoat-xoa-tai-khoan-icloud-tren-iphone-ipad/" class="plain">
								<div class="box box-text-bottom box-blog-post has-hover">
            						<div class="box-image" >
  										<div class="image-cover" style="padding-top:16-9;">
  											<img width="300" height="300" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }} 300w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-510x510.jpg') }} 510w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-100x100.jpg') }} 100w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-150x150.jpg') }} 150w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-768x768.jpg') }} 768w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1.jpg') }} 800w" sizes="(max-width: 300px) 100vw, 300px" />
  										</div>
  						  			</div><!-- .box-image -->
          							<div class="box-text text-center" >
										<div class="box-text-inner blog-post-inner">
											<h5 class="post-title is-large ">Hướng dẫn cách thoát, xóa tài khoản iCloud trên iPhone iPad</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt "> [...]</p>					  			
										</div><!-- .box-text-inner -->
									</div><!-- .box-text -->
									<div class="badge absolute top post-date badge-square">
										<div class="badge-inner">
											<span class="post-date-day">14</span><br>
											<span class="post-date-month is-xsmall">Th3</span>
										</div>
									</div>
								</div><!-- .box -->
							</a><!-- .link -->
						</div><!-- .col-inner -->
					</div><!-- .col -->
					<div class="col post-item" >
						<div class="col-inner">
							<a href="http://localhost/TGDD/huong-dan-cach-thoat-xoa-tai-khoan-icloud-tren-iphone-ipad/" class="plain">
								<div class="box box-text-bottom box-blog-post has-hover">
            						<div class="box-image" >
  										<div class="image-cover" style="padding-top:16-9;">
  											<img width="300" height="300" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }} 300w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-510x510.jpg') }} 510w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-100x100.jpg') }} 100w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-150x150.jpg') }} 150w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-768x768.jpg') }} 768w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1.jpg') }} 800w" sizes="(max-width: 300px) 100vw, 300px" />
  										</div>
  						  			</div><!-- .box-image -->
          							<div class="box-text text-center" >
										<div class="box-text-inner blog-post-inner">
											<h5 class="post-title is-large ">Hướng dẫn cách thoát, xóa tài khoản iCloud trên iPhone iPad</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt "> [...]</p>					  			
										</div><!-- .box-text-inner -->
									</div><!-- .box-text -->
									<div class="badge absolute top post-date badge-square">
										<div class="badge-inner">
											<span class="post-date-day">14</span><br>
											<span class="post-date-month is-xsmall">Th3</span>
										</div>
									</div>
								</div><!-- .box -->
							</a><!-- .link -->
						</div><!-- .col-inner -->
					</div><!-- .col -->
					<div class="col post-item" >
						<div class="col-inner">
							<a href="http://localhost/TGDD/huong-dan-cach-thoat-xoa-tai-khoan-icloud-tren-iphone-ipad/" class="plain">
								<div class="box box-text-bottom box-blog-post has-hover">
            						<div class="box-image" >
  										<div class="image-cover" style="padding-top:16-9;">
  											<img width="300" height="300" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-300x300.jpg') }} 300w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-510x510.jpg') }} 510w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-100x100.jpg') }} 100w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-150x150.jpg') }} 150w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1-768x768.jpg') }} 768w, {{ asset('uploads/iphone-6s-hong-didongviet_5_6-1.jpg') }} 800w" sizes="(max-width: 300px) 100vw, 300px" />
  										</div>
  						  			</div><!-- .box-image -->
          							<div class="box-text text-center" >
										<div class="box-text-inner blog-post-inner">
											<h5 class="post-title is-large ">Hướng dẫn cách thoát, xóa tài khoản iCloud trên iPhone iPad</h5>
											<div class="is-divider"></div>
											<p class="from_the_blog_excerpt "> [...]</p>					  			
										</div><!-- .box-text-inner -->
									</div><!-- .box-text -->
									<div class="badge absolute top post-date badge-square">
										<div class="badge-inner">
											<span class="post-date-day">14</span><br>
											<span class="post-date-month is-xsmall">Th3</span>
										</div>
									</div>
								</div><!-- .box -->
							</a><!-- .link -->
						</div><!-- .col-inner -->
					</div><!-- .col -->
				</div> --}}
			</div><!-- .large-12  -->
		</div><!-- .row -->
	</main><!-- #main -->
@endsection

@section('script')
	<script type="application/ld+json">
		{"@context":"https:\/\/schema.org\/","@graph":[{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/dien-thoai-iphone-8-64gb\/","name":"\u0110i\u1ec7n tho\u1ea1i iPhone 8 64GB","url":"http:\/\/localhost\/TGDD\/cua-hang\/dien-thoai-iphone-8-64gb\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/dien-thoai-iphone-x-64gb\/","name":"\u0110i\u1ec7n tho\u1ea1i iPhone X 64GB","url":"http:\/\/localhost\/TGDD\/cua-hang\/dien-thoai-iphone-x-64gb\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/tai-nghe-iphone-5-5s\/","name":"Tai nghe iPhone 5-5S","url":"http:\/\/localhost\/TGDD\/cua-hang\/tai-nghe-iphone-5-5s\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-7-32gb-lock-my-like-new\/","name":"iPhone 7 32GB Lock M\u1ef9 (Like New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-7-32gb-lock-my-like-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-64gb-lock-my-new\/","name":"iPhone 6S 64GB Lock M\u1ef9 (New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-64gb-lock-my-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-plus-16gb-quoc-te-like-new\/","name":"iPhone 6S Plus 16GB Qu\u1ed1c T\u1ebf (Like New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-plus-16gb-quoc-te-like-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-64gb-quoc-te-like-new-khong-van-tay\/","name":"iPhone 6S 64GB Qu\u1ed1c T\u1ebf (Like New) - Kh\u00f4ng V\u00e2n Tay","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-64gb-quoc-te-like-new-khong-van-tay\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-16gb-lock-my-like-new\/","name":"iPhone 6S 16GB Lock M\u1ef9 (Like New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-16gb-lock-my-like-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-plus-128gb-quoc-te-like-new\/","name":"iPhone 6 Plus 128GB Qu\u1ed1c T\u1ebf (Like New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-plus-128gb-quoc-te-like-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-16gb-quoc-te-like-new\/","name":"iPhone 6 16GB Qu\u1ed1c T\u1ebf (Like New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-16gb-quoc-te-like-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-16gb-lock-nhat-like-new\/","name":"iPhone 6 16GB Lock Nh\u1eadt (Like New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-16gb-lock-nhat-like-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-16gb-lock-my-like-new\/","name":"iPhone 6 16GB Lock M\u1ef9 (Like New)","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6-16gb-lock-my-like-new\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/dien-thoai-iphone-6-cu-fullbox-gia-re-nhat\/","name":"\u0110i\u1ec7n tho\u1ea1i iPhone 6 c\u0169 - Fullbox gi\u00e1 r\u1ebb nh\u1ea5t","url":"http:\/\/localhost\/TGDD\/cua-hang\/dien-thoai-iphone-6-cu-fullbox-gia-re-nhat\/"},{"@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/adapter-cu-sac-hoco-1-0-a\/","name":"Adapter c\u1ee7 s\u1ea1c Hoco 1.0 A","url":"http:\/\/localhost\/TGDD\/cua-hang\/adapter-cu-sac-hoco-1-0-a\/"}]}
	</script>
@endsection