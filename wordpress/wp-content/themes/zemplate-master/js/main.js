var windowHeight, windowWidth, headerImage, headerContainer, minHeaderImageWidth, footerBuffer, numberPattern;

minHeaderImageWidth = 800;
footerBuffer = 75;

function onCreate(){
	numberPattern = /\d+/g;
	headerImage = document.getElementById('header-image');
	headerContainer = document.getElementById('header-container');
	moveHeaderImage();
	setHeaderContainerHeight();
	enlargeFooter();
}

function onResize(){
	windowHeight = window.innerHeight; windowWidth = window.innerWidth;
	moveHeaderImage();	
	setHeaderContainerHeight();	
	enlargeFooter();
}

window.onload = function(){
	windowHeight = window.innerHeight; windowWidth = window.innerWidth;
	onCreate();
	$(window).resize(function(){ 
		setTimeout(function(){
			onResize();
		}, 0);
	});
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
	var contentHeight;

	if(headerImage.height >= windowHeight){
		contentHeight = windowHeight - footerBuffer;
		headerContainer.setAttribute('style', 'height:' + contentHeight + 'px;');		
	} else {
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