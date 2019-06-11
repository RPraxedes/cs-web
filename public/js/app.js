if(window.addEventListener){
	var kkeys=[],
	kode="38,38,40,40,37,39,37,39,66,65",
	audioElement = document.createElement('audio');
	audioElement.setAttribute('src', '../assets/media/notif.mp3');
	window.addEventListener("keydown",function(e){kkeys.push(e.keyCode);
	kkeys.join('');
	if(kkeys.toString().indexOf(kode)>=0){
		audioElement.play();kkeys=[];}
	}, true);
}
