			
				var $body = $('body');
				var $nav = $('nav');
				var $header = $('header');
				var $section = $('section');
				var $content = $('content');
				var $footer = $('footer');
				var $dashboard = $('#dashboard');
				var $sideNav = $('#side-nav');
				var $home = $('#home');
				var $aboutMe = $('#about-me');
				var $closeDashButton = $('#closeDashButton');
				var $openDashButton = $('#openDashButton');
				var $link = $('link');
				var $riddle = $('.riddle');
				var $trigger = $('.trigger');
				
				var $booksStories = $('#books-n-stories');
				var $tBooksStories = $('#t-books-n-stories');
				var $dBooksStories = $('#d-books-n-stories');
				
				var $tBabyParade = $('#t-baby-parade,#i-baby-parade,#c-baby-parade,#s-baby-parade');
				var $tDanny = $('#t-danny,#i-danny,#c-danny,#s-danny');
				var $tDone = $('#t-done-diapers-board,#i-done-diapers-board,#c-done-diapers-board,#s-done-diapers-board');
				var $tBabyBeep = $('#t-baby-beep,#i-baby-beep,#c-baby-beep,#s-baby-beep');
				var $tGeekWeek = $('#t-geek-week,#i-geek-week,#c-geek-week,#s-geek-week');
				var $tPeninaPancake = $('#t-penina-pancake,#i-penina-pancake,#c-penina-pancake,#s-penina-pancake');
				var $tPeninaEgg = $('#t-penina-egg,#i-penina-egg,#c-penina-egg,#s-penina-egg');
				var $tFourSides = $('#t-four-sides,#i-four-sides,#c-four-sides,#s-four-sides');
				var $tMyrtle = $('#t-myrtle,#i-myrtle,#c-myrtle,#s-myrtle');
				
				var $dBabyParade = $('#d-baby-parade');
				var $dDanny = $('#d-danny');
				var $dDone = $('#d-done-diapers-board');
				var $dBabyBeep = $('#d-baby-beep');
				var $dPeninaPancake = $('#d-penina-pancake');
				var $dPeninaEgg = $('#d-penina-egg');
				var $dFourSides = $('#d-four-sides');
				var $dMyrtle = $('#d-myrtle');
	
				var $dannySelect = $('#danny-large,#board-thumb,#danny-sub');
				var $boardSelect = $('#board-large,#danny-thumb,#board-sub');
				
				//get browser name
                var browserName = ($.browser.name);

//define the manageSite class
function manageSite(menuID) {

				this.menuID = menuID;
		
		}

//load css file based on window size
manageSite.prototype.loadCSS = function() {

     //get width of browser window
     var windowWidth = $(window).width();
	 
	 //if windowWidth is greater than 320, load rebecca_style.css
     if(windowWidth>320) {
	 
	 //set Link href attr to include regular css file
	 $link.attr('href','rebecca_style.css');
	 
	 $openDashButton.fadeIn('fast');
	 
	 } //end if windowWidth is greater than 320
	 
	 //if windowWidth is less than 321, load rebecca_mobile.css and hide openDashButton
	 if(windowWidth<321) {
	 
	 //set Link href attr to include mobile css file
	 $link.attr('href','rebecca_mobile.css');
	 
	 $openDashButton.hide();
     
	 } //end if windowWidth is less than 321 

} //end loadCSS prototype function

manageSite.prototype.openDashboard = function() {
	 
	 //fade in dashboard
	 $dashboard.fadeIn('slow');

} //end openDashboard prototype function

manageSite.prototype.closeDashboard = function() {
	 
	 //fade out dashboard
	 $dashboard.fadeOut('slow');

} //end closeDashboard prototype function

//manage dashboard - open or close based on window size
manageSite.prototype.manageDashboard = function() {
	 
	 //get width of browser window
     var windowWidth = $(window).width();
	 
	 //if windowWidth is greater than 320, show openDashButton
     if(windowWidth>320) {
	 
	 var manageDash = new manageSite('');
	 manageDash.openDashboard();
	 
	 } //end if windowWidth is greater than 320
	 
	 //if windowWidth is less than 321, load rebecca_mobile.css and hide openDashButton and dashboard
	 if(windowWidth<321) {
	 
	 var manageDash = new manageSite('');
	 manageDash.closeDashboard();
     
	 } //end if windowWidth is less than 321

} //end manageDashboard prototype function

//manage content - display or hide based on click events
manageSite.prototype.manageContent = function(contentID) {
	 
	 //get current body tag id
	 var currentBodyID = $body.attr('id');
	 
	 //replace current body tag id with contentID
	 $body.attr('id',contentID);
	 
	 //hide current div
	 var currentDivID = '#d-' + currentBodyID;
	 var $currentDiv = $(currentDivID);
	 $currentDiv.hide();
	 
	 //show contentID div
	 var newDivID = '#d-' + contentID;
	 var $newDiv = $(newDivID);
	 $newDiv.fadeIn('slow');	 

} //end manageContent prototype function

//change page - window location - to books-and-stories.htm
manageSite.prototype.changeLocation = function() {

     window.location.href = "http://localhost/rebecca_oconnell/books-and-stories.htm";

} //end changeLocation prototype function