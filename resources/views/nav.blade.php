<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>ELECTION</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Colors CSS -->
    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    

</head>
<body class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div class="topbar text-center hidden-xs">
        <marquee behavior="" direction=""><p>@Copyright by Ousmane Doumbia</p></marquee>
    </div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="form-group">
                    <button class="btn btn-success" onclick="event.preventDefault();
                        this.closest('form').submit();">Log Out</button>
                </div>
            </form> 
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll-nav="0" href="#main-banner" class="active">Home</a></li>
                        <li><a href="resultats-sondage">Sondage</a></li>
                        <li><a href="programme-candidat">Liste Programme</a></li>
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
	
	<div id="main-banner" class="banner-one" data-scroll-index="0">
		<div data-src="/uploads/slide-1.jpg">
			<div class="camera_caption">
				<div class="container">
					<h1 class="wow fadeInUp animated">World is greater than five #ELPolitic</h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s">With ELPolitic responsive landing page template, you can showcase your next politics & politician websites!</p>
					<a data-scroll href="#" class="btn btn-light btn-radius btn-brd grd1">DONATE</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
		<div data-src="/uploads/slide-2.jpg">
			<div class="camera_caption">
				<div class="container">
					<h1 class="wow fadeInUp animated">World is greater than five #ELPolitic</h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s">With ELPolitic responsive landing page template, you can showcase your next politics & politician websites!</p>
					<a data-scroll href="#" class="btn btn-light btn-radius btn-brd grd1">DONATE</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
		<div data-src="/uploads/slide-3.jpg">
			<div class="camera_caption">
				<div class="container">
					<h1 class="wow fadeInUp animated">World is greater than five #ELPolitic</h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s">With ELPolitic responsive landing page template, you can showcase your next politics & politician websites!</p>
					<a data-scroll href="#" class="btn btn-light btn-radius btn-brd grd1">DONATE</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
	</div> <!-- /#theme-main-banner -->


    <div id="main-banner" data-scroll-index="0" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>Welcome to  ELPolitic</h2>
                        <blockquote class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</blockquote>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="/uploads/about_04.png" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1"> 

            <div class="row text-center">
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="/uploads/Sonko.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="/uploads/Sonko.jpeg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Let's work for a better future</h3>
								<p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, 
								convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="/uploads/Fall.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="/uploads/Fall.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Parliament building was renovated</h3>
								<p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo 
								rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="/uploads/Dione.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="/uploads/Dione.jpeg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Start new legislative year</h3>
								<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="/uploads/politic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="/uploads/politic_02.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Parliament building was renovated</h3>
								<p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
							</div>
                        </div>
                    </div><!-- end service -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section nopad">
        <img src="/uploads/" alt="" class="img-responsive">
    </div>
     <!-- ALL JS FILES -->
     <script src="/js/all.js"></script>
	<!-- Camera Slider -->
	<script src="/js/jquery.mobile.customized.min.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script> 
	<script src="/js/camera.min.js"></script>
	<script src="/js/scrollIt.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/js/custom.js"></script>
    <script src="/js/jquery.vide.js"></script>

</body>
</html>