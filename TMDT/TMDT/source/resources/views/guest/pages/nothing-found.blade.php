@extends('guest.elements.master')
@section('title')
	{{-- expr --}}
@endsection
@section('main')
	<main id="main" class="">
		<div id="content" class="blog-wrapper blog-archive page-wrapper">	
			<div class="row row-large ">
				<div class="post-sidebar large-3 col">
					@include('guest.elements.post-sidebar')
				</div><!-- .post-sidebar -->
				<div class="large-9 col medium-col-first">	
					<section class="no-results not-found">
						<header class="page-title">
							<h1 class="page-title">Không có kết quả</h1>
						</header><!-- .page-title -->
						<div class="page-content">		
							<p>It seems we can’t find what you’re looking for. Perhaps searching can help.</p>
							<form method="get" class="searchform" action="http://localhost/TGDD/" role="search">
								<div class="flex-row relative">
									<div class="flex-col flex-grow">
	   	   								<input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Bạn tìm gì ..." autocomplete="off">
									</div><!-- .flex-col -->
									<div class="flex-col">
										<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
											<i class="icon-search"></i>				
										</button>
									</div><!-- .flex-col -->
								</div><!-- .flex-row -->
	    						<div class="live-search-results text-left z-top">
	    							<div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;">
	    							</div>
	    						</div>
							</form>
						</div><!-- .page-content -->
					</section><!-- .no-results -->
				</div> <!-- .large-9 -->
			</div><!-- .row -->
		</div><!-- .page-wrapper .blog-wrapper -->
	</main>
@endsection