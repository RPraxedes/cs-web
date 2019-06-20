$(document).ready(function () {
	$('#inputGroupFile01').on('change',function(){
		//get the file name
		var fileName = $(this).val().replace('C:\\fakepath\\', " ");
		//replace the "Choose a file" label
		$(this).next('.custom-file-label').html(fileName);
	});

	$(function () {
		$('[data-toggle="popover"]').popover();
		$('[data-toggle="tooltip"]').tooltip();
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