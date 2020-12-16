<?php include 'includes/header.php'?>

<main class="form-main">
	
	<aside class="form-aside">
				
				<h2>Contact Us</h2>
				<p>Want to complain? Have a compliment? Fill out this handy form and let us know!</p>
				<p>We will get back to you within 48 hours.</p>
				
	</aside>

	<section>
		
		<hr class="break">

		<form class="form"><?php
		/*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other! 
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "julioramos1993@gmail.com";  //place your/your client's email address here
        $toName = "The Glow Up Seattle"; //place your client's name here
        $website = "The Glow Up Seattle";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
		?></form>

	</section>
	

</main>

<?php include 'includes/footer.php'?>
