<!DOCTYPE html>
<html>
<head>
<title>FeedbacK Engine</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<script src="cities.js"></script>
</head>
<body class="agileits_w3layouts">
    <a href="http://localhost/feedback/admin/" target="_blank">Login</a>

  <div class="topnav">
  <a href="news.html">News</a>
  <a href="about.html">About</a>
  <a class="active" href="#home">Home</a>
  
</div>
</br>
    <h1 class="agile_head text-center">Feedback Form for Government Agency</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feedback.php" method="post" class="agile_form">
		  <h2>How satisfied were you with our Government Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have any other complain, please specify here...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name (optional)" name="name"  />
			<input type="email" placeholder="Your Email (optional)" name="email"/>
			<input type="text" placeholder="Your Number (optional)" name="num"  /></br>
                        <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" value="select" class="form-control" required></select></br>
                        <script language="javascript">print_state("sts");</script></br>
                        <select name="agency" value="select">
                        <option>Select Agency</option>
                        <option  value="RTO">RTO</option>
                        <option  value="MUNCIPALITY">Muncipality</option>
                        <option  value="RAILWAY">RAILWAY</option>
                        <option  value="KSRTC BUS">KSRTC BUS</option></select>
																				

<br>
			<center><input type="submit" value="submit " class="agileinfo" /></center>
	  </form>
	</div>
	<div class="agileits_copyright text-center">
			<p>© 2020 </p>
	</div>
</body>
</html>

