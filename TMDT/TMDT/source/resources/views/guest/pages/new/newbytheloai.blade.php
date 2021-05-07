@extends('guest.elements.master')

@section('title')
	Tin Tức
@endsection

@section('main')
	<main id="main" class="">
		<div id="content" class="blog-wrapper blog-archive page-wrapper">		
			<div class="row row-large ">
				<div class="post-sidebar large-3 col">
					@include('guest.elements.post-sidebar')
				</div><!-- .post-sidebar -->
				<div class="large-9 col medium-col-first">		  
    				<div id="row-558489663" class="row large-columns-3 medium-columns- small-columns-1 row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
    					@foreach ($news as $element)
  						<div class="col post-item" >
							<div class="col-inner">
								<a href="{{ route('getNew',["id"=>$element->id]) }}" class="plain">
									<div class="box box-text-bottom box-blog-post has-hover">
            							<div class="box-image" >
  											<div class="image-cover" style="padding-top:56%;">
  												<img width="300" height="172" src="{{ asset($element->logo) }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset($element->logo) }} 300w, {{ asset($element->logo) }} 454w" sizes="(max-width: 300px) 100vw, 300px" />
  											</div>
  						  				</div><!-- .box-image -->
          								<div class="box-text text-left" >
											<div class="box-text-inner blog-post-inner">					
												<h5 class="post-title is-large ">{{ mb_substr($element->title, 0,50,'utf-8') }}...</h5>
												<div class="is-divider"></div>
												<p class="from_the_blog_excerpt "></p>
					                            <p class="from_the_blog_comments uppercase is-xsmall">{{ count($element->getCountComment) }} Bình luận</p>
                    						</div><!-- .box-text-inner -->
										</div><!-- .box-text -->
										<div class="badge absolute top post-date badge-square">
											{{-- <div class="badge-inner">
												<span class="post-date-day">09</span>
												<br>
												<span class="post-date-month is-xsmall">Th3</span>
											</div> --}}
										</div>
									</div><!-- .box -->
								</a><!-- .link -->
							</div><!-- .col-inner -->
						</div><!-- .col -->
						@endforeach
					</div>
					<div style="text-align: center;" class="row">
							{{ $news->render('vendor\pagination\semantic-ui') }}
					</div>
				</div> <!-- .large-9 -->
			</div><!-- .row -->
		</div><!-- .page-wrapper .blog-wrapper -->
	</main><!-- #main -->
@endsection

@section('script')
	<script type='text/javascript' src='{{ asset('themes/flatsome/assets/libs/packery.pkgd.min.js?ver=3.5.3') }}'></script>
@endsection