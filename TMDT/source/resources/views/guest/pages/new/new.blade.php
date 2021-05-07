@extends('guest.elements.master')

@section('head')
    <link rel="alternate" type="application/rss+xml" title="Demo thegioidiong flatsome &raquo; Tải Hình Nền Ý Nghĩa Cho Máy Tính Dòng phản hồi" href="http://localhost/TGDD/tai-hinh-nen-y-nghia-cho-may-tinh/feed/" />
    <link rel='prev' title='Đánh giá điện thoại Infocus M810T: Ngang hàng điện thoại cao cấp với mức giá rẻ' href='http://localhost/TGDD/danh-gia-dien-thoai-infocus-m810t-ngang-hang-dien-thoai-cao-cap-voi-muc-gia-re/' />
    <link rel='next' title='Hướng dẫn xoá tài khoản icloud không cần mật khẩu !' href='http://localhost/TGDD/huong-dan-xoa-tai-khoan-icloud-khong-can-mat-khau/' />
    <link rel="canonical" href="http://localhost/TGDD/tai-hinh-nen-y-nghia-cho-may-tinh/" />
    <link rel='shortlink' href='http://localhost/TGDD/?p=2044' />
    <link rel="alternate" type="application/json+oembed" href="http://localhost/TGDD/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2FTGDD%2Ftai-hinh-nen-y-nghia-cho-may-tinh%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://localhost/TGDD/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2FTGDD%2Ftai-hinh-nen-y-nghia-cho-may-tinh%2F&#038;format=xml" />
@endsection

@section('title')
	{{ $news['title'] }}
@endsection

@section('main')
	   <main id="main" class="">
            <div id="content" class="blog-wrapper blog-single page-wrapper">
                <div class="row row-large ">
                    <div class="post-sidebar large-3 col">
                        @include('guest.elements.post-sidebar')
                    </div>
                    <!-- .post-sidebar -->
                    <div class="large-9 col medium-col-first">
                        <article id="post-2044" class="post-2044 post type-post status-publish format-standard has-post-thumbnail hentry category-hinh-nen category-tin-tuc-2">
                            <div class="article-inner ">
                                <header class="entry-header">
                                    <div class="entry-header-text entry-header-text-top text-left">
                                        <h6 class="entry-category is-xsmall">
                                            <a href="http://localhost/TGDD/category/tin-tuc-2/hinh-nen/" rel="category tag">Hình nền</a>, <a href="http://localhost/TGDD/category/tin-tuc-2/" rel="category tag">TIN TỨC</a>
                                        </h6>
                                        <h1 class="entry-title">{{ $news['title'] }}</h1>
                                        <div class="entry-divider is-divider small"></div>
                                        <div class="entry-meta uppercase is-xsmall">
                                            <span class="posted-on">Posted on <a href="http://localhost/TGDD/tai-hinh-nen-y-nghia-cho-may-tinh/" rel="bookmark"><time class="entry-date published updated" datetime="2018-03-09T14:54:48+00:00">{{ $news['postDate'] }}</time></a></span><span class="byline"> by <span class="meta-author vcard"><a class="url fn n" href="http://localhost/TGDD/author/"></a></span></span>
                                        </div>
                                        <!-- .entry-meta -->
                                    </div>
                                    <!-- .entry-header -->
                                    
                                    <!-- .entry-image -->
                                </header>
                                <!-- post-header -->
                                <div class="entry-content single-page">
                    
                                    <div class="description">
                                        {!! $news['content'] !!}
                                    </div>
                                    
                                </div>
                                <!-- .entry-content2 -->
                                <footer class="entry-meta text-left">
                                    This entry was posted in <a href="http://localhost/TGDD/category/tin-tuc-2/hinh-nen/" rel="category tag">Hình nền</a>, <a href="http://localhost/TGDD/category/tin-tuc-2/" rel="category tag">TIN TỨC</a>. Bookmark the <a href="http://localhost/TGDD/tai-hinh-nen-y-nghia-cho-may-tinh/" title="Permalink to Tải Hình Nền Ý Nghĩa Cho Máy Tính" rel="bookmark">permalink</a>. 
                                </footer>
                                <!-- .entry-meta -->
                                <nav role="navigation" id="nav-below" class="navigation-post">
                                    <div class="flex-row next-prev-nav bt bb">
                                        <div class="flex-col flex-grow nav-prev text-left">
                                            <div class="nav-previous"><a href="http://localhost/TGDD/danh-gia-dien-thoai-infocus-m810t-ngang-hang-dien-thoai-cao-cap-voi-muc-gia-re/" rel="prev"><span class="hide-for-small"><i class="icon-angle-left" ></i></span> Đánh giá điện thoại Infocus M810T: Ngang hàng điện thoại cao cấp với mức giá rẻ</a></div>
                                        </div>
                                        <div class="flex-col flex-grow nav-next text-right">
                                            <div class="nav-next"><a href="http://localhost/TGDD/huong-dan-xoa-tai-khoan-icloud-khong-can-mat-khau/" rel="next">Hướng dẫn xoá tài khoản icloud không cần mật khẩu ! <span class="hide-for-small"><i class="icon-angle-right" ></i></span></a></div>
                                        </div>
                                    </div>
                                </nav>
                                <!-- #nav-below -->
                            </div>
                            <!-- .article-inner -->
                        </article>
                        <!-- #-2044 -->
                        <div id="comments" class="comments-area">
                            <h3 class="comments-title uppercase">Bình luận về &ldquo;<span>{{ $news['title'] }}</span>&rdquo;     </h3>
                            <ol class="comment-list" id="comment_content">
                                @if (count($listComment)>0)
                                   
                                
                                @foreach ($listComment as $element)
                                    <li class="comment even thread-even depth-1" id="li-comment-13">
                                        <article id="comment-13" class="comment-inner">
                                            <div class="flex-row align-top">
                                                <div class="flex-col">
                                                    <div class="comment-author mr-half">
                                                        <img alt="" src="{{ asset("themes/flatsome/assets/img/lazy.png") }}" data-src="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=70&#038;d=mm&#038;r=g" srcset="" data-srcset="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=140&#038;d=mm&#038;r=g 2x" class="lazy-load avatar avatar-70 photo" height="70" width="70" /> </div>
                                                </div>
                                                
                                                <div class="flex-col flex-grow">
                                                    <cite class="strong fn"><a href="" rel="external nofollow" class="url">{{ $element->name }}</a></cite> <span class="says">bình luận:</span>
                                                    <div class="comment-content">
                                                        <p>{{ $element->content }}</p>
                                                    </div>
                                                    <div class="comment-meta commentmetadata uppercase is-xsmall clear">
                                                        <a href="http://localhost/TGDD/tai-hinh-nen-y-nghia-cho-may-tinh/#comment-13">
                                                            <time datetime="2018-03-24T14:24:13+00:00" class="pull-left">
                                                                {{ $element->time }} </time>
                                                        </a>
                                                        
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                           
                                        </article>
                                        
                                    </li>
                                @endforeach
                                @endif
                                <!-- #comment-## -->
                            </ol>
                            <!-- .comment-list -->
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="/TGDD/tai-hinh-nen-y-nghia-cho-may-tinh/#respond" style="display:none;">Hủy</a></small></h3>
                                <form action="{{ route('postAddCommentNew') }}" method="post" id="commentform" class="comment-form" novalidate enctype="multipart/form-data">
                                    <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                                    <p class="comment-form-comment">
                                        <label for="comment">Bình luận</label>
                                        <input type="hidden" name="newid" id="newid" value="{{ $news['id'] }}">
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
                                        <input name="submit" type="button" style="background-color: #DD3333; color: #fff;" id="btnCommentNew" ajax_url="{{ route('postAddCommentNew') }}" avatar="{{ asset('themes/flatsome/assets/img/lazy.png') }}" class="submit" value="Bình Luận" />
                                        <input type='hidden' name='comment_post_ID' value='2044' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p>
                                </form>
                            </div>
                            <!-- #respond -->
                        </div>
                        <!-- #comments -->
                    </div>
                    <!-- .large-9 -->
                </div>
                <!-- .row -->
            </div>
            <!-- #content .page-wrapper -->
        </main>
@endsection

@section('script')
    <script type='text/javascript' src='{{ asset('js/comment-reply.min.js?ver=4.9.8') }}'></script>
    <script type="text/javascript" src="{{ asset('js/myjs.js') }}"></script>
@endsection