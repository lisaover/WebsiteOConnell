$(document).ready(function() {

$.getScript('scripts/nav_class.js', function() {

     //hide the riddle on books-and-stories.php under penina-pancake
	 $riddle.hide();
	 
	 //open external links in a new window
     $('a[href^="http://"]').attr('target','_blank');
	 
	 //select all a tags and blur the selection rectangle for IE
	 $('a').click(function() {
	   if(navigator.appName == 'Microsoft Internet Explorer')this.blur();
	 });
	 
	 //set background image for IE
	 //var imageURL = "url('images/header-gradient.png')";
	 //if(browserName == 'msie') {
	 //$header.css('background-image',imageURL);
	 //}
	 
     //load css file based on window size
	 var manageCSS = new manageSite('');
	 manageCSS.loadCSS();
	 
	 //manage dashboard button - display or hide based on window size 
	 var manageDashNav = new manageSite('');
	 manageDashNav.manageDashboard();	 

 //on window resize, load appropriate css file and manage dashboard
 $(window).resize(function() {
 
	  var manageCSS = new manageSite('');
	  manageCSS.loadCSS();
	  
	  var manageDashNav = new manageSite('');
	  manageDashNav.manageDashboard();
 })
 
//on mouseover, display riddle answer
 $trigger.mouseover(function() {
      
	  var ttLeft,
	      ttTop,
		  $this = $(this),
		  $riddleData = $($this.attr('data-riddle')),
		  triggerPos = $this.offset(),
		  triggerH = $this.outerHeight(),
		  triggerW = $this.outerWidth(),
		  riddleW = $riddleData.outerWidth(),
		  riddleH = $riddleData.outerHeight(),
		  screenW = $(window).width(),
		  scrollTop = $(document).scrollTop();
		  
	  if(triggerPos.top - riddleH - scrollTop > 0) {
	      ttTop = triggerPos.top - riddleH - 10;
	  } else {
		  ttTop = triggerPos.top + triggerH + 10;
	  }
	  
	  var overFlowRight = (triggerPos.left + riddleW) - screenW;
	  
	  if(overFlowRight > 0) {
	      ttLeft = triggerPos.left - overFlowRight - 10;
	  } else {
	      ttLeft = triggerPos.left;
	  }
	  
	  $riddle.css({
	     left : ttLeft,
		 top : ttTop,
		 position : 'absolute'
		 }).fadeIn(200);
	  
 })
 
 //on mouseout, hide riddle answer
 $trigger.mouseout(function() {
 
      $riddle.fadeOut(200);
 
 })
 
 //on mouseout, hide riddle answer
 $trigger.mouseout(function() {
 
      $riddle.slideUp('slow');
 
 })
 
 //on click, display Baby Parade content
 $tBabyParade.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('baby-parade');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Danny content
 $tDanny.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('danny');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Danny content (board book)
 $tDone.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('done-diapers-board');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Baby Beep content
 $tBabyBeep.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('baby-beep');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Geek Week content
 $tGeekWeek.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('geek-week');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Penina (potato pancake) content
 $tPeninaPancake.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('penina-pancake');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Penina (egg) content
 $tPeninaEgg.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('penina-egg');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Four Sides content
 $tFourSides.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('four-sides');
	  
	  evt.preventDefault(); //don't follow the link
 })
 
 //on click, display Myrtle content
 $tMyrtle.click(function(evt) {
 
	  var bookContent = new manageSite('');
	  bookContent.manageContent('myrtle');
	  
	  evt.preventDefault(); //don't follow the link
 })

  }); //end getScript function
	 
}); // end ready