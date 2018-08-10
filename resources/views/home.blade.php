@extends('layouts.app')
@section('title', 'Niu的个人博客 - 首页')

@section('content')
  <div class="fh5co-loader"></div>

  <div id="page">
    <div id="fh5co-aside" style="background-image: url('uploads/images/image_1.jpg')">


      <div class="overlay"></div>
      <nav role="navigation">
        <ul>
          <li><a href="{{ route('home.show') }}"><i class="icon-home"></i></a></li>
        </ul>
      </nav>

      <div class="sentence">
        <span></span>
        <h2 >白天搬砖,晚上砌梦想.</h2>
      </div>

      <div class="featured">
        <span>Hi:</span>
        <h2>I'm Niu</h2>
      </div>
    </div>
    <div id="fh5co-main-content">
      <div class="fh5co-post">
        <div class="fh5co-entry padding">
          <img src="uploads/images/project-1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
          <div>
            <span class="fh5co-post-date">October 12, 2016</span>
            <h2><a href="{{ route('topics.show',1) }}">How to be an effective web developer</a></h2>
            <p>How two simple exercises changed my life</p>
          </div>
        </div>

        <div class="fh5co-entry padding">
          <img src="uploads/images/project-2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
          <div>
            <span class="fh5co-post-date">October 12, 2016</span>
            <h2><a href="{{ route('topics.show',1) }}">How to be an effective web developer</a></h2>
            <p>How two simple exercises changed my life</p>
          </div>
        </div>

        <div class="fh5co-entry padding">
          <img src="uploads/images/project-6.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
          <div>
            <span class="fh5co-post-date">October 12, 2016</span>
            <h2><a href="{{ route('topics.show',1) }}">How to be an effective web developer</a></h2>
            <p>How two simple exercises changed my life</p>
          </div>
        </div>

        <div class="fh5co-entry padding">
          <img src="uploads/images/project-5.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
          <div>
            <span class="fh5co-post-date">October 12, 2016</span>
            <h2><a href="{{ route('topics.show',1) }}">How to be an effective web developer</a></h2>
            <p>How two simple exercises changed my life</p>
          </div>
        </div>

        <div class="fh5co-entry padding">
          <img src="uploads/images/project-4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
          <div>
            <span class="fh5co-post-date">October 12, 2016</span>
            <h2><a href="{{ route('topics.show',1) }}">How to be an effective web developer</a></h2>
            <p>How two simple exercises changed my life</p>
          </div>
        </div>

        <footer style="text-align:center">
          <div >
          &copy; 2016 Free HTML5.
          </div>
        </footer>
      </div>
    </div>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

@endsection
