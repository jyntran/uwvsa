<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>UW VSA</title>

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="assets/css/foundation.css" />
	<link rel="stylesheet" href="assets/css/style.css" />


    <script src="assets/js/modernizr.js"></script>
	
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="assets/img/uwvsa-logo-512.png" />

	<!--
	<link rel="icon" type="image/x-icon" href="http://example.com/favicon.ico" />
	<link rel="icon" type="image/gif" href="http://example.com/favicon.gif" />	
	-->

	<script language="JavaScript" src="assets/js/gen_validatorv31.js" type="text/javascript"></script>
	
</head>

<body>
	<header>
	 <a name="top"></a>

	 <nav class="top-bar" data-topbar>
	  <ul class="title-area">
          <li class="name">
           <h1><a href="#">UW VSA</a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
         </ul>

         <section class="top-bar-section">

         <!-- Right Nav Section -->
       <ul class="right show-for-large-up">
	   <li><a href="#about" class="smoothScroll"><span id="nav1" class="cms-editable">About</span></a></li>
	   <li><a href="#sponsors" class="smoothScroll"><span id="nav2" class="cms-editable">Sponsors</span></a></li>
	   <li><a href="#resources" class="smoothScroll"><span id="nav3" class="cms-editable">Resources</span></a></li>
	   <li><a href="#follow" class="smoothScroll"><span id="nav4" class="cms-editable">Follow</span></a></li>
	   <li><a href="#contact" class="smoothScroll"><span id="nav5" class="cms-editable">Contact</span></a></li>
         </ul>

         <ul class="right hide-for-large-up">
	   <li><a href="#about" class="smoothScroll"><span id="nav1" class="cms-editable">About</span></a></li>
	   <li><a href="#sponsors" class="smoothScroll"><span id="nav2" class="cms-editable">Sponsors</span></a></li>
	   <li><a href="#resources" class="smoothScroll"><span id="nav3" class="cms-editable">Resources</span></a></li>
	   <li><a href="#follow" class="smoothScroll"><span id="nav4" class="cms-editable">Follow</span></a></li>
	   <li><a href="#contact" class="smoothScroll"><span id="nav5" class="cms-editable">Contact</span></a></li>	  </ul>
	  </section>
	 </nav>
	</header>

	<div class="container">

	 <section id="top">
	  <div id="top-container">
	  <img id="banner" class="banner cms-editable" src="assets/img/banner.png"></img>
	  <span id="top-text">Reconnect.<br/>Discover.<br/>Engage.</span>
	  <span id="top-subtext">The Official Waterloo Chapter<br/>of the Vietnamese Students' Association</span>
	  </div>
	 </section>

	 <article id="box1" class="box">
	  <a name="about"></a>
	  <h2 id="heading1" class="heading cms-editable">About</h2>
	  <p id="aboutInfo" class="boxText cms-editable">
	  To the University of Waterloo, we are your connection to Vietnamese culture, Vietnamese traditions, and the Vietnamese community. UWVSA strengthens the campus community through organizing social events, cultural events, and collaborations. 
	  <br/><br/>
	  The UWVSA operates on the premise of being inclusive. The club shall not be discriminatory in terms of, but not limited to race, ethnicity, religion, gender, citizenship, sexual orientation, physical ability, mental ability, marital, social, or financial status.

	  </p>
	 </article>

	 <article id="box2" class="box">
	  <a name="sponsors"></a>
	  <h2 id="heading2" class="heading cms-editable">Sponsors</h2>
	  <p id="sponsorsInfo" class="boxText cms-editable">
		We wish to extend a warm thank-you to our sponsors.
	  </p>
	 </article>	 

	 <article id="box3" class="box">
	  <a name="resources"></a>
	  <h2 id="heading3" class="heading cms-editable">Resources</h2>
	  <p id="resourcesInfo" class="boxText cms-editable">
	   <?php include('vietphrase.html'); ?>
	   <div class="row">
		   <div class="small-6 columns">
		   <h3 class="heading-links-cult">Cultural Information</h3>
		   Coming soon
		   </div>
		   <div class="small-6 columns">
		   <h3 class="heading-links-org">Vietnamese Organizations</h3>
		   <a href="http://uvsaontario.org/">UVSA Ontario</a>
		   </div>
	   </div>
	  </p>
	 </article>	 

	 
	 <article id="box4" class="box">
	  <a name="follow"></a>
	  <h2 id="heading4" class="heading cms-editable">Follow</h2>

		<div id="buttonFacebook" class="followButton">
		<a href="https://www.facebook.com/groups/UWVSA"><span class="followButtonText">&#xE802;</span></a>
		</div>
		<div id="buttonTwitter" class="followButton">
		<a href="https://twitter.com/UWVSA"><span class="followButtonText">&#xE804;</span></a>
		</div>
		<div id="buttonInstagram" class="followButton">
		<a href="http://instagram.com/uwvsa"><span class="followButtonText">&#xE805;</span></a>
		</div>

		<script type="text/javascript" class=	"rebelmouse-embed-script" src="https://www.rebelmouse.com/static/js-build/embed/embed.js?site=uwvsa&height=650&flexible=0&scrollbar_theme=dark"></script>

	 </article>

	 <article id="box5" class="box">
	  <a name="contact"></a>
	  <h2 id="heading5" class="heading cms-editable">Contact</h2>

	  <div class="row">	  
	    <div class="large-6 columns">
		<div id="buttonEmail" class="followButton">
		<a href="mailto:uwvsa@clubs.feds.ca"><span class="followButtonTextEntypo">&#9993;</span>
		<br/><br/>
		<span class="link-email">uwvsa@clubs.feds.ca</span></a>
		</div>
		</div>
		
		<div class="large-6 columns">
		<h3>Join our Mailing List</h3>
		<br/>
		<form action="mailing-form-handler.php" method="POST" name="mailingform">
		<div class="row">
		  <div class="large-12 columns">
		    <label>Name:</label>
		    <input type="text" name="name"><br>
			<label>Email:</label>
			<input type="text" name="email"><br>
			<input type="submit" value="Submit" class="button red">
			<input type="reset" value="Reset" class="button red">
		</form>
		</div>
	  </div>

</body>
</html>

		
		</article>

	</div>

	<footer>
	 <section id="bottom">
	 &copy; <?php echo date("Y"); ?> University of Waterloo Vietnamese Student Association	 
	 </section>
	</footer>
	
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/foundation.min.js"></script>
	<script>
      	 $(document).foundation();
	</script>
	<script src="assets/js/smoothscroll.js"></script>

	<script language="JavaScript">
	var frmvalidator  = new Validator("mailingform");
	frmvalidator.addValidation("name","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email");
	frmvalidator.addValidation("email","email",
	  "Please enter a valid email address");
	</script>

</body>

</html>