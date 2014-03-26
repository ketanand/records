<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RecordsTree: Soundscaping your world.</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="rt-theme">
        <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="nav-logo-wrapper hidden-xs" href="/"><img src="/public/images/rt.PNG" alt="Records Tree" class="nav-logo " ></a>
	  <a class="nav-logo-wrapper visible-xs" href="/"><img src="/public/images/rt.PNG" width="55px" alt="Records Tree" ></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
	    <li class="active"><a href="/"><strong>HOME</strong></a></li>
            <li><a href="/records/charts/top20"><strong>TOP 20</strong></a></li>
            <li><a href="/records/artistoftheweek" ><strong>ARTIST OF THE WEEK</strong></a></li>
            <li><a href="/blogs"><strong>BLOGS</strong></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>CHARTS</strong> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Records 50</a></li>
                <li><a href="#">Firangi 100</a></li>
                <li><a href="#">Top 20</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Genre</li>
                <li><a href="#">Sufi</a></li>
                <li><a href="#">Indi Pop</a></li>
              </ul>
            </li>
          </ul>
	  <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.facebook.com/recordstree" class="nopadding" ><img src="/public/images/fb.PNG" class="nav-social" alt="Facebook" ></a></li>
            <li><a href="https://www.twitter.com/recordstree" class="nopadding" ><img src="/public/images/twitter.PNG" class="nav-social" alt="Twitter" ></a></li>
            <li><a href="#" class="nopadding"><img src="/public/images/google.PNG" class="nav-social" alt="Goolge"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container-fluid hidden-xs">
	<div class="row" >
		<div class="col-xs-12 col-md-4 nopadding">
			 <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		      <div class="carousel-inner">
			<div class="item active">
			  <img src="/public/images/img1.jpg" alt="First slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>Example headline.</h1>
			      <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			    </div>
			  </div-->
			</div>
			<div class="item">
			  <img src="/public/images/img2.jpg" alt="Second slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>Another example headline.</h1>
			      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			    </div>
			  </div-->
			</div>
			<div class="item">
			  <img src="/public/images/img3.jpg" alt="Third slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>One more for good measure.</h1>
			      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			    </div>
			  </div-->
			</div>
		      </div>
		      <!--a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a-->
		    </div><!-- /.carousel -->
		</div>
		<div class="col-md-4 nopadding">
		      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		      <div class="carousel-inner">
			<div class="item active">
			  <img src="/public/images/img1.jpg" alt="First slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>Example headline.</h1>
			      <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			    </div>
			  </div-->
			</div>
			<div class="item">
			  <img src="/public/images/img2.jpg" alt="Second slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>Another example headline.</h1>
			      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			    </div>
			  </div-->
			</div>
			<div class="item">
			  <img src="/public/images/img3.jpg" alt="Third slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>One more for good measure.</h1>
			      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			    </div>
			  </div-->
			</div>
		      </div>
		      <!--a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a-->
		    </div><!-- /.carousel -->
		</div>
		<div class="col-md-4 nopadding">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		      <div class="carousel-inner">
			<div class="item active">
			  <img src="/public/images/img1.jpg" alt="First slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>Example headline.</h1>
			      <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			    </div>
			  </div-->
			</div>
			<div class="item">
			  <img src="/public/images/img2.jpg" alt="Second slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>Another example headline.</h1>
			      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			    </div>
			  </div-->
			</div>
			<div class="item">
			  <img src="/public/images/img3.jpg" alt="Third slide">
			  <!--div class="container">
			    <div class="carousel-caption">
			      <h1>One more for good measure.</h1>
			      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			    </div>
			  </div-->
			</div>
		      </div>
		      <!--a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a-->
		    </div><!-- /.carousel -->
		</div>
	</div>
    </div>

    <div class="container" >
	<div class="row" >
		<div class="col-xs-12 col-md-6 vertical-margin" >
			<div class="row">
				<div class="col-xs-12 col-md-7" >
					<img src="/public/images/advaita.jpg" class="home-news-image" alt="" />
				</div>
				<div class="col-xs-12 col-md-5" >
				        <h4>Advaita Plays at saarc</h4>
				        <p>Fusion band Advaita played at the saarc festival in front of packed crowds.</p>
			             	<a class="btn btn-primary" href="#">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 vertical-margin" >
			<div class="row">
				<div class="col-xs-12 col-md-7" >
					<img src="/public/images/college.jpg" class="home-news-image" alt="" />
				</div>
				<div class="col-xs-12 col-md-5" >
				        <h4>College Euphoria</h4>
				        <p>Music on the rise...</p>
				        <a class="btn btn-primary" href="#">Read More</a>
		                </div>
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="col-xs-12 col-md-6 vertical-margin" >
			<div class="row">
				<div class="col-xs-12 col-md-7" >
					<img src="/public/images/blore.jpeg" class="home-news-image" alt="" />
				</div>
				<div class="col-xs-12 col-md-5" >
				        <h4>Rock Buzz in guzzler town</h4>
				        <p>Ever expanding rock scene in India's pub capital..</p>
				        <a class="btn btn-primary" href="#">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 vertical-margin" >
			<div class="row">
				<div class="col-xs-12 col-md-7" >
					<img src="/public/images/records.jpg" class="home-news-image" alt="" />
				</div>
				<div class="col-xs-12 col-md-5" >			
		                        <h4>Records Tree World tour 2020</h4>
		                        <p>Check out the videos and behind the scene fun..</p>
	                                <a class="btn btn-primary" href="#">Read More</a>
        	                </div>
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="col-md-12" >
		</div>
	</div>
    </div>

    <div class="container-fluid footer" >
	<div class="row vertical-margin">
		<div class="col-md-3 hidden-xs">
			<div class="row">
				<img width="250px" src="/public/images/rt-tree.png" >
			</div>
		</div>
		<div class="col-xs-12 col-md-2">
			<ul>
						<li><a href="/artistoftheweek" >Artist Of The Week</a></li>
						<li><a href="charts/top20" >Top 20</a></li>
						<li><a href="charts/records50" >Records 50</a></li>
						<li><a href="/blogs" >Blogs</a></li>
						<li><a href="/news" >News</a></li>
						<li><a href="/contact-us" >Contact Us</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-md-7">'
				<div class="row text-center">
				<img src="/public/images/rt.PNG" width="100px" >
				</div>
				<div class="row" >
				<h2 class="text-center"> ABOUT US</h2>
				</div>
				<div class="row" >
					<p class="text-justified">
						We love music. And we are sure you do, too. Well, that's why you are here, right? And that's why we at RecordsTree have started off on this journey. A journey whose destination we don't know, and frankly, don't even care about. Because what we really care about are the varied sounds we hope to discover along the way. And when we are talking about the sounds of our country, varied is quite an understatement. 
					</p>
				</div>
		</div>
	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </body>
</html>
