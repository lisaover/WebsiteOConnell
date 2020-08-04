<!DOCTYPE html>
<head>

<?php

       	$PHP_ID = $_GET['PHP_ID'];
		$Title = $_GET['Title'];
		$Content_ID = $_GET['Content_ID'];		
		
		$ID_Array = explode(" ",$Title);
		$ID_Title_File = implode("-",$ID_Array);	
		
		//ID_Path is not used
		if ($Title == 'Index') {	
			$ID_Path = 'content_scripts/content-books.php';
			$Page_Title = 'Rebecca O\'Connell Books and Stories';
			}
		else {
			$ID_Path = 'content_scripts/' . $ID_Title_File . '.php';
			$Page_Title = 'Rebecca O\'Connell ' . $Title;
			}	
	?> 

<Link rel="stylesheet" type="text/css" href="rebecca_style.css" class="css_stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rebecca O'Connell</title>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!--<script src="_js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="_js/jquery.browser.min.js"></script>-->
<script src="scripts/nav_events.js"></script>
<script>
    $(document).ready(function() {

      //select all a tags and blur the selection rectangle for IE
	   $('a').click(function() {
	     if(navigator.appName == 'Microsoft Internet Explorer')this.blur();
	   });
	   
	   //read the id attribute for each .main section and put into an array
				var sectionArray = [];
	            $('.main').each(function() {
	 
	            var divID = $(this).attr('id');
			    sectionArray.push(divID);	 
	            }); 
				
				//get value of php variable $Content_ID
				var phpContentID = <?php echo "'$Content_ID'"; ?>;
                var contentID = 'd-' + phpContentID;
				
		//for each .main section, hide it if it does not equal contentID		
				for(var i=0; i<sectionArray.length; i++) {
		            if(sectionArray[i] != contentID) {
		                     var selectID = 'section #' + sectionArray[i];
							 var $selection = $(selectID);  
							 $selection.hide();      
	                } //end if sectionArray element equals contentID
	            } //end for each
				
    }); // end ready
    </script>
<title>Rebecca O'Connell</title>
<meta name="keywords" content="Rebecca O&rsquo;Connell, Oconnell, Tova, Ben&ndash;Zvi, Librarian, author, Deborah Brodie, Roaring Brook Press, Stephen Roxburgh, Front Street Books, Albert Whitman, Pittsburgh writers, Pittsburgh authors, Pennsylvania writers, Pennsylvania authors, children&rsquo;s writers, children&rsquo;s authors, Beginning with Books, Storywalk, Myrtle of Willendorf, The Baby Goes Beep, Four Sides Eight Nights, Penina Levine is a Hard&ndash;Boiled Egg, Penina Levine is a Potato Pancake, Danny is Done with Diapers, Baby Parade">
<meta name="description" content="A Web site featuring children&rsquo;s author Rebecca O&rsquo;Connell, also published as Rebecca Tova Ben&ndash;Zvi.">

</head>

<body id="<?php echo $Content_ID; ?>">

<header>
<img src="images/name-header.png" width="322" height="63" alt="Rebecca O'Connell" border="0">
</header>

<nav>
<ul id="side-nav">
    <li id="t-home"><a href="index.htm">Home</a></li>
    <li id="t-about-me"><a href="about-me.htm">About Me</a></li>
	<li id="t-books-n-stories"><a href="books-and-stories.php?PHP_ID=Books and Stories&amp;Title=Index&amp;Content_ID=books-n-stories">Books and Stories</a></li>
    <li id="t-guides"><a href="guides.htm">Guides</a></li>
</ul>

<div id="dashboard">

<p id="t-baby-parade"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Baby Parade&amp;Content_ID=baby-parade"><img src="images/thumbnails/baby_parade.png" alt="Baby Parade"/></a></p>
<p id="t-danny" ><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Danny Is Done with Diapers&amp;Content_ID=danny"><img src="images/thumbnails/danny.png" alt="Danny Is Done with Diapers"/></a></p>
<p id="t-done-diapers-board"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Danny Is Done with Diapers&amp;Content_ID=done-diapers-board"><img src="images/thumbnails/done_diapers_board.png" alt="Done with Diapers Board Book"/></a></p>
<p id="t-baby-beep"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=The Baby Goes Beep&amp;Content_ID=baby-beep"><img src="images/thumbnails/baby_goes_beep.png" alt="The Baby Goes Beep"/></a></p>
<p id="t-geek-week"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Geek Week&amp;Content_ID=geek-week"><img src="images/thumbnails/geek_week.png" alt="Geek Week"/></a></p>
<p id="t-penina-pancake"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Penina Levine Is a Potato Pancake&amp;Content_ID=penina-pancake"><img src="images/thumbnails/penina_potato_pancake.png" alt="Penina Levine Is a Potato Pancake"/></a></p>
<p id="t-penina-egg"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Penina Levine Is a Hard-Boiled Egg&amp;Content_ID=penina-egg"><img src="images/thumbnails/penina_egg.png" alt="Penina Levine Is a Hard&ndash;Boiled Egg"/></a></p>
<p id="t-four-sides"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Four Sides Eight Nights&amp;Content_ID=four-sides"><img src="images/thumbnails/four_sides.png" alt="Four Sides Eight Nights"/></a></p>
<p id="t-myrtle"><a href="books-and-stories.php?PHP_ID=Book&amp;Title=Myrtle of Willendorf&amp;Content_ID=myrtle"><img src="images/thumbnails/myrtle.png" alt="Myrtle of Willendorf"/></a></p>

</div> 

</nav>

<section>

<div class="main" id="d-books-n-stories">
<div id="i-baby-parade" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Baby Parade&amp;Content_ID=baby-parade"><img src="images/thumbnails_large/baby_parade.png" alt="Baby Parade"/><h2 class="title">Baby Parade</h2></a>
</div>
<div id="i-danny" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Danny Is Done with Diapers&amp;Content_ID=danny"><img src="images/thumbnails_large/danny.png" alt="Danny Is Done with Diapers"/><h2 class="title">Danny Is Done with Diapers</h2></a>
</div>
<div id="i-done-diapers-board" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Danny Is Done with Diapers&amp;Content_ID=done-diapers-board"><img src="images/thumbnails_large/done_diapers_board.png" alt="Done with Diapers Board Book"/><h2 class="title">Done with Diapers Board Book</h2></a>
</div>
<div id="i-baby-beep" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=The Baby Goes Beep&amp;Content_ID=baby-beep"><img src="images/thumbnails_large/baby_goes_beep.png" alt="The Baby Goes Beep"/><h2 class="title">The Baby Goes Beep</h2></a>
</div>
<div id="i-geek-week" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Geek Week&amp;Content_ID=geek-week"><img src="images/thumbnails_large/geek_week.png" alt="Geek Week"/><h2 class="title">Geek Week</h2></a>
</div>
<div id="i-penina-pancake" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Penina Levine Is a Potato Pancake&amp;Content_ID=penina-pancake"><img src="images/thumbnails_large/penina_potato_pancake.png" alt="Penina Levine Is a Potato Pancake"/><h2 class="title">Penina Levine Is a Potato Pancake</h2></a>
</div>
<div id="i-penina-egg" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Penina Levine Is a Hard-Boiled Egg&amp;Content_ID=penina-egg"><img src="images/thumbnails_large/penina_egg.png" alt="Penina Levine Is a Hard&ndash;Boiled Egg"/><h2 class="title">Penina Levine Is a Hard&ndash;Boiled Egg</h2></a>
</div>
<div id="i-four-sides" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Four Sides Eight Nights&amp;Content_ID=four-sides"><img src="images/thumbnails_large/four_sides.png" alt="Four Sides Eight Nights"/><h2 class="title">Four Sides Eight Nights</h2></a>
</div>
<div id="i-myrtle" class="photo-content">
<a href="books-and-stories.php?PHP_ID=Book&amp;Title=Myrtle of Willendorf&amp;Content_ID=myrtle"><img src="images/thumbnails_large/myrtle.png" alt="Myrtle of Willendorf"/><h2 class="title">Myrtle of Willendorf</h2></a>
</div>
</div>

<?php
     //include($ID_Path);
	 include("content_scripts/Baby-Parade.php");
	 include("content_scripts/Danny-Is-Done-with-Diapers.php");
	 include("content_scripts/Done-with-Diapers.php");
	 include("content_scripts/The-Baby-Goes-Beep.php");
	 include("content_scripts/Geek-Week.php");
	 include("content_scripts/Penina-Levine-Is-a-Potato-Pancake.php");
	 include("content_scripts/Penina-Levine-Is-a-Hard-Boiled-Egg.php");
	 include("content_scripts/Four-Sides-Eight-Nights.php");
	 include("content_scripts/Myrtle-of-Willendorf.php");
?>

</section>

<div class="riddle" id="passover">
     <p>Mozzarella!<br>(Matzah-rella, get it?)</p>
   </div>

<footer>

<p>Copyright &copy; 2012 Rebecca O'Connell All Rights Reserved<br>
Site by <a href="http://www.lisaover.com">Lisa Over</a>.</p>

</footer>
   
</body>
</html>