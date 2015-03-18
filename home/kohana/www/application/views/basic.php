<!DOCTYPE html>
<html lang="ua">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title ?></title>


<link href="../../public/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../../public/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="../../public/css/animate.css" rel="stylesheet" type="text/css">
<link href="../../public/css/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="../../public/flexslider/flexslider.css" rel="stylesheet" type="text/css">
<link href="../../public/css/form-elements.css" rel="stylesheet" type="text/css">
<link href="../../public/css/media-queries.css" rel="stylesheet" type="text/css">
<link href="../../public/css/style.css" rel="stylesheet" type="text/css">
<link href="../../public/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
</head>
<body>
  
    <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
    <!-- /////////////// -->
    <?php //echo $up; ?>
    <?php // echo $center;?>
    <?php // echo $down; ?>
   
    <!-- ///////////////////////////////////////-->
    
    <nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Рейтин фотографів</a>
				</div>
				
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<!--<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="glyphicon glyphicon-home"></i><br>Головна<span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li class="active"><a href="index.html">Головна</a></li>
								<li><a href="#">Головна</a></li>
							</ul>
                         </li>   -->
                        
                        
                        <li>
							<a href="#"><i class="glyphicon glyphicon-home"></i><br>Головна</a>
						</li>
						<li>
							<a href="#"><i class="glyphicon glyphicon-camera"></i><br>Портфоліо</a>
						</li>
						<li>
							<a href="#"><i class="glyphicon glyphicon-bullhorn"></i><br>Обговорення</a>
						</li>
						<li>
							<a href="#"><i class="glyphicon glyphicon-user"></i><br>Особистий кабінет</a>
						</li>
						<li>
							<a href="#"><i class="glyphicon glyphicon-info-sign"></i><br>Про сервіс</a>
						</li>
						<li>
							<a href="#"><i class="glyphicon glyphicon-phone-alt"></i><br>Контакти</a>
						</li>
					</ul>
				</div
			></div>
		</nav>
        
    <!-- Slider -->
        <div class="slider-container">
            <div class="container">
                <div class="row">
                   <!--
We will make a slider with stylized thumbnails using CSS3
The markup is very simple:
Radio Inputs
Labels with thumbnails to detect click event
Main Image
-->
<div class="slider">
	<input type="radio" name="slide_switch" id="id1"/>
	<label for="id1">
		<img src="../../public/img/slider/1.jpg" width="100"/>
	</label>
	<img src="../../public/img/slider/1.jpg"/>
	
	<!--Lets show the second image by default on page load-->
	<input type="radio" name="slide_switch" id="id2" checked="checked"/>
	<label for="id2">
		<img src="../../public/img/slider/2.jpg" width="100"/>
	</label>
	<img src="../../public/img/slider/2.jpg"/>
	
	<input type="radio" name="slide_switch" id="id3"/>
	<label for="id3">
		<img src="../../public/img/slider/3.jpg" width="100"/>
	</label>
	<img src="../../public/img/slider/3.jpg"/>
	
	<input type="radio" name="slide_switch" id="id4"/>
	<label for="id4">
		<img src="../../public/img/slider/4.jpg" width="100"/>
	</label>
	<img src="../../public/img/slider/4.jpg"/>
	
	<input type="radio" name="slide_switch" id="id5"/>
	<label for="id5">
		<img src="../../public/img/slider/5.jpg" width="100"/>
	</label>
	<img src="../../public/img/slider/5.jpg"/>
    
   
</div>




                </div>
            </div>
        </div>

     <!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1>111 <span class="violet">Andia</span>, a super cool design agency.</h1>
	            		<p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
	            	</div>
            	</div>
        	</div>
        </div>

    
     <!-- Latest work -->
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Our Latest Work</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="../../public/img/portfolio/work1.jpg" alt="Lorem Website" data-at2x="../../public/img/portfolio/work1.jpg">
		                    <h3>Lorem Website</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="../../public/img/portfolio/work1.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="work wow fadeInDown">
		                    <img src="../../public/img/portfolio/work2.jpg" alt="Ipsum Logo" data-at2x="../../public/img/portfolio/work2.jpg">
		                    <h3>Ipsum Logo</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="../../public/img/portfolio/work2.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="../../public/img/portfolio/work3.jpg" alt="Dolor Prints" data-at2x="../../public/img/portfolio/work3.jpg">
		                    <h3>Dolor Prints</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="../../public/img/portfolio/work3.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-3">
		                <div class="work wow fadeInDown">
		                    <img src="../../public/img/portfolio/work4.jpg" alt="Sit Amet Website" data-at2x="../../public/img/portfolio/work4.jpg">
		                    <h3>Sit Amet Website</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="../../public/img/portfolio/work4.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
	            </div>
	        </div>
        </div>
    
    
    <!-- Testimonials -->
        <div class="testimonials-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 testimonials-title wow fadeIn">
		                <h2>Testimonials</h2>
		            </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="../../public/img/testimonials/1.jpg" alt="" data-at2x="../../public/img/testimonials/1.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur..."<br>
		                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab2">
	                				<div class="testimonial-image">
	                					<img src="../../public/img/testimonials/2.jpg" alt="" data-at2x="../../public/img/testimonials/2.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
		                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
		                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
		                                	<a href="#">Minim Veniam, nostrud.com</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab3">
	                				<div class="testimonial-image">
	                					<img src="../../public/img/testimonials/3.jpg" alt="" data-at2x="../../public/img/testimonials/3.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur..."<br>
		                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab4">
	                				<div class="testimonial-image">
	                					<img src="../../public/img/testimonials/1.jpg" alt="" data-at2x="../../public/img/testimonials/1.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
		                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
		                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
		                                	<a href="#">Minim Veniam, nostrud.com</a>
		                                </p>
	                                </div>
	                			</div>
	                		</div>
	                		<!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                			<li role="presentation" class="active">
	                				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
	                			</li>
	                		</ul>
	                	</div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>About Us</h4>
                        <div class="footer-box-text">
	                        <p>
	                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
	                        </p>
	                        <p><a href="about.html">Read more...</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Email Updates</h4>
                        <div class="footer-box-text footer-box-text-subscribe">
                        	<p>Enter your email and you'll be one of the first to get new updates:</p>
                        	<form role="form" action="../../public/subscribe.php" method="post">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="subscribe-email">Email address</label>
		                        	<input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
		                        </div>
		                        <button type="submit" class="btn">Subscribe</button>
		                    </form>
		                    <p class="success-message"></p>
		                    <p class="error-message"></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>Flickr Photos</h4>
                        <div class="footer-box-text flickr-feed"></div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Контакти</h4>
                        <div class="footer-box-text footer-box-text-contact">
                          <p><i class="fa fa-map-marker"></i> Адрес: Івано Франківськ</p>
                          <p><i class="fa fa-phone"></i> Телефон: 0980011123</p>
                          <p><i class="fa fa-user"></i> Skype: drohomiretskiy</p>
	                        <p><i class="fa fa-envelope"></i> Email: drohomiretskiy@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2015 DIPLOM Progect Misha Drohomiretskiy<a href="http://vk.com/weding_foto&lt;/a&gt;.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class=" col-sm-5="col-sm-5" footer-social="footer-social" wow="wow" fadein="fadeIn"> </a><a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-vkontakte"></i></a>
                        
                    </div>
                </div>
            </div>
        </footer>


    
    
    
    
   
    
  <!-- //////////////////////////////////  -->
<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="public/js/classie.js"></script>
<script src="public/js/cbpAnimatedHeader.js"></script>
<script src="public/js/jqBootstrapValidation.js"></script>
<script src="public/js/contact_me.js"></script>
<script src="public/js/agency.js"></script>


</body>
</html>