<html>
<head>
	<title>ide2</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	 <title>ide2</title>
	 
	 <link rel="shortcut icon" type="image/x-icon" href="assets/img/ide2.png">
    
	<!-- css plugin ----------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/aos.css">
    
	<!-- main css ------------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style-responsives.css">
	<!-- google fonts ---------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link href="https://fonts.googleapis.com/css?family=Hind:600|Lato:300,400|Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style> 

.count-item
 {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}
        /* Modify the background color */ 
          
        .navbar-custom { 
            background-color: black; 
        } 
#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  
}
body {
 
  overflow: hidden; /* Hide scrollbars */
 
}
.card{
		width: 700px;
		height: 200px;
		
	
	}
.item-1, 
.item-2, 
.item-3 {
	position: absolute;
  display: block;
	top: 2em;
  
  width: 60%;
  
  font-size: 2em;
	-webkit-animation-duration: 20s;
	        animation-duration: 20s;
	-webkit-animation-timing-function: ease-in-out;
	        animation-timing-function: ease-in-out;
	-webkit-animation-iteration-count: infinite;
	        animation-iteration-count: infinite;
}
.item-1{
	-webkit-animation-name: anim-1;
	        animation-name: anim-1;
}
.item-2{
	-webkit-animation-name: anim-2;
	        animation-name: anim-2;
}
.item-3{
	-webkit-animation-name: anim-3;
	        animation-name: anim-3;
}
img{
  height:150px;
  width:100%;
}
.card {
    width: 100%;
    height: 200px;
    padding: 20px;
    background-color:lightgray;
}
/* .item{
  padding-left:5px;
  padding-right:5px;
} */
.item-card{
  transition:0.5s;
  cursor:pointer;
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}
@-webkit-keyframes anim-1 {
	0%, 8.3% { left: -100%; opacity: 0; }
  8.3%,25% { left: 25%; opacity: 1; }
  33.33%, 100% { left: 110%; opacity: 0; }
}
@keyframes anim-1 {
	0%, 8.3% { left: -100%; opacity: 0; }
  8.3%,25% { left: 25%; opacity: 1; }
  33.33%, 100% { left: 110%; opacity: 0; }
}
@-webkit-keyframes anim-2 {
	0%, 33.33% { left: -100%; opacity: 0; }
  41.63%, 58.29% { left: 25%; opacity: 1; }
  66.66%, 100% { left: 110%; opacity: 0; }
}
@keyframes anim-2 {
	0%, 33.33% { left: -100%; opacity: 0; }
  41.63%, 58.29% { left: 25%; opacity: 1; }
  66.66%, 100% { left: 110%; opacity: 0; }
}
@-webkit-keyframes anim-3 {
	0%, 66.66% { left: -100%; opacity: 0; }
  74.96%, 91.62% { left: 25%; opacity: 1; }
  100% { left: 110%; opacity: 0; }
}
@keyframes anim-3 {
	0%, 66.66% { left: -100%; opacity: 0; }
  74.96%, 91.62% { left: 25%; opacity: 1; }
  100% { left: 110%; opacity: 0; }
}
    </style> 
</head>
<body>
<nav class="navbar navbar-custom"> 
        <a class="navbar-brand" href="#"></a> 
    </nav> 
	<!-- // NAVIGATION BEGIN------------------------------------------------------------------------------------------------------------------------------------------->
	<div id="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo">
						<a href="index.php"> ide2</a>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="navigation-menu">
						<div class="navbar">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a class="active smoth-scroll" href="#particles-js">Home</a></li>
									<li><a class="smoth-scroll" href="ide.php">Ide</a></li>
									<li><a class="smoth-scroll" href="signup.php">Signup</a></li>
									<li><a class="smoth-scroll" href="#">Login</a></li>
									<li><a class="smoth-scroll" href="Contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // NAVIGATION END ---------------------------------------------------------------------------------------------------------------------------------------------->
<body translate="no">
<br></br>
    <p class="item-1">	Codeforces Round #672 (Div. 2) &nbsp Sep/24/2020   &nbsp 20:05UTC+5.5</p>
	<p class="item-2">  <a href="https://discuss.codechef.com/g/CodeChef-DSA-Learners-Group">https://discuss.codechef.com/g/CodeChef-DSA-Learners-Group</a></p>
	<p class="item-3">
<br></br>
<br></br>
<br></br>
	<section id="course">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12 text-center">
					<br><h2>Courses</h2></br>
				</div>
				<!----1st image---->
<!-- 
				<div class="col-md-4 col-sm-6">
					<div class="blog-item">
						<a   class="blog-img">
								<img src="https://media.geeksforgeeks.org/img-practice/courses/CIP-22Sep-Slider-Web.png" data_src="https://media.geeksforgeeks.org/img-practice/courses/CIP-22Sep-Slider-Web.png" alt="." display="block">
						</a>
						
					</div>
				</div> -->
				<!---2nd image ------->
				<!-- <div class="col-md-4 col-sm-6">
					<div class="blog-item">
						<a   class="blog-img">
								<img src="https://media.geeksforgeeks.org/img-practice/courses/Live-22Sep-Slider-Web.png" data_src="https://media.geeksforgeeks.org/img-practice/courses/Live-22Sep-Slider-Web.png" alt="." display="block">
						</a>
						
					</div>
				</div> -->
				<!--- 3rd image------>
				<!-- <div class="col-md-4 col-sm-6">
					<div class="blog-item">
						<a   class="blog-img">
								<img src="https://media.geeksforgeeks.org/img-practice/courses/GCL-14Sep-Slider-Web.png" data_src="https://media.geeksforgeeks.org/img-practice/courses/GCL-14Sep-Slider-Web.png" alt="." display="block">
						</a>
						
					</div>
				</div> -->
				
			</div>
		</div>
	</section> 
	<div class="container mt-2">
  <div class="row">
    <div class="col-md-4 col-sm-6 item">
      <div class="card item-card card-block">
      
    <img src="assets/img/code1.jpeg" alt="code1">
        
  </div>
    </div>
    <div class="col-md-4 col-sm-6 item">
      <div class="card item-card card-block">
      
    <img src="assets/img/code2.png" alt="code2">
         
  </div>
    </div>
    <div class="col-md-4 col-sm-6 item">
      <div class="card item-card card-block">
      
    <img src="assets/img/code3.jpeg" alt="code3">
        
  </div>
    </div>
       
  </div>
  
</div>
			
<br></br>
<!--------------- welcome ide2 --->
	<div class="description col-md-6 col-sm-4 col-xs-12">
		<h2> Welcome  <strong style="color: #4cd137"> IDE2</strong></h2>
			<h4> No.1 coding platform !!</h4>
					<p> Our IDE2 platofrom is aimed at improving your coding skills.<em> EAT,SLEEP </em>and<em> CODE </em>
						<br>
					</p>			 
	</div>
	<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="count-item">
								<div class="numscroller roller-title-number-2 scrollzip isShown" data-slno="2" data-min="0" data-max="12" data-delay="6" data-increment="1">3</div>
								<div class="count-name-intro">Courses Available  <i class="fa fa-youtube-play"></i></div>
							</div>
						</div> 
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
<footer id="footer">
		<div class="container">
			<div class="col-md-12 text-center">
				<h3> follow us ;)</h3>
				<ul class="social-icons-footer">
				
						<li><a href="https://twitter.com/cmritspeaks?lang=en" target="_blank"><i class="fa fa-twitter"></i></a></li>
				
						<li><a href="https://www.linkedin.com/school/cmr-institute-of-technology/?originalSubdomain=in" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</footer>		
			
 
</html>