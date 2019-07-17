$(document).ready(function(){
	//lightbox.init();
	$(function () {
		$('[data-toggle="popover"]').popover();
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	var sticky = $('nav.navbar').offset().top;
	$(window).scroll(function(){
		if($(window).scrollTop() >= sticky){
			$('nav.navbar').addClass("sticky");
			$('#blank-navbar').removeClass("hidden");
		}else{
			$('nav.navbar').removeClass("sticky");
			$('#blank-navbar').addClass("hidden");
		}
	});
});
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
};