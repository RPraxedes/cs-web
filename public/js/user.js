$(document).ready(function () {
	$('#inputGroupFile01').on('change',function(){
		//get the file name
		var fileName = $(this).val().replace('C:\\fakepath\\', " ");
		//replace the "Choose a file" label
		$(this).next('.custom-file-label').html(fileName);
	});
	
	$('.edit-button').hide();
});

$(function() {
    toggle_start();
    toggle_end();
	$(document).ready(function(){
		$("#Start").prop('checked', toggle_start);
		$("#End").prop('checked', toggle_end);
	});
    $("#Start").click(toggle_start);
    $("#End").click(toggle_end);
});

function toggle_start() {
    $("input.start-input").prop("disabled", this.checked).prop("required", !this.checked);
}
function toggle_end() {
    $("input.end-input").prop("disabled", this.checked).prop("required", !this.checked);
}


$(document).on('mouseenter', '.highlight', function () {
	$(this).find(".edit-button").show();
}).on('mouseleave', '.highlight', function () {
	$(this).find(".edit-button").hide();
});
