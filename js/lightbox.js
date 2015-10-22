jQuery(document).ready(function($) {
	//Declaring variables that will later be used to add html elements to the DOM
	var $overlay = $('<div id="overlay"></div>');
	var $lightbox_wrapper = $('<div id="lightbox-wrapper"></div>');
	var $caption_wrapper = $('<div id="caption-wrapper"></div>');
	var $image = $('<img>');
	var $title = $('<h2 id="lightbox-title"></h2>');
	var $caption = $("<p></p>");

	//Adds the wrapper to the overlay div
	$overlay.append($lightbox_wrapper);

	//Adds the image to the overlay div
	$lightbox_wrapper.append($image);

	//Adds the caption-wrapper to the lightbox-wrapper
	$lightbox_wrapper.append($caption_wrapper);

	//Adds a title to the caption-wrapper div
	$caption_wrapper.append($title);

	//Adds a caption to the caption-wrapper div
	$caption_wrapper.append($caption);

	//Adds a div with the id of overlay to the page
	$("body").append($overlay);

	//This method says that when we click on an anchor tag inside of an element with the id of imageGallery we want to call a function
	$(".work a").click(function(event){
	  //This prevents the page from going to a link's href
	  event.preventDefault();
	  
	  //Here we are storing the anchor's href in a variable called image location
	  var imageLocation = $(this).attr("href");
	  //This sets the new src of a new image to the one above
	  $image.attr("src", imageLocation);
	  
	  //This shows the overlay
	  $overlay.show();
	  
	  //This finds the alt text of any images inside the anchor tag and stores them as a variable by the name of caption text
	  var $captionText = $(this).children("img").attr("alt");
	  var $titleText = $(this).children("img").attr("title");
	  //This puts the value of captionText inside of the p tags known as caption
	  $caption.text($captionText);
	  $title.text($titleText);
	  
	});

	//This hides the overlay div when it's clicked
	$overlay.click(function(){
	  $(this).hide();               
	});
});