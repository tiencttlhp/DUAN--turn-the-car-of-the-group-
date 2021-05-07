@extends('guest.elements.master')
@section('title')
  @php
  $s=$laptop->isProduct;
  $t=$laptop->getSmartDevice;
@endphp
	{{ $s->productName }}
@endsection
@section('head')
  <link rel="canonical" href="http://localhost/TGDD/cua-hang/iphone-6s-16gb-lock-my-like-new/" />
  <link rel='shortlink' href='http://localhost/TGDD/?p=1951' />
  <link rel="alternate" type="application/json+oembed" href="http://localhost/TGDD/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2FTGDD%2Fcua-hang%2Fiphone-6s-16gb-lock-my-like-new%2F" />
  <link rel="alternate" type="text/xml+oembed" href="http://localhost/TGDD/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2FTGDD%2Fcua-hang%2Fiphone-6s-16gb-lock-my-like-new%2F&#038;format=xml" />
@endsection
@section('yith_wccl_frontend-css')
  <link rel='stylesheet' id='yith_wccl_frontend-css'  href='{{ asset('plugins/yith-essential-kit-for-woocommerce-1/modules/yith-woocommerce-colors-labels-variations/assets/css/frontend.css?ver=1.3.0') }}' type='text/css' media='all' />
@endsection
@section('main')

  <div class="page-title shop-page-title product-page-title">
  	<div class="page-title-inner flex-row medium-flex-wrap container">
  		<div class="flex-col flex-grow medium-text-center">
  			<div class="is-small">
  				<nav class="woocommerce-breadcrumb breadcrumbs">
  					<a href="http://localhost/TGDD">Trang chủ</a>
  					<span class="divider">/</span>
  					<a href="http://localhost/TGDD/cua-hang/">Cửa hàng</a>
  					<span class="divider">/</span>
  					<a href="http://localhost/TGDD/danh-muc/dien-thoai/">ĐIỆN THOẠI</a>
  					<span class="divider">/</span>
  					<a href="http://localhost/TGDD/danh-muc/dien-thoai/iphone/">{{ strtoupper($s->productType) }}</a>
  					<span class="divider">/</span>
  					<a href="http://localhost/TGDD/danh-muc/dien-thoai/iphone/iphone-6s-6s-plus/">{{ $s->productName }}</a>
  				</nav>
  			</div>
  		</div>
  		<!-- .flex-left -->
  		<div class="flex-col medium-text-center"></div>
  		<!-- .flex-right -->
  	</div>
  	<!-- flex-row -->
  </div>
  <main id="main" class="">
    <div class="shop-container">
      <div class="container">
      </div><!-- /.container -->
      <div id="product-1951" class="post-1951 product type-product status-publish has-post-thumbnail product_cat-dien-thoai product_cat-iphone product_cat-iphone-6s-6s-plus product_tag-sales pa_dung-luong-16gb pa_dung-luong-32gb pa_dung-luong-dung-luong pa_trang-thai-may-moi-100 pa_trang-thai-moi-95 pa_trang-thai-moi-99 first instock sale shipping-taxable purchasable product-type-variable has-default-attributes has-children">
        <div class="row content-row row-divided row-large">
          <div class="col large-9">
            <div class="product-main">
              <div class="row">
                <div class="large-6 col">        
                  <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                    @if ($s->discountPercent>0)
                    <div class="badge-container is-larger absolute left top z-1">
                      <div class="callout badge badge-circle">
                        <div class="badge-inner secondary on-sale">
                          <span class="onsale">-{{ $s->discountPercent }}%</span>
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="image-tools absolute top show-on-hover right z-3">
                    </div>
                    <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half has-image-zoom" data-flickity-options='{"cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": true,"lazyLoad": 1,"dragThreshold" : 15,"pageDots": false,"rightToLeft": false }'>
                      <div data-thumb="{{ asset($s->imagesurl) }}" class="woocommerce-product-gallery__image slide first">
                        <a href="{{ asset($s->imagesurl) }}">
                          <img width="510" height="510" src="{{ asset($s->imagesurl) }}" class="wp-post-image" alt="" title="iphone-6s-hong-didongviet_5_6" data-caption="" data-src="{{ asset($s->imagesurl) }}" data-large_image="{{ asset($s->imagesurl) }}" data-large_image_width="800" data-large_image_height="800" srcset="{{ asset($s->imagesurl) }} 510w, {{ asset($s->imagesurl) }} 100w, {{ asset($s->imagesurl) }} 150w, {{ asset($s->imagesurl) }} 300w, {{ asset($s->imagesurl) }} 768w, {{ asset($s->imagesurl) }} 800w" sizes="(max-width: 510px) 100vw, 510px" />
                        </a>
                      </div>
                      <div data-thumb="{{ asset($s->imagesurl) }}" class="woocommerce-product-gallery__image slide">
                        <a href="{{ asset($s->imagesurl) }}">
                          <img width="510" height="510" src="{{ asset($s->imagesurl) }}" class="" alt="" title="iphone-6s-hong-didongviet_5_6" data-caption="" data-src="{{ asset($s->imagesurl) }}" data-large_image="{{ asset($s->imagesurl) }}" data-large_image_width="800" data-large_image_height="800" srcset="{{ asset($s->imagesurl) }} 510w, {{ asset($s->imagesurl) }} 100w, {{ asset($s->imagesurl) }} 150w, {{ asset($s->imagesurl) }} 300w, {{ asset($s->imagesurl) }} 768w, {{ asset($s->imagesurl) }} 800w" sizes="(max-width: 510px) 100vw, 510px" />
                        </a>
                      </div>  
                    </figure>
                    <div class="image-tools absolute bottom left z-3">
                      <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
                        <i class="icon-expand" ></i>    
                      </a>
                    </div>
                  </div>
                  <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4" data-flickity-options='{"cellAlign": "left","wrapAround": false,"autoPlay": false,"prevNextButtons":true,"asNavFor": ".product-gallery-slider","percentPosition": true,"imagesLoaded": true,"pageDots": false,"rightToLeft": false,"contain": true }'>          
                    <div class="col is-nav-selected first">
                      <a>
                        <img src="{{ asset($s->imagesurl) }}" width="247" height="296" class="attachment-woocommerce_thumbnail" />        
                      </a>
                    </div>
                    <div class="col">
                      <a>
                        <img src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset($s->imagesurl) }}" width="247" height="296"  class="lazy-load attachment-woocommerce_thumbnail" />
                      </a>
                    </div>  
                  </div><!-- .product-thumbnails -->  
                </div>
                <div class="product-info summary entry-summary col col-fit product-summary form-flat">
                  <h1 class="product-title entry-title">{{ $s->productName }}</h1>
                  <div class="is-divider small"></div>
                  <div class="price-wrapper">
                    <p class="price product-page-price price-on-sale">
                      @if ($s->discountPercent>0)
                        <del><span class="woocommerce-Price-amount amount">{{ $s->price }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> 
                      <ins><span class="woocommerce-Price-amount amount">{{ ((100-$s->discountPercent)*$s->price)/100 }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                      @else
                        <ins><span class="woocommerce-Price-amount amount">{{ $s->price }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                      @endif
                      
                    </p>
                  </div>
                  <div class="product-short-description">
                    <ul>
                      <li>Màn hình: {{ $t->screen }}</li>
                      <li>CPU: {{ $t->chipset }}</li>
                      <li>RAM: {{ $t->ram }}, ROM: {{ $t->memory }}</li>
                      <li>Camera: {{ $t->firstcamera }}, Selfie: {{ $t->second }}</li>
                      <li>Pin: {{ $t->battery }}</li>
                    </ul>
                  </div>
                  <div class="khuyen-mai">
                    <h4>Khuyến mãi hot nhất:</h4>
                    <li>
                      <span class="fa fa-gift" aria-hidden="true"></span>
                      <span>Tặng 01 bao da cao cấp trị giá 1.000.000đ</span>
                    </li>
                    <li>
                      <span class="fa fa-gift" aria-hidden="true"></span>
                      <span> Miễn phí sửa chữa trọn đời</span>
                    </li>
                    <li>
                      <span class="fa fa-gift" aria-hidden="true"></span>
                      <span> Phiếu mua hàng trị giá 50K</span>
                    </li>
                  </div>
                  @if ($s->status==1 && $s->quantity>0)
                    <form class="variations_form cart" action="{{ route('postSmartPhoneAddCart') }}" method="post" enctype='multipart/form-data'>    
                       
                    <div class="single_variation_wrap" style="display:none;">
                      <div class="woocommerce-variation single_variation"></div>
                      <div class="woocommerce-variation-add-to-cart variations_button">
                        <div class="quantity buttons_added">
                          <input type="button" value="-" class="minus button is-form">    
                          <label class="screen-reader-text" for="quantity_5bc739069a890">Số lượng</label>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="id" value="{{ $laptop->id }}">
                          <input type="hidden" name="price" value="{{ $s->price }}">
                          <input type="number" id="quantity_5bc739069a890" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="" />
                          <input type="button" value="+" class="plus button is-form"> 
                        </div>
                        <button type="submit" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>
                        <input type="hidden" name="add-to-cart" value="1951" />
                        <input type="hidden" name="product_id" value="1951" />
                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                      </div>
                    </div>        
                  </form>
                  @else
                    @if ($s->status!=1 && $s->quantity>0)
                      @if ($s->status==0)
                        <h1 style="color: red;">Sắp Về</h1>
                        <br>
                      @else
                        <h1 style="color: red;">Ngừng Kinh Doanh</h1>
                        <br>
                      @endif  
                    @else
                      @if ($s->quantity<=0)
                        <h1 style="color: red;">Hết Hàng</h1>
                        <br>
                      @endif
                    @endif
                  @endif
                  <div class="row row-small"  id="row-2091906678">
                    <div class="col medium-6 small-12 large-6"  >
                      <div class="col-inner"  >
                        <a rel="noopener noreferrer" href="/ho-tro-tra-gop/" target="_blank" class="button primary expand"  style="border-radius:6px;">
                          <i class="icon-facebook" ></i>  <span>HỖ TRỢ TRẢ GÓP</span>
                        </a>
                      </div>
                    </div>
                    <div class="col medium-6 small-12 large-6"  >
                      <div class="col-inner"  >
                        <a rel="noopener noreferrer" href="tel:+84972939830" target="_blank" class="button success expand"  style="border-radius:6px;">
                          <i class="icon-phone" ></i>  <span>0972.939.830</span>
                        </a>
                      </div>
                    </div>
                    <style scope="scope">
                    </style>
                  </div>
                  <div class='clearfix'></div>
                        
                
                </div><!-- .summary -->
              </div><!-- .row -->
            </div><!-- .product-main -->
            <div class="product-footer">     
              <div class="woocommerce-tabs container tabbed-content">
                <ul class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-tabs nav-normal nav-left">
                  <li class="description_tab  active">
                    <a href="#tab-description">Mô tả</a>
                  </li>
                  <li class="additional_information_tab  ">
                    <a href="#tab-additional_information">Thông số kỹ thuật</a>
                  </li>
                  <li class="ux_global_tab_tab  ">
                    <a href="#tab-ux_global_tab">Bình Luận</a>
                  </li>
                </ul>
                <div class="tab-panels">    
                  <div class="panel entry-content active" id="tab-description">                
                    <div id="product.info.description" class="itab-content" data-role="content">
                      <div class="product-desc product-dtcontent">
                        <article>
                          {!! $s->description !!}
                        </article>
                        
                      </div>
                    </div>
                    
                  </div>    
                  <div class="panel entry-content " id="tab-additional_information">                
                    <table class="shop_attributes">
                    @if ($t->screen!=null)
                       <tr>
                        <th>Màn Hình</th>
                        <td><p>{{ $t->screen }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->firstcamera!=null)
                       <tr>
                        <th>Camera Trước</th>
                        <td><p>{{ $t->firstcamera }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->second!=null)
                       <tr>
                        <th>Camera Sau</th>
                        <td><p>{{ $t->second }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->chipset!=null)
                       <tr>
                        <th>Chipset</th>
                        <td><p>{{ $t->chipset }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->gpu!=null)
                       <tr>
                        <th>GPU</th>
                        <td><p>{{ $t->gpu }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->ram!=null)
                       <tr>
                        <th>Ram</th>
                        <td><p>{{ $t->ram }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->connections!=null)
                      <tr>
                        <th>Kết Nối</th>
                        <td><p>{{ $t->connections }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->memory!=null)
                       <tr>
                        <th>Bộ Nhớ</th>
                        <td><p>{{ $t->memory }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->battery!=null)
                       <tr>
                        <th>Pin</th>
                        <td><p>{{ $t->battery }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->design!=null)
                       <tr>
                        <th>Thiết Kế</th>
                        <td><p>{{ $t->design }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($t->utility!=null)
                       <tr>
                        <th>Utility</th>
                        <td><p>{{ $t->utility }}</p>
                        </td>
                      </tr>
                    @endif
                    @if ($s->sim!=null)
                       <tr>
                        <th>Số Sim</th>
                        <td><p>{{ $s->sim }}</p>
                        </td>
                      </tr>
                    @endif 
                      
                    </table>
                  </div>    
                  <div class="panel entry-content " id="tab-ux_global_tab">
                    <div id="comments" class="comments-area">
                            <h3 class="comments-title uppercase">Bình luận về &ldquo;<span>{{ $s->productName }}</span>&rdquo;     </h3>
                            <ol class="comment-list" id="comment_content">
                                @if (count($listComment)>0)
                                   
                                
                                @foreach ($listComment as $element)
                                    <li class="comment even thread-even depth-1" id="li-comment-13">
                                        <article id="comment-13" class="comment-inner">
                                            <div class="flex-row align-top">
                                                <div class="flex-col">
                                                    <div class="comment-author mr-half">
                                                        <img alt='' src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src='http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=70&#038;d=mm&#038;r=g' srcset="" data-srcset='http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=140&#038;d=mm&#038;r=g 2x' class='lazy-load avatar avatar-70 photo' height='70' width='70' /> </div>
                                                </div>
                                                <!-- .large-3 -->
                                                <div class="flex-col flex-grow">
                                                    <cite class="strong fn"><a href='' rel='external nofollow' class='url'>{{ $element->name }}</a></cite> <span class="says">bình luận:</span>
                                                    <div class="comment-content">
                                                        <p>{{ $element->content }}</p>
                                                    </div>
                                                    <div class="comment-meta commentmetadata uppercase is-xsmall clear">
                                                        <a href="">
                                                            <time datetime="2018-03-24T14:24:13+00:00" class="pull-left">
                                                                {{ $element->time }} </time>
                                                        </a>
                                                        
                                                        <!-- .reply -->
                                                    </div>
                                                    <!-- .comment-meta .commentmetadata -->
                                                </div>
                                                <!-- .flex-col -->
                                            </div>
                                            <!-- .flex-row -->
                                        </article>
                                        <!-- #comment -->
                                    </li>
                                @endforeach
                                @endif
                                <!-- #comment-## -->
                            </ol>
                            <!-- .comment-list -->
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Bình Luận <small><a rel="nofollow" id="cancel-comment-reply-link" href="/TGDD/tai-hinh-nen-y-nghia-cho-may-tinh/#respond" style="display:none;">Hủy</a></small></h3>
                                <form action="{{ route('postAddCommentProduct') }}" method="post" id="commentform" class="comment-form" novalidate enctype="multipart/form-data">
                                    <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                                    <p class="comment-form-comment">
                                        <label for="comment">Bình luận</label>
                                        <input type="hidden" name="productid" id="productid" value="{{ $s->id }}">
                                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                        <textarea id="comment" name="content" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                    </p>
                                    @if (session('nhan-vien'))
                                    @php
                                      $nv=Session::get('nhan-vien');
                                    @endphp
                                      <p class="comment-form-author">
                                        <input id="author" name="name" type="hidden" value="{{ $nv->fullname }}" size="30" maxlength="245" />
                                      </p>
                                    <p class="comment-form-email">
                                        <input id="email" name="email" type="hidden" value="{{ $nv->email }}" size="30" maxlength="100" aria-describedby="email-notes" />
                                    </p>
                                    <p class="comment-form-url">
                                        <input id="url" name="phone" type="hidden" value="{{ $nv->phonenumber }}" size="30" maxlength="200" />
                                    </p>
                                    @else
                                      <p class="comment-form-author">
                                        <label for="author">Tên <span class="required">*</span></label>
                                        <input id="author" name="name" type="text" value="" size="30" maxlength="245" required='required' />
                                    </p>
                                    <p class="comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' />
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="url">Số Điện Thoại</label>
                                        <input id="url" name="phone" type="text" value="" size="30" maxlength="200" />
                                    </p>
                                    @endif
                                    <p class="form-submit">
                                        <input name="submit" type="button" style="background-color: #DD3333; color: #fff;" id="btnCommentProduct" ajax_url="{{ route('postAddCommentProduct') }}" avatar="{{ asset('themes/flatsome/assets/img/lazy.png') }}" class="submit" value="Bình Luận" />
                                        <input type='hidden' name='comment_post_ID' value='2044' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p>
                                </form>
                            </div>
                            <!-- #respond -->
                        </div>
                        <!-- #comments -->
                  </div>
                </div><!-- .tab-panels -->
              </div><!-- .tabbed-content -->
              {{-- <div class="related related-products-wrapper product-section">
                <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">Sản phẩm tương tự</h3>  
                <div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>                
                  <div class="product-small col has-hover post-1970 product type-product status-publish has-post-thumbnail product_cat-apple product_cat-hang-san-xuat product_cat-tablet product_tag-sales pa_dung-luong-16gb pa_dung-luong-32gb pa_dung-luong-dung-luong  instock sale shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                    <div class="col-inner">
                      <div class="badge-container absolute left top z-1">
                        <div class="callout badge badge-circle">
                          <div class="badge-inner secondary on-sale">
                            <span class="onsale">-2%</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-small box ">
                        <div class="box-image">
                          <div class="image-none">
                            <a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">
                              <img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-plus-16gb-quoc-te-like-new-trang-didongviet_1_1-247x296.jpg') }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />       
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
                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">Apple</p> 
                            <p class="name product-title"><a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">iPad Mini 3 16GB Wifi &#038; 4G</a>
                            </p>
                          </div>
                          <div class="price-wrapper">
                            <span class="price">
                              <del>
                                <span class="woocommerce-Price-amount amount">5.979.000
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </del> 
                              <ins>
                                <span class="woocommerce-Price-amount amount">1
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </ins>
                            </span>
                          </div>    
                        </div><!-- box-text -->
                      </div><!-- box -->
                    </div><!-- .col-inner -->
                  </div><!-- col -->              
                  <div class="product-small col has-hover post-1955 product type-product status-publish has-post-thumbnail product_cat-dien-thoai product_cat-iphone product_cat-iphone-6s-6s-plus  instock shipping-taxable purchasable product-type-simple">
                    <div class="col-inner">  
                      <div class="badge-container absolute left top z-1">
                      </div>
                      <div class="product-small box ">
                        <div class="box-image">
                          <div class="image-none">
                            <a href="http://localhost/TGDD/cua-hang/iphone-6s-plus-16gb-quoc-te-like-new/">
                              <img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-plus-16gb-quoc-te-like-new-trang-didongviet_1_1-247x296.jpg') }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />        
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
                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">ĐIỆN THOẠI</p> 
                            <p class="name product-title">
                              <a href="http://localhost/TGDD/cua-hang/iphone-6s-plus-16gb-quoc-te-like-new/">iPhone 6S Plus 16GB Quốc Tế (Like New)</a>
                            </p>
                          </div>
                          <div class="price-wrapper">
                            <span class="price">
                              <span class="woocommerce-Price-amount amount">2
                                <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                              </span>
                            </span>
                          </div>    
                        </div><!-- box-text -->
                      </div><!-- box -->
                    </div><!-- .col-inner -->
                  </div><!-- col -->        
                  <div class="product-small col has-hover post-1970 product type-product status-publish has-post-thumbnail product_cat-apple product_cat-hang-san-xuat product_cat-tablet product_tag-sales pa_dung-luong-16gb pa_dung-luong-32gb pa_dung-luong-dung-luong  instock sale shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                    <div class="col-inner">
                      <div class="badge-container absolute left top z-1">
                        <div class="callout badge badge-circle">
                          <div class="badge-inner secondary on-sale">
                            <span class="onsale">-2%</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-small box ">
                        <div class="box-image">
                          <div class="image-none">
                            <a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">
                              <img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-plus-16gb-quoc-te-like-new-trang-didongviet_1_1-247x296.jpg') }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />       
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
                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">Apple</p> 
                            <p class="name product-title"><a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">iPad Mini 3 16GB Wifi &#038; 4G</a>
                            </p>
                          </div>
                          <div class="price-wrapper">
                            <span class="price">
                              <del>
                                <span class="woocommerce-Price-amount amount">5.979.000
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </del> 
                              <ins>
                                <span class="woocommerce-Price-amount amount">3
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </ins>
                            </span>
                          </div>    
                        </div><!-- box-text -->
                      </div><!-- box -->
                    </div><!-- .col-inner -->
                  </div><!-- col -->        
                  <div class="product-small col has-hover post-1970 product type-product status-publish has-post-thumbnail product_cat-apple product_cat-hang-san-xuat product_cat-tablet product_tag-sales pa_dung-luong-16gb pa_dung-luong-32gb pa_dung-luong-dung-luong  instock sale shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                    <div class="col-inner">
                      <div class="badge-container absolute left top z-1">
                        <div class="callout badge badge-circle">
                          <div class="badge-inner secondary on-sale">
                            <span class="onsale">-2%</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-small box ">
                        <div class="box-image">
                          <div class="image-none">
                            <a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">
                              <img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-plus-16gb-quoc-te-like-new-trang-didongviet_1_1-247x296.jpg') }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />       
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
                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">Apple</p> 
                            <p class="name product-title"><a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">iPad Mini 3 16GB Wifi &#038; 4G</a>
                            </p>
                          </div>
                          <div class="price-wrapper">
                            <span class="price">
                              <del>
                                <span class="woocommerce-Price-amount amount">5.979.000
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </del> 
                              <ins>
                                <span class="woocommerce-Price-amount amount">4
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </ins>
                            </span>
                          </div>    
                        </div><!-- box-text -->
                      </div><!-- box -->
                    </div><!-- .col-inner -->
                  </div><!-- col -->
                  <div class="product-small col has-hover post-1970 product type-product status-publish has-post-thumbnail product_cat-apple product_cat-hang-san-xuat product_cat-tablet product_tag-sales pa_dung-luong-16gb pa_dung-luong-32gb pa_dung-luong-dung-luong  instock sale shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                    <div class="col-inner">
                      <div class="badge-container absolute left top z-1">
                        <div class="callout badge badge-circle">
                          <div class="badge-inner secondary on-sale">
                            <span class="onsale">-2%</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-small box ">
                        <div class="box-image">
                          <div class="image-none">
                            <a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">
                              <img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-plus-16gb-quoc-te-like-new-trang-didongviet_1_1-247x296.jpg') }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />       
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
                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">Apple</p> 
                            <p class="name product-title"><a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">iPad Mini 3 16GB Wifi &#038; 4G</a>
                            </p>
                          </div>
                          <div class="price-wrapper">
                            <span class="price">
                              <del>
                                <span class="woocommerce-Price-amount amount">5.979.000
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </del> 
                              <ins>
                                <span class="woocommerce-Price-amount amount">5
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </ins>
                            </span>
                          </div>    
                        </div><!-- box-text -->
                      </div><!-- box -->
                    </div><!-- .col-inner -->
                  </div><!-- col -->
                  <div class="product-small col has-hover post-1970 product type-product status-publish has-post-thumbnail product_cat-apple product_cat-hang-san-xuat product_cat-tablet product_tag-sales pa_dung-luong-16gb pa_dung-luong-32gb pa_dung-luong-dung-luong  instock sale shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                    <div class="col-inner">
                      <div class="badge-container absolute left top z-1">
                        <div class="callout badge badge-circle">
                          <div class="badge-inner secondary on-sale">
                            <span class="onsale">-2%</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-small box ">
                        <div class="box-image">
                          <div class="image-none">
                            <a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">
                              <img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-plus-16gb-quoc-te-like-new-trang-didongviet_1_1-247x296.jpg') }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />       
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
                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">Apple</p> 
                            <p class="name product-title"><a href="http://localhost/TGDD/cua-hang/ipad-mini-3-16gb-wifi-4g/">iPad Mini 3 16GB Wifi &#038; 4G</a>
                            </p>
                          </div>
                          <div class="price-wrapper">
                            <span class="price">
                              <del>
                                <span class="woocommerce-Price-amount amount">5.979.000
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </del> 
                              <ins>
                                <span class="woocommerce-Price-amount amount">6
                                  <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </span>
                              </ins>
                            </span>
                          </div>    
                        </div><!-- box-text -->
                      </div><!-- box -->
                    </div><!-- .col-inner -->
                  </div><!-- col -->      
                </div>
              </div> --}}
            </div>  
          </div><!-- col large-9 -->
          <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
            <aside id="flatsome_recent_posts-3" class="widget flatsome_recent_posts">   
              <span class="widget-title shop-sidebar">Bài viết mới nhất</span>
              <div class="is-divider small"></div>    
              <ul>        
                <li class="recent-blog-posts-li">
                  <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                      <div class="badge post-date  badge-square">
                        <div class="badge-inner bg-fill" >
                          <span class="post-date-day">20</span><br>
                          <span class="post-date-month is-xsmall">Th3</span>
                        </div>
                      </div>
                    </div><!-- .flex-col -->
                    <div class="flex-col flex-grow">
                      <a href="http://localhost/TGDD/ho-tro-tra-gop/" title="Hỗ trợ trả góp">Hỗ trợ trả góp</a>
                      <span class="post_comments oppercase op-7 block is-xsmall"><a href="http://localhost/TGDD/ho-tro-tra-gop/#respond"></a></span>
                    </div>
                  </div><!-- .flex-row -->
                </li>   
                @foreach ($news as $element)      
                <li class="recent-blog-posts-li">
                  <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                      <div class="badge post-date  badge-square">
                        <div class="badge-inner bg-fill" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url({{ asset($element->logo) }}); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;>
                          <span class="post-date-day">{{ date('d',strtotime($element->postDate)) }}</span><br>
                          <span class="post-date-month is-xsmall">Th{{ date('m',strtotime($element->postDate)) }}</span>
                        </div>
                      </div>
                    </div><!-- .flex-col -->
                    <div class="flex-col flex-grow">
                      <a href="{{ route('getNew',$element->id) }}">{{ $element->title }}</a>
                        <span class="post_comments oppercase op-7 block is-xsmall"><a href="{{ route('getNew',$element->id) }}"></a></span>
                    </div>
                  </div><!-- .flex-row -->
                </li>
                @endforeach
              </ul>   
            </aside>  
          </div><!-- col large-3 -->
        </div><!-- .row -->
      </div>   
    </div><!-- shop container -->
  </main><!-- #main -->
@endsection
@section('script')
  <?php echo  
    '<script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>

        <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>

        <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
    </script>'
  ?>
  <script type="text/template" id="tmpl-unavailable-variation-template">
    
  </script>
  <script type="application/ld+json">
    {"@context":"https:\/\/schema.org\/","@graph":[{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":"1","item":{"name":"Trang ch\u1ee7","@id":"http:\/\/localhost\/TGDD"}},{"@type":"ListItem","position":"2","item":{"name":"C\u1eeda h\u00e0ng","@id":"http:\/\/localhost\/TGDD\/cua-hang\/"}},{"@type":"ListItem","position":"3","item":{"name":"\u0110I\u1ec6N THO\u1ea0I","@id":"http:\/\/localhost\/TGDD\/danh-muc\/dien-thoai\/"}},{"@type":"ListItem","position":"4","item":{"name":"IPHONE","@id":"http:\/\/localhost\/TGDD\/danh-muc\/dien-thoai\/iphone\/"}},{"@type":"ListItem","position":"5","item":{"name":"iPhone 6s\/ 6s Plus","@id":"http:\/\/localhost\/TGDD\/danh-muc\/dien-thoai\/iphone\/iphone-6s-6s-plus\/"}},{"@type":"ListItem","position":"6","item":{"name":"iPhone 6S 16GB Lock M\u1ef9 (Like New)"}}]},{"@context":"https:\/\/schema.org\/","@type":"Product","@id":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-16gb-lock-my-like-new\/","name":"iPhone 6S 16GB Lock M\u1ef9 (Like New)","image":"http:\/\/localhost\/TGDD\/wp-content\/uploads\/2018\/03\/iphone-6s-hong-didongviet_5_6.jpg","description":"M\u00e0n h\u00ecnh: 4.7 inch Full HD H\u0110H: iOS 9 CPU:\u00a0Apple A9 2 nh\u00e2n RAM: 2 GB, ROM: 16 GB Camera: 12MP, Selfie: 5 MP Pin: 1715 mAh","sku":"","offers":[{"@type":"Offer","price":"4500000","priceCurrency":"VND","availability":"https:\/\/schema.org\/InStock","url":"http:\/\/localhost\/TGDD\/cua-hang\/iphone-6s-16gb-lock-my-like-new\/","seller":{"@type":"Organization","name":"Demo thegioidiong flatsome","url":"http:\/\/localhost\/TGDD"}}]}]}
  </script>
  <script type='text/javascript'>
    /* <![CDATA[ */
      var wc_single_product_params = {"i18n_required_rating_text":"Vui l\u00f2ng ch\u1ecdn m\u1ed9t m\u1ee9c \u0111\u00e1nh gi\u00e1","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"","zoom_options":[],"photoswipe_enabled":"","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":""};
    /* ]]> */
  </script>
  <script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=3.3.4') }}'></script>
  <script type='text/javascript' src='{{ asset('js/underscore.min.js?ver=1.8.3') }}'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
      var _wpUtilSettings = {"ajax":{"url":"\/TGDD\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
  </script>
  <script type='text/javascript' src='{{ asset('js/wp-util.min.js?ver=4.9.8') }}'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
      var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/TGDD\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.","i18n_make_a_selection_text":"Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.","i18n_unavailable_text":"R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."};
    /* ]]> */
  </script>
  <script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=3.3.4') }}'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
      var yith_wccl_arg = {"is_wc24":"1"};
    /* ]]> */
  </script>
  <script type='text/javascript' src='{{ asset('plugins/yith-essential-kit-for-woocommerce-1/modules/yith-woocommerce-colors-labels-variations/assets/js/frontend.min.js?ver=1.3.0') }}'></script>
  <script type="text/javascript" src="{{ asset('js/myjs.js') }}"></script>
@endsection