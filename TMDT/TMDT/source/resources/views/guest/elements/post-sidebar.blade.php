
					<div id="secondary" class="widget-area " role="complementary">
						<aside id="nav_menu-5" class="widget widget_nav_menu">
							<span class="widget-title ">
								<span>Điện Thoại Iphone</span>
							</span>
							<div class="is-divider small"></div>
						</aside>
						<aside id="nav_menu-7" class="widget widget_nav_menu">
							<span class="widget-title ">
								<span>Điện Thoại Samsung</span>
							</span>
							<div class="is-divider small"></div>
						</aside>
						<aside id="nav_menu-4" class="widget widget_nav_menu">
							<span class="widget-title ">
								<span>Laptop Dell</span>
							</span>
							<div class="is-divider small"></div>
						</aside>
						<aside id="nav_menu-8" class="widget widget_nav_menu">
							<span class="widget-title ">
								<span>Laptop Apple</span>
							</span><div class="is-divider small">
							</div>
						</aside>
						<aside id="nav_menu-9" class="widget widget_nav_menu">
							<span class="widget-title ">
								<span>Tai Nghe</span>
							</span>
							<div class="is-divider small"></div>
						</aside>
						<aside id="nav_menu-10" class="widget widget_nav_menu">
							<span class="widget-title ">
								<span>Ốp Lưng</span>
							</span>
							<div class="is-divider small"></div>
						</aside>
						<aside id="woocommerce_products-4" class="widget woocommerce widget_products">
							<span class="widget-title ">
								<span>Sản phẩm mới</span>
							</span>
							<div class="is-divider small"></div>
							<ul class="product_list_widget">
								@foreach ($smartphones as $s)
								@php
									$item=$s->isProduct;
								@endphp
								<li>
									<a href="{{ route('getSmartPhone',$s->id) }}">
										<img width="247" height="296" src="{{ asset($item->imagesurl) }}" data-src="{{ asset($item->imagesurl) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazy-load-active" alt="">		
										<span class="product-title">{{ $item->productName }}</span>
									</a>

									<div class="star-rating">
										<span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao
										</span>
									</div>
									@if ($item->discountPercent>0)
											<del><span class="woocommerce-Price-amount amount">{{ $item->price }}<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{ ((100-$item->discountPercent)*$item->price)/100 }}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
										@else
											 
											<ins><span class="woocommerce-Price-amount amount">{{ $item->price }}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
										@endif	
								</li>
								@endforeach
							</ul>
						</aside>
					</div><!-- #secondary -->