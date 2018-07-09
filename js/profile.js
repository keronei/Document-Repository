$(document).ready(function(e){
	demoUpload();
});
function dataURItoBlob(dataURI) {
	var split = dataURI.split(','),
		dataTYPE = split[0].match(/:(.*?);/)[1],
		binary = atob(split[1]),
		array = []
	for(var i = 0; i < binary.length; i++) array.push(binary.charCodeAt(i))
	return new Blob([new Uint8Array(array)], {
			type: dataTYPE
	})
}
function demoUpload() {
	var $uploadCrop;
	function readFile(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$uploadCrop.croppie('bind', {
					url: e.target.result
				});
				$('.upload-msg').hide();
				$('#upload-demo').show();
				$("#croppie-controls").show();
			}
			reader.readAsDataURL(input.files[0]);
		}
		else {
			swal("Sorry - you're browser doesn't support the FileReader API");
		}
	}
	$uploadCrop = $('#upload-demo').croppie({
		viewport: {
			width: 200,
			height: 200,
			type: 'circle'
		},
		boundary: {
			width: 300,
			height: 300
		},
		exif: true
	});
	$('#uploadcroppie').on('change', function () { readFile(this); });
	$('.upload-result').on('click', function (ev) {
		ev.preventDefault();
		$uploadCrop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function (resp) {
			$('#profile-picture').removeClass("profile-pic-text").addClass("profile-pic-img-bg").html("");
			$('#profile-picture').css('background-image', 'url(' + resp + ')');
			$('#profile-picture-data').val(resp);
			$("#imageupload").modal("hide");
		});
	});
	$("#imageupload-cancel").on('click', function (e) {
		$("#imageupload").modal("hide");
	});
}