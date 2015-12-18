var windowHeight, windowWidth, headerImage, headerContainer, minHeaderImageWidth, footerBuffer, numberPattern;

minHeaderImageWidth = 800;
footerBuffer = 75;

function onCreate(){
	numberPattern = /\d+/g;
	windowHeight = window.innerHeight; windowWidth = window.innerWidth;
	// headerImage = document.getElementById('header-image');
	headerContainer = document.getElementById('header-container');
	// moveHeaderImage();
	// setHeaderContainerHeight();
	// enlargeFooter();
	fitImageToScreen(headerContainer, 1350, 759);
}

function onResize(){
	windowHeight = window.innerHeight; windowWidth = window.innerWidth;
	// moveHeaderImage();	
	// setHeaderContainerHeight();	
	// enlargeFooter();
	fitImageToScreen(headerContainer, 1350, 759);
	
}

window.onload = function(){	
	onCreate();
	fitImageToScreen(1350, 759);
	$(window).resize(function(){ 
		setTimeout(function(){
			onResize();
			fitImageToScreen(headerContainer, 1350, 759);
		}, 0);
	});
}

//Used to change the height and width of an image that has been scalled down to still fit to screen based on image height
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
		console.log("greater:" + whImageRatio + ":" + whWindowRatio);
		$(imageContainer).removeAttr('style');
		$(imageContainer).css('background-size', 'auto 100vh');
	} else {
		console.log('neither' + whImageRatio + ":" + whWindowRatio);
		$(imageContainer).removeAttr('style');
	}
}

//used to move the header image up so that the botton of the picture is seen first.
function moveHeaderImage(){
	var diff, leftOffset;
	//console.log(headerImage.height + ':' + windowHeight);
	headerImage.removeAttribute('style');
	diff = headerImage.height - windowHeight + 15;
	if(diff < 0){
		//image is not overlapping the screen
		headerImage.removeAttribute('style');
		if(headerImage.width > windowWidth){
			//if image is overlapping horizontally
			//move image to the left to display the right most portion of it.
			leftOffset = minHeaderImageWidth - windowWidth;
			headerImage.setAttribute('style', 'left: -' + leftOffset + 'px;');
		}
	} else {
		headerImage.removeAttribute('style');
		headerImage.setAttribute('style', 'top: -' + diff + 'px;');		
	}
	
}

//used to inlarge the header-container
function setHeaderContainerHeight(){

	if(headerImage.height >= windowHeight){
		console.log(headerImage.height + ":" + windowHeight);
		headerContainer.setAttribute('style', 'height:' + (windowHeight - footerBuffer) + 'px;');		
	} else {
		console.log("2");
		headerContainer.setAttribute('style', 'height:' + (headerImage.height - footerBuffer) + 'px;');	
	}

}

function enlargeFooter(){
	var containerHeight;
	containerHeight = cssPropertyValue(headerContainer, 'height');
	console.log(containerHeight + ":" + headerImage.height);
	if(containerHeight > headerImage.height){

		//document.getElementById('footer-overlay').setAttribute('style', 'height: ' + (containerHeight - headerImage.height + footerBuffer) + 'px;');
	}
}

function cssPropertyValue(element, propertyName){
	return $(element).css(propertyName).match(numberPattern);
}