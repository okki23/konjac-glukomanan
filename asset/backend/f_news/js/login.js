checkFormatLogin('username');

function reloadImageCaptchaLogin(tipe) { //dipake juga utk page contact us
	str_url = "../../programer_script/submit_contact_us.php?type=reloadcaptcha";
	$.get(str_url, function (data) {

		randomid = $.trim(data);
		if (tipe == "mainlogin") {
			//$('#spanImageCaptchaLoginMain').html('<img src="../../../allwebcore/include/image_captcha.php?seqcaptcha='+randomid+'" class="img-responsive" style="height:80px;" >');
			$('#spanImageCaptchaLoginMain').html('<img src="../allwebcore/include/image_captcha.php?seqcaptcha=' + randomid + '" class="img-responsive" style="height:80px;">');

			$('#frmCaptchaRandomId').val(randomid);
		}
	});

}