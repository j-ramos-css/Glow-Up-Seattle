<?php

/*
portal-config.php

Used to store all of our IT162 config info

*/

//echo basename($_SERVER['PHP_SELF']);

define(THIS_PAGE, basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
	case 'index.php':
		$title  = "Julio Ramos IT162 Portal";
		$logo = 'fa-home';
		$PageID = 'Welcome';
	break;
		
	case 'contactme.php':
		$title  = "Julio Ramos IT162 Contact";
		$logo = 'fa-pencil-square-o';
		$PageID = 'Contact Julio';
	break;
		
	default:
		$title = THIS_PAGE;
		$logo = 'fa-home';
		$PageID = 'Welcome';
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Julio";

/* creating a function to generate links and keep the highlight on the current page 

<li><a href="index.php" class="selected">Welcome</a></li>
					<li><a href="big/index.php">Big</a></li>
					<li><a href="aia.php">AIA</a></li>
					<li><a href="flowchart.php">Flowchart</a></li>
					<li><a href="fp/index.php">Final Project</a></li>
					<li><a href="contactme.php">Contact Julio</a></li
					
*/

function makeLinks($nav1) {
	
	$myReturn = '';
	foreach($nav1 as $url => $text){
		
		if($url == THIS_PAGE){
			$myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
		}
		
		else{
			$myReturn .= "<li><a href=\"$url\">$text</a></li>";
		}
		
	}
	
	return $myReturn;
}

?>