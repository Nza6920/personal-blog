<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Niu的个人博客 - 内容</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/animate.css">
	</head>
<body class="single">
	<div class="fh5co-loader"></div>

	<div id="page">
		<div id="fh5co-aside" style="background-image: url({{ $topic->background }})" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<nav role="navigation">
				<ul>
					<li><a href="{{ route('home.show') }}"><i class="icon-home"></i></a></li>
				</ul>
			</nav>
			<div class="page-title">
				<img src="images/person_1.jpg" alt="">
				<h2 class="text-center">
					{{ $topic->title }}
				</h2>
				<span>{{ date("F . d . Y",  strtotime($topic->created_at)) }}</span>
			</div>
		</div>
		<div id="fh5co-main-content">
			<div class="fh5co-post">
				<div class="fh5co-entry padding">
					<div class="topic-body">
							{!! $topic->body !!}
					</div>
			</div>
		</div>
	</div>

	<div class="fh5co-navigation">
		@if(!$behind)
			<div class="fh5co-cover prev fh5co-cover-sm" style="background-image: url({{ asset('uploads/images/system/default.jpg') }})">
				<a class="copy" href="{{ route('home.show') }}">
		@else
			<div class="fh5co-cover prev fh5co-cover-sm" style="background-image: url({{ $behind->background }})">
				<a class="copy" href="{{ route('topics.show', $behind->id) }}">
		@endif
			<div class="display-t">
				<div class="display-tc">
					<div>
						<span class="behind_post">上一篇</span>
						@if(!$behind)
							<h2>没有上一篇啦</h2>
						@else
							<h2>{{ $behind->title }}</h2>
						@endif
					</div>
				</div>
			</div>
			</a>
		</div>

		@if(!$next)
		<div class="fh5co-cover next fh5co-cover-sm" style="background-image: url({{ asset('uploads/images/system/default.jpg') }})">
				<a class="copy" href="{{ route('home.show') }}">
			@else
			<div class="fh5co-cover next fh5co-cover-sm" style="background-image: url({{ $next->background }})">
				<a class="copy" href="{{ route('topics.show', $next->id) }}">
			@endif
				<div class="display-t">
					<div class="display-tc">
						<div>
							<span class="next_post">下一篇</span>
							@if(!$next)
								<h2>没有下一篇啦</h2>
							@else
								<h2>{{ $next->title }}</h2>
							@endif
						</div>
					</div>
				</div>
			</a>

		</div>
	</div>

	<footer class="home_footer">
		<div>
		&copy; 2018 Free HTML5.
		</div>
	</footer>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/main.js"></script>
	<script src="/js/modernizr-2.6.2.min.js"></script>
	</body>
</html>
