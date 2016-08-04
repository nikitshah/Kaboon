<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Kaboon</title>
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/style.css"> 
    	
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<!--the grey border in the background is because navbar-default which gets activated by bootstrap.min-->
				<div class="container">
					<div class="row">
					<div class="navbar-header">
						<div class="navbar-brand pull-left col-xs-4">
							<h1 id="brand" >Kaboon</h1>
						</div> <!--navbar-brand-->  
						
						<form class="navbar-form navbar-right col-xs-3">
							 <div class="form-groups">
        						<input type="text" class="form-control" placeholder="Search">
    						
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search "></span></button>
							</div>
						</form>
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false col-xs-4">
						<!--navbar-toggle:positioning and styling, button shows up before 767 px. collapsed doesn't exist in bootstrap but it means that the button is initially in collapsed state. data: are javascript plugins(use it) aria:for screen readers -->
          				<span class="sr-only">Toggle navigation</span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				</button>
          				</div>
        			<!--navbar-header-->
        		    <div id="collapsable-nav" class="collapse navbar-collapse">
        		    
						<!--navbar bootstrap property is that it can be-->
          				<ul id="nav-list" class="nav navbar-nav navbar-right">
          				<!--navbar makes things valid in xs so by default properties of navbar when button is pull-down it makes sure that the list is alligned in the center which invalidates navbar-right in xs. Not the case in pull-right-->
           					<li><a href="#" class="glyphicon glyphicon-home"></a></li>
           					<li><a href="#"><?=$_SESSION['sess_user'];?></a></li>
           					<li><a href="logout.php">Logout</a></li>
            				<li><a href="sample.php" target="_blank">careers</a></li>
            				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
            					<ul class="dropdown-menu">
            						<li><a href="sample.php" target="_blank">Community</a></li>
            						<li><a href="sample.php" target="_blank">Our Blog</a></li>
            						<li><a href="sample.php" target="_blank">Advertisers</a></li>
            						<li><a href="sample.php" target="_blank">Help</a></li>
            						<li><a href="sample.php" target="_blank">Report a problem</a></li>
            					</ul>
            				</li>
          			</ul>
        			</div>
        			</div><!--row-->
				 </div><!--container-->
			</nav>
		</header>

			<div id="main content" class="container">
				<div id="tiles" class="row">
					<div  class= "col-lg-6 col-md-6 col-sm-6 col-xs-12">
						 <div id="articles" >
						 <h2>Top Stories</h2>
						 <main>
						 	<div class="article current">
        						<div class="item row">
          							
          							<div class="col-xs-9">
									<p class="title">Iran got $400 on day prisoners freed</p>
									</div>
				          			<div class="col-xs-3">
				            		<p class="pubdate">55 min</p>
				          			</div>
				        		</div>
				        		<div class="description row">
				          			
				          			<a href="http://www.cnn.com/2016/08/03/politics/us-sends-plane-iran-400-million-cash/index.html" target="_blank" class="col-xs-9">
				            		<h1>US sent plane with $400 million in cash to Iran</h1>
				            		<p id="news">The Obama administration secretly arranged a plane delivery of $400 million in cash...</p>
				          			</a>
				          			<div class="col-xs-3">&nbsp;</div>
				        		</div>
				      		</div>

				      		<div class="article">
				        		<div class="item row">
				          			
				         			<div class="col-xs-9">
				            		<p class="title">Phoenix serial shooter strikes again</p>
				          			</div>
				         	 		<div class="col-xs-3">
				            		<p class="pubdate">2 hours</p>
				          			</div>
				        		</div>
				        		<div class="description row">
				          			
				          			<a href="http://www.cnn.com/2016/08/04/us/phoenix-serial-shootings/index.html" target="_blank" class="col-xs-9">
				            		<h1>Phoenix police say 'serial street shooter' now connected to 9 shootings</h1>
				            		<p id="news">Phoenix police say that a serial shooter has struck for the ninth time. The Phoenix Police Department have connected a spate of mysterious...</p>
				          			</a>
				          			<div class="col-xs-3">&nbsp;</div>
				        		</div>
				      		</div>

				      		<div class="article">
				        		<div class="item row">
				          			<div class="col-xs-9">
				            		<p class="title">GOP's Trump freak-out</p>
				          			</div>
				          			<div class="col-xs-3">
				            		<p class="pubdate">3 hours</p>
				          			</div>
				        			</div>
				        		<div class="description row">
				          		
				          			<a href="http://www.cnn.com/2016/08/03/politics/donald-trump-campaign-disarray/index.html" target="_blank" class="col-xs-9">
				            		<h1>The GOP's Donald Trump freak-out</h1>
				            		<p id="news">Republicans are freaking out about Donald Trump, but the candidate himself is insisting his campaign has never...</p>
				          			</a>
				          			<div class="col-xs-3">&nbsp;</div>
				        		</div>
				      		</div>

				      		<div class="article">
				        		<div class="item row">

				         	 		<div class="col-xs-9">
				            		<p class="title">1 dead in London knife attack</p>
				          			</div>
				          			<div class="col-xs-3">
				            		<p class="pubdate">5 hours</p>
				          			</div>
				        		</div>
				        		<div class="description row">
				          			
				          			<a href="http://www.cnn.com/2016/08/03/europe/london-knife-attack/index.html" target="_blank" class="col-xs-9">
				            		<h1>London knife attack leaves 1 dead, 5 hurt</h1>
				            		<p id="news">Londoners woke up Thursday to a heavier police presence on their streets after authorities say a man stabbed six people late...</p>
				          			</a>
				          			<div class="col-xs-3">&nbsp;</div>
				        		</div>
				      		</div>

				      		<div class="article">
				        		<div class="item row">
				          			<div class="col-xs-9">
				            		<p class="title">Nike getting out of golf equipment business</p>
				          			</div>
				          			<div class="col-xs-3">
				            		<p class="pubdate">12 hours</p>
				          			</div>
				        		</div>
				        		<div class="description row">
				          		
				          			<a href="http://money.cnn.com/2016/08/03/news/companies/nike-golf-equipment/index.html" target="_blank" class="col-xs-9">
				            		<h1>Nike halting golf equipment business</h1>
				            		<p id="news">Nike plans to stop making golf clubs, balls and bags so that it can focus on expanding its line of golf shoes and sportswear...</p>
				          			</a>
				          			<div class="col-xs-3">&nbsp;</div>
				        		</div>
				      		</div>

				      		<div class="article">
				        		<div class="item row">
				          			<div class="col-xs-9">
				            		<p class="title">Opinion: Libertarians could spoil party</p>
				          			</div>
				          			<div class="col-xs-3">
				            		<p class="pubdate">15 hours</p>
				          			</div>
				        		</div>
				        		<div class="description row">
				          			<a href="http://www.cnn.com/2016/08/03/opinions/libertarians-opinion-zwolinski/index.html" target="_blank" class="col-xs-9">
				            		<h1>Libertarian ticket could spoil Clinton party</h1>
				            		<p id="news">With national polling numbers hovering around 12%, the Libertarian ticket of Gary Johnson and William Weld has the potential to be a real spoiler in the presidential...</p>
				          			</a>
				          			<div class="col-xs-3">&nbsp;</div>
				        		</div>
				      		</div>

				     		<div class="article">
				        		<div class="item row">
				          			<div class="col-xs-9">
				            		<p class="title">Hurricane Earl makes landfall</p>
				          			</div>
				          			<div class="col-xs-3">
				            		<p class="pubdate">Mar 22</p>
				          			</div>
				        		</div>
				        		<div class="description row">
				          		
				          			<a href="http://www.cnn.com/2016/08/03/americas/hurricane-earl/index.html" target="_blank" class="col-xs-9">
				            		<h1>Hurricane Earl makes landfall in Belize</h1>
				            		<p id="news">The storm is pushing west at 14 mph (23 kph).The Category 1 storm continues to pound the area with strong winds, heavy rain and storm surge after spreading drenching rain over the Central American country...</p>
				          			</a>
				          			<div class="col-xs-3">&nbsp;</div>
				        		</div>
				      		</div>

						 </main>

						 </div>
					</div>


					<div class= "col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div id="sliders">
						<h2>TRENDING!!</h2>
						<main>
							<div class="slide active-slide ">
								<iframe width="100%" height="360" src="https://www.youtube.com/embed/qEFMof8eAIk?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>

							<div class="slide ">
								<iframe width="100%" height="360" src="https://www.youtube.com/embed/fIHH5-HVS9o?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>

							<div class="slide ">
								<iframe width="100%" height="360" src="https://www.youtube.com/embed/_6T24vpTiy4?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>

							<div class="slide ">
								<iframe width="100%" height="360" src="https://www.youtube.com/embed/WkeSahm-Y00?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>
							</main>

							<footer>
							 <div class="slider-nav">
					      <a href="#" class="arrow-prev"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-prev.png"></a>
					      <ul class="slider-dots">
					        <li class="dot active-dot">&bull;</li>
					        <li class="dot">&bull;</li>
					        <li class="dot">&bull;</li>
					        <li class="dot">&bull;</li>
					      </ul>
					      <a href="#" class="arrow-next"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-next.png"></a>
					    </div> 
						</footer>
						</div>
						
					</div>

				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
						<div id="tech" >
							<h2>Tech</h2>
							<div class="arc">
								<img src="img1.jpg" style="width:100%;height:200px;">
				            		<p class="feed"><a href="http://money.cnn.com/2016/07/27/technology/xiaomi-notebook-air-apple-copycat/index.html?iid=ob_homepage_tech_pool" target="_blank" >'Notebook Air' looks an awful lot like a MacBook</a></p>
				          			<p class="feed"><a href="http://money.cnn.com/2016/07/29/technology/microsoft-layoffs-july-jobs/index.html?iid=ob_homepage_tech_pool" target="_blank" >Microsoft to cut about 2,850 more jobs</a></p>
				          			<p class="feed"><a href="http://money.cnn.com/2016/07/28/technology/alphabet-earnings-google-moonshots/index.html?iid=ob_homepage_tech_pool" target="_blank" >Google's moonshot projects lost $859 million</a></p>
				          			<p class="feed"><a href="http://money.cnn.com/2016/07/27/technology/china-leeco-vizio-deal/index.html?iid=ob_homepage_tech_pool" target="_blank" >Chinese tech firm just snapped up Vizio for $2 billion</a></p>
				      		</div>	
	    				</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
						<div id="entertainment">
							<h2>Entertainment</h2>
							<div class="arc">
								<img src="img2.jpg" style="width:100%;height:200px;">
				            		<p class="feed"><a href="http://www.cnn.com/2016/08/01/entertainment/harry-potter-cursed-child-react/index.html" target="_blank" >New 'Harry Potter': Have you finished yet?</a></p>
				            		<p class="feed"><a href="http://www.cnn.com/2016/07/30/entertainment/i-am-jfk-jr-documentary-review/index.html" target="_blank" >'I Am JFK Jr.' zeroes in on lost promise of a famous life cut short</a></p>
				          			<p class="feed"><a href="http://www.cnn.com/2016/08/01/entertainment/meet-the-donors-alexandra-pelosi-documentary-review/index.html" target="_blank" >Alexandra Pelosi's 'Meet the Donors' exposes billionaires who buy into politics</a></p>
				          			<p class="feed"><a href="http://www.cnn.com/2016/07/28/entertainment/netflix-amazon-prime-hulu-august/index.html" target="_blank" >What's streaming on Netflix, Amazon, Hulu in August</a></p>
				      		</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
						<div id="sports">
							<h2>Sports</h2>
							<div class="arc">
								<img src="img3.jpg" style="width:100%;height:200px;">
				            		<p class="feed"><a href="http://bleacherreport.com/articles/2654564-us-rugby-7s-enforcer-jillion-potter-is-the-only-help-youd-need-in-a-rumble?utm_source=cnn.com&utm_medium=referral&utm_campaign=editorial" target="_blank" >'US Olympian survived broken neck, cancer</a></p>
				          			<p class="feed"><a href="http://thelab.bleacherreport.com/the-future-of-football-practice/" target="_blank" >CFB team stopped tackling each other and started winning</a></p>
				          			<p class="feed"><a href="http://bleacherreport.com/articles/2655176-fans-injured-at-heber-demolition-derby-after-drive-shaft-flies-into-stands" target="_blank" >Fans Injured at Heber Demolition Derby </a></p>
				          			<p class="feed"><a href="http://bleacherreport.com/articles/2655151-olympic-athletes-at-risk-of-becoming-violently-ill-from-rio-water-says-ap?utm_source=cnn.com&utm_medium=referral&utm_campaign=editorial" target="_blank" >Athletes at risk of becoming ill from Rio water</a></p>
				      		</div>
						</div>
					</div>
				
			</div>
			</div>

			<div id="footer">
			<p id="line2">NIKIT SHAH &copy; Copyright</p>
			<p id="line3">
				<a href="sample.php" target="_blank"> Terms of Use</a> | <a href="sample.php" target="_blank"> Privacy Policy</a> | <a href="sample.php" target="_blank"> Advertise with us</a> | <a href="sample.php" target="_blank"> About us</a> | <a href="sample.php" target="_blank"> Work for us </a> | <a href="sample.php" target="_blank"> Help </a> | <a href="http://www.cnn.com/?refresh=1" target="_blank">Kaboon Newsource</a>
				</p>
			</div>
		<script src="js/jquery-2.1.4.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
  		<script src="js/app.js"></script>
	</body>
</html>
<?php
}
?>
