var windowHeight, windowWidth, headerContainer;

function onCreate(){
	windowHeight = window.innerHeight; windowWidth = window.innerWidth;
	headerContainer = document.getElementById('header-container');
	fitImageToScreen(headerContainer, 1350, 759);
}

function onResize(){
	windowHeight = window.innerHeight; windowWidth = window.innerWidth;
	fitImageToScreen(headerContainer, 1350, 759);	
}

window.onload = function(){	
	onCreate();
	$(window).resize(function(){ 
		onResize();		
	});
}

//This function determines if an image with css size values of "100vw auto" is being scalled to where the image should be "auto 100vh"
//so there is no white space seen by the user. The image now changes it's scalling based of the ratio of the containers width/height
//and the images width/height.
function fitImageToScreen(container, imageWidth, imageHeight){
	var whImageRatio, whWindowRatio, imageContainer;
	if (typeof(container) == "object"){
		imageContainer = container;
	} else {
		imageContainer = document.createElement("div");
	}
	whImageRatio = imageWidth / imageHeight;
	whWindowRatio = windowWidth / windowHeight;

	if(whImageRatio > whWindowRatio && windowHeight){
		$(imageContainer).removeAttr('style');
		$(imageContainer).css('background-size', 'auto 100vh');
	} else {
		$(imageContainer).removeAttr('style');
	}
}