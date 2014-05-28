<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Your Basic Site Informations -->
	<title>OhPhuket - รวบรวมสุดยอดข้อมูลท่องเที่ยวจังหวัดภูเก็ตมากมายที่นี่ !! </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Enews is a news or magazine site template that built with very cool responsive template with clean design, fast load, seo friendly, beauty color and a slew of features." />
    <meta name="keywords" content="Site Template, News, Magazine, Portofolio, HTML, CSS, jQuery, Newsletter, PHP Contact, Subscription, Responsive, Marketing, Clean, SEO" />
    <meta name="author" content="Dots Theme" />
    
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('theme/frontend/one/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/frontend/one/css/bootstrap-responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/frontend/one/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/frontend/one/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/frontend/one/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/frontend/one/css/color.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <noscript><link rel="stylesheet" href="{{ asset('theme/frontend/one/css/no-js.css') }}"></noscript> <!-- If JavaScript Disabled -->
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js') }}"></script>
	<![endif]-->
    
    <!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('theme/frontend/one/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('theme/frontend/one/images/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('theme/frontend/one/images/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('theme/frontend/one/images/apple-touch-icon-114x114.png') }}">
    
    <!-- JavaScript -->
    <script type="text/javascript" src="{{ asset('theme/frontend/one/js/jquery-1.8.3.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.easing.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.flexslider-min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jflickrfeed.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.fitvids.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.lazyload.mini.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.prettyPhoto.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.placeholder.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.jticker.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.mobilemenu.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.isotope.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/jquery.hoverdir.js') }}"></script>
    <script type='text/javascript' src="{{ asset('theme/frontend/one/js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/frontend/one/js/main.js') }}"></script>
    
</head>

<body>

 <div id="top-navigation">
  <div class="container">
    
   <!-- Navigation -->
   <ul class="nav-menu pull-left">
    <li class="active"><a href="index.html">{{ trans("travel.travel") }}</a></li>
    <li><a href="#">Mall</a></li>
    <li><a href="#">Job</a></li>
    <li><a href="#">Contact</a></li>
   </ul>
     <ul class="social pull-right">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                    <img src="{{ asset('theme/frontend/one/images/social/') }}/{{$properties['native']}}" style="width:40px !important" alt="Flickr">
                   

                </a>
            </li>
        @endforeach
    </ul>
    

   
  </div> <!-- End Container -->
 </div> <!-- End Top-Navigation -->
 
 <div class="container">
  <header id="header" class="clearfix">
   
   <!-- Logo -->
   <div class="logo pull-left">
    <a href="index.html"><img src="{{ asset('theme/frontend/one/images/logo.png') }}" alt="Enews" /></a>
   </div>
   
   <!-- Ads -->
   <div class="ads pull-right">
    <img src="{{ asset('theme/frontend/one/images/ads/480x80.png') }}" alt="Ads" />
   </div>
   
  </header> <!-- End Header -->
  
  <nav id="main-navigation" class="clearfix margin-bottom40">
   <ul>
    <li><a href="#">What To Do <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="blog_posts.html">Beaches</a></li>
      <li><a href="blog_posts.html">Restaurants</a></li>
      <li><a href="blog_posts.html">Nightlife</a></li>
      <li><a href="blog_posts.html">Culture</a></li>
     </ul>
    </li>
    <li><a href="blog_posts.html">How to Explore</a></li>
    <li><a href="blog_posts.html">Where To Stay</a></li>
    <li><a href="blog_posts.html">Find a Trip</a></li>
    
    
   </ul>
  </nav> <!-- End Main-Navigation -->
  
  <div id="home-slider" class="home-slider2">
   <div class="flexslider loading">
    <ul class="slides">  
     <li> <!-- One -->
      <img src="{{ asset('theme/frontend/one/images/content/full/1.jpg') }}" alt="Screenshoot 1" />
      <div class="content">
       <div class="header">
        <span class="date">
         <span class="number">24</span>
         <span class="day">Thu</span>
        </span>
        <h3><a href="single_post.html">Alvear Art Black and White Theme</a></h3>
       </div>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum semper nulla vitae diam lobortis interdum varius arcu tincidunt. Quisque sed nisi vel lorem blandit pharetra. [..]</p>
       <a href="single_post.html" class="btn btn-blue">Read More</a>
       <p class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;in <a href="blog_posts.html">Technology</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 comments</p>
      </div>
     </li>
     <li> <!-- Two -->
      <img src="{{ asset('theme/frontend/one/images/content/full/2.jpg') }}" alt="Screenshoot 2" />
      <div class="content">
       <div class="header">
        <span class="date">
         <span class="number">22</span>
         <span class="day">Tue</span>
        </span>
        <h3><a href="single_post.html">Camerette - Your Time to Explore</a></h3>
       </div>
       <p>Suspendisse ornare luctus tempus. Nulla nec orci erat, sed consequat lacus. Curabitur vel odio eu sapien fermentum placerat pharetra ac lectus. Ut erat sapien, lobortis nec mattis eget, tempus sit amet elit. [..]</p>
       <a href="single_post.html" class="btn btn-blue">Read More</a>
       <p class="meta">By <a href="author.html">jagerjack</a>&nbsp;&nbsp;|&nbsp;&nbsp;in <a href="blog_posts.html">Technology</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 comments</p>
      </div>
     </li>
     <li> <!-- Three -->
      <img src="{{ asset('theme/frontend/one/images/content/full/3.jpg') }}" alt="Screenshoot 3" />
      <div class="content">
       <div class="header">
        <span class="date">
         <span class="number">16</span>
         <span class="day">Fri</span>
        </span>
        <h3><a href="single_post.html">Living Room in Italy</a></h3>
       </div>
       <p>Quisque placerat erat ac nunc consequat faucibus. Aenean tortor purus, faucibus a varius nec, facilisis vel enim. Maecenas quis felis ante. Aenean vulputate, risus a porta porta, sapien lectus euismod nisi, ut dapibus felis ante quis diam. [..]</p>
       <a href="single_post.html" class="btn btn-blue">Read More</a>
       <p class="meta">By <a href="author.html">holland</a>&nbsp;&nbsp;|&nbsp;&nbsp;in <a href="blog_posts.html">Technology</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 comments</p>
      </div>
     </li>
     <li> <!-- Four -->
      <img src="{{ asset('theme/frontend/one/images/content/full/4.jpg') }}" alt="Screenshoot 4" />
      <div class="content">
       <div class="header">
        <span class="date">
         <span class="number">13</span>
         <span class="day">Sat</span>
        </span>
        <h3><a href="single_post.html">Mosaic Pool is Amazing And Beautiful Place</a></h3>
       </div>
       <p>Praesent mattis mauris urna. Suspendisse vulputate, urna sit amet laoreet iaculis, magna urna porttitor justo, vel pretium sapien turpis nec turpis. Integer nec consectetur odio. Mauris quis neque velit. [..]</p>
       <a href="single_post.html" class="btn btn-blue">Read More</a>
       <p class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;in <a href="blog_posts.html">Technology</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 comments</p>
      </div>
     </li>
     <li> <!-- Five -->
      <img src="{{ asset('theme/frontend/one/images/content/full/9.jpg') }}" alt="Screenshoot 5" />
      <div class="content">
       <div class="header">
        <span class="date">
         <span class="number">09</span>
         <span class="day">Mon</span>
        </span>
        <h3><a href="single_post.html">Platform House with Minimal Design</a></h3>
       </div>
       <p>Sed mi urna, adipiscing eget dignissim ac, dictum in nisl. Fusce id erat orci, ut placerat augue. Nulla tortor ligula, feugiat tincidunt accumsan ac, feugiat eget mi. Fusce euismod elit eget erat viverra pharetra. [..]</p>
       <a href="single_post.html" class="btn btn-blue">Read More</a>
       <p class="meta">By <a href="author.html">jagerjack</a>&nbsp;&nbsp;|&nbsp;&nbsp;in <a href="blog_posts.html">Technology</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 comments</p>
      </div>
     </li>
    </ul>
   </div> <!-- End Flexslider -->
  </div> <!-- End Home-Slider2 -->
  
  <div class="headlines clearfix">
   <span class="base">30<i>Tue</i></span>
   <div class="text-rotator">
    <div><a href="single_post.html" title="View permalink Small Market and St. Sebastian's Square in Opole">Small Market and St. Sebastian's Square in Opole</a></div>
    <div><a href="single_post.html" title="View permalink Mosaic Pool is Amazing And Beautiful Place">Mosaic Pool is Amazing And Beautiful Place</a></div>
    <div><a href="single_post.html" title="View permalink Glass House Below The Dark of Moon Light">Glass House Below The Dark of Moon Light</a></div>
    <div><a href="single_post.html" title="View permalink Platform House with Minimal Design">Platform House with Minimal Design</a></div>
    <div><a href="single_post.html" title="View permalink Winter Kitchen with Silver Panorama">Winter Kitchen with Silver Panorama</a></div>
   </div>
  </div> <!-- End Headlines -->
  
  <div class="row-fluid">
   <div id="main" class="span8 image-preloader">
  
    <div class="row-fluid">
   
     
    <!-- One -->
     <div class="span6 post no-margin-left">
      <figure>
       <img src="{{ asset('theme/frontend/one/images/content/600/1.jpg') }}" alt="Thumbnail 1" />
       <div class="cat-name">
        <span class="base">Trip</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Camerette - Your Time to Dream">Camerette - Your Time to Dream</a></h2>
       <p>Suspendisse ornare luctus tempus. Nulla nec orci erat, sed consequat lacus. Curabitur vel odio eu sapien fermentum placerat pharetra ac lectus. Ut erat sapien, lobortis nec mattis.</p>
       <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 14, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">15 comments</a></div>
      </div>
     </div>
   
     <!-- Two -->
     <div class="span6 post">
      <figure>
       <img src="{{ asset('theme/frontend/one/images/content/600/2.jpg') }}" alt="Thumbnail 2" />
       <div class="cat-name">
        <span class="base">Beach</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Glass House Below The Dark of Moon Light">Glass House Below The Dark of Moon Light</a></h2>
       <p>Praesent mattis mauris urna. Suspendisse vuputa, urna sit amet laoreet iaculis, magna urna porttitor justo, vel pretium sapien urpis nec turpis. Integer nec consectetur odio.</p>
       <div class="meta">By <a href="author.html">jagerjack</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 13, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">8 comments</a></div>
      </div>
     </div>
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->
   
     <!-- Gallery Posts -->
     <div class="home-galleries no-margin-left">
    
      <!-- Header -->
      <div class="header">
       <div class="base">
        <h4>Beaches</h4>
        <div class="nav-control">
         <span class="previous"></span><span class="next"></span>
        </div>
       </div>
       <div class="arrow arrow-left"></div>
       <div class="arrow arrow-right"></div>
      </div>
    
      <!-- One -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/3.jpg') }}" alt="Thumbnail 1" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Small Market and St. Sebastian's Square in Opole</p>
      </div>
    
      <!-- Two -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/10.jpg') }}" alt="Thumbnail 2" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Living Room in Italy</p>
      </div>
      
      <div class="clearfix"></div> <!-- Clearfix -->
    
      <!-- Three -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/11.jpg') }}" alt="Thumbnail 3" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Platform House with Minimal Design</p>
      </div>
    
      <!-- Four -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/12.jpg') }}" alt="Thumbnail 4" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Mosaic Pool is Very Amazing And Beautiful</p>
      </div>
    
     </div> <!-- End Galleries -->
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->

     <div class="home-galleries no-margin-left">
    
      <!-- Header -->
      <div class="header">
       <div class="base">
        <h4>Restaurant</h4>
        <div class="nav-control">
         <span class="previous"></span><span class="next"></span>
        </div>
       </div>
       <div class="arrow arrow-left"></div>
       <div class="arrow arrow-right"></div>
      </div>
    
      <!-- One -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/3.jpg') }}" alt="Thumbnail 1" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Small Market and St. Sebastian's Square in Opole</p>
      </div>
    
      <!-- Two -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/10.jpg') }}" alt="Thumbnail 2" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Living Room in Italy</p>
      </div>
      
      <div class="clearfix"></div> <!-- Clearfix -->
    
      <!-- Three -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/11.jpg') }}" alt="Thumbnail 3" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Platform House with Minimal Design</p>
      </div>
    
      <!-- Four -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/12.jpg') }}" alt="Thumbnail 4" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Mosaic Pool is Very Amazing And Beautiful</p>
      </div>
    
     </div> <!-- End Galleries -->
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->

     <div class="home-galleries no-margin-left">
    
      <!-- Header -->
      <div class="header">
       <div class="base">
        <h4>Hotel</h4>
        <div class="nav-control">
         <span class="previous"></span><span class="next"></span>
        </div>
       </div>
       <div class="arrow arrow-left"></div>
       <div class="arrow arrow-right"></div>
      </div>
    
      <!-- One -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/3.jpg') }}" alt="Thumbnail 1" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Small Market and St. Sebastian's Square in Opole</p>
      </div>
    
      <!-- Two -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/10.jpg') }}" alt="Thumbnail 2" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Living Room in Italy</p>
      </div>
      
      <div class="clearfix"></div> <!-- Clearfix -->
    
      <!-- Three -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/11.jpg') }}" alt="Thumbnail 3" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Platform House with Minimal Design</p>
      </div>
    
      <!-- Four -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="{{ asset('theme/frontend/one/images/content/300/12.jpg') }}" alt="Thumbnail 4" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Mosaic Pool is Very Amazing And Beautiful</p>
      </div>
    
     </div> <!-- End Galleries -->
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->
   
    
   
    </div> <!-- End Row-Fluid -->
   </div> <!-- End Main -->
  
   <div id="sidebar" class="span4">
  
    <div class="widget clearfix">
     <ul class="social-subscribers">
      <li>
       <a href="#" data-original-title="Like us on Facebook"><img src="{{ asset('theme/frontend/one/images/social/somacro/facebook.png') }}" alt="Facebook" /></a>
       <p>25,645<i>likes</i></p>
      </li>
      <li>
       <a href="#" data-original-title="Follow us on Twitter"><img src="{{ asset('theme/frontend/one/images/social/somacro/twitter.png') }}" alt="Twitter" /></a>
       <p>8,480<i>followers</i></p>
      </li>
      <li>
       <a href="#" data-original-title="Subscribe our RSS Feed"><img src="{{ asset('theme/frontend/one/images/social/somacro/rss.png') }}" alt="RSS" /></a>
       <p>17,289<i>subscribers</i></p>
      </li>
     </ul>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="enews-tab">
    
      <!-- Tab Menu -->
      <ul class="nav nav-tabs" id="enewsTabs">
       <li class="active"><a href="#tab-populars" data-toggle="tab">Populars</a></li>
       <li><a href="#tab-recents" data-toggle="tab">Recents</a></li>
       <li><a href="#tab-comments" data-toggle="tab">Comments</a></li>
      </ul>
 
      <div class="tab-content">
       <div class="tab-pane active" id="tab-populars">
       
        <!-- One -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/5.jpg') }}" alt="Thumbnail 1" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Small Market and St. Sebastian's Square in Opole">Small Market and St. Sebastian's Square in Opole</a></h4>
          <p class="meta">7,849 views&nbsp;&nbsp;|&nbsp;&nbsp;49 comments</p>
         </div>
        </div>
       
        <!-- Two -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/12.jpg') }}" alt="Thumbnail 2" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Living Room in Italy">Living Room in Italy</a></h4>
          <p class="meta">6,988 views&nbsp;&nbsp;|&nbsp;&nbsp;42 comments</p>
         </div>
        </div>
       
        <!-- Three -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/7.jpg') }}" alt="Thumbnail 3" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Platform House With Minimal Design">Platform House With Minimal Design</a></h4>
          <p class="meta">5,724 views&nbsp;&nbsp;|&nbsp;&nbsp;35 comments</p>
         </div>
        </div>
       
        <!-- Four -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/4.jpg') }}" alt="Thumbnail 4" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Winter Kitchen With Silver Panorama">Winter Kitchen With Silver Panorama</a></h4>
          <p class="meta">5,198 views&nbsp;&nbsp;|&nbsp;&nbsp;39 comments</p>
         </div>
        </div>
       
        <!-- Five -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/9.jpg') }}" alt="Thumbnail 5" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Camerette - Your Time to Explore">Camerette - Your Time to Explore</a></h4>
          <p class="meta">4,276 views&nbsp;&nbsp;|&nbsp;&nbsp;22 comments</p>
         </div>
        </div>
       
       </div> <!-- End Populars -->
      
       <div class="tab-pane" id="tab-recents">
       
        <!-- One -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/2.jpg') }}" alt="Thumbnail 1" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Alvear Art Black and White Theme">Alvear Art Black and White Theme</a></h4>
          <p class="meta">In <a href="blog_posts.html">Technology</a> on Jan. 14, 2013</p>
         </div>
        </div>
       
        <!-- Two -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/5.jpg') }}" alt="Thumbnail 2" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Camerette - Your Time to Explore">Camerette - Your Time to Explore</a></h4>
          <p class="meta">In <a href="blog_posts.html">Education</a> on Jan. 13, 2013</p>
         </div>
        </div>
       
        <!-- Three -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/4.jpg') }}" alt="Thumbnail 3" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Living Room in Italy">Living Room in Italy</a></h4>
          <p class="meta">In <a href="blog_posts.html">Entertainment</a> on Jan. 12, 2013</p>
         </div>
        </div>
       
        <!-- Four -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/11.jpg') }}" alt="Thumbnail 4" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Mosaic Pool is Amazing And Beautiful Place">Mosaic Pool is Amazing And Beautiful Place</a></h4>
          <p class="meta">In <a href="blog_posts.html">Education</a> on Jan. 11, 2013</p>
         </div>
        </div>
       
        <!-- Five -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/300/8.jpg') }}" alt="Thumbnail 5" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Platform House with Minimal Design">Platform House with Minimal Design</a></h4>
          <p class="meta">In <a href="blog_posts.html">Business</a> on Jan. 10, 2013</p>
         </div>
        </div>
       
       </div> <!-- End Recents -->
      
       <div class="tab-pane" id="tab-comments">
       
        <!-- One -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/avatar/1.jpg') }}" alt="Avatar 1" /></figure>
         <div class="pull-right content">
          <p><a href="#">mdkiwol</a> on <a href="single_post.html" title="View comment on Glass House Below The Dark of Moon Light">Glass House Below The Dark of Moon Light</a></p>
         </div>
        </div>
       
        <!-- Two -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/avatar/2.jpg') }}" alt="Avatar 2" /></figure>
         <div class="pull-right content">
          <p><a href="#">holland</a> on <a href="single_post.html" title="View comment on Winter Kitchen with Silver Panorama">Winter Kitchen with Silver Panorama</a></p>
         </div>
        </div>
       
        <!-- Three -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/avatar/3.jpg') }}" alt="Avatar 3" /></figure>
         <div class="pull-right content">
          <p><a href="#">jagerjack</a> on <a href="single_post.html" title="View comment on Mosaic Pool is Very Amazing And Beautiful">Mosaic Pool is Very Amazing And Beautiful</a></p>
         </div>
        </div>
       
        <!-- Four -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/avatar/4.jpg') }}" alt="Avatar 4" /></figure>
         <div class="pull-right content">
          <p><a href="#">john</a> on <a href="single_post.html" title="View comment on House in The Woods">House in The Woods</a></p>
         </div>
        </div>
       
        <!-- Five -->
        <div class="item">
         <figure class="pull-left"><img src="{{ asset('theme/frontend/one/images/content/avatar/3.jpg') }}" alt="Avatar 5" /></figure>
         <div class="pull-right content">
          <p><a href="#">jagerjack</a> on <a href="single_post.html" title="View comment on Camerette - Your Time to Explore">Camerette - Your Time to Explore</a></p>
         </div>
        </div>
       
       </div> <!-- End Comments -->
      </div> <!-- End Tab-Content -->
     
     </div> <!-- End Enews-Tab --> 
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="sponsors">
     
      <div class="header">
       <h4>Sponsors</h4>
      </div>
     
      <div class="content">  
       <img src="{{ asset('theme/frontend/one/images/ads/180x180.png') }}" alt="Sponsor 1" />
       <img src="{{ asset('theme/frontend/one/images/ads/180x180.png') }}" alt="Sponsor 2" />
       <img src="{{ asset('theme/frontend/one/images/ads/180x180.png') }}" alt="Sponsor 3" />
       <img src="{{ asset('theme/frontend/one/images/ads/180x180.png') }}" alt="Sponsor 4" />
      </div>
     
     </div>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="best-picture">
    
      <div class="header">
       <h4>Best Picture</h4>
      </div>
    
      <div class="content">
       <p><a href="single_photo.html" title="View permalink House in The Woods">Aenean dictum pharetra nibh, sodales luctus felis aliquet at. Nulla vulputate venenatis orci [..]</a></p>
       
       <!-- Photo Galleries -->
       <figure class="flexslider loading">
        <ul class="slides">
         <li><img src="{{ asset('theme/frontend/one/images/content/full/4.jpg') }}" alt="Thumbnail 1" /></li>
         <li><img src="{{ asset('theme/frontend/one/images/content/full/9.jpg') }}" alt="Thumbnail 2" /></li>
         <li><img src="{{ asset('theme/frontend/one/images/content/full/2.jpg') }}" alt="Thumbnail 3" /></li>
        </ul>
       </figure>
       
       <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 7, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_video.html">15 comments</a></div>
      </div>
     
     </div>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="subscribe-form">
    
      <div class="header">
       <h4>Subscribe Us</h4>
      </div>
    
      <div class="content">
       <p>You can stay up-to-date with our latest news with subscribe our newsletter.</p>
       <form name="subscribe-form" id="enews-subscribe-form" method="post" action="#">
        <input type="text" name="email_address" placeholder="ex: your_email@domain.com" />
        <input type="submit" name="submit" value="Send" class="btn btn-blue" />
       </form>
      </div>
     
     </div>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="best-video">
    
      <div class="header">
       <h4>Video of The Week</h4>
      </div>
    
      <div class="content">
       <p><a href="single_video.html" title="View permalink Devil May Cry Launch Trailer">Aenean dictum pharetra nibh, sodales luctus felis aliquet at. Nulla vulputate venenatis orci [..]</a></p>
       <figure><iframe height="240" src="http://www.youtube.com/embed/psSqNRaHBgk?feature=player_detailpage"></iframe></figure>
       <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 12, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_video.html">15 comments</a></div>
      </div>
     
     </div>
    </div> <!-- End Widget -->
  
   </div> <!-- End Sidebar -->
  
  </div> <!-- End Row-Fluid -->
 </div> <!-- End Container -->
 
 <div class="margin-top40"></div> <!-- End Bottom -->
  
 <div id="footer">
  <div class="container">
   
   <p class="pull-left">Copyright 2013 OhPhuket.com&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">OhPhuket.com</a></p>
  
   
  </div> <!-- End Container -->
 </div> <!-- End Footer -->
 
 <a href="#" class="scrollup" title="Back to Top!">Scroll</a>

</body>
</html>