var windowHeight;

window.onload = function(){
	windowHeight = window.innerHeight;
	onCreate();
}

function onCreate(){
	moveHeaderImage();
	setHeaderHeight();
}

//used to move the header image up so that the botton of the picture is seen first.
function moveHeaderImage(){
	var pic, diff;
	pic = document.getElementById('header-image');	
	console.log(pic.height + ':' + windowHeight);
	diff = pic.height - windowHeight;
	pic.setAttribute('style', 'top: -' + diff + 'px;');
}

//used to inlarge the header tag to fit the image
function setHeaderHeight(){
	var header;
	header = document.getElementById('header');
	header.setAttribute('style', 'height: ' + windowHeight + 'px;');
}