/* =======================================
======Script Untuk Semua WebSite==========
=========================================*/
var domain_name = window.location.protocol + "//" + window.location.host + "/";


//History Go Back
function goBack() {
	window.history.go(-1);
}

function goForward() {
	window.history.forward();
}

function goBackward() {
	window.history.back();
}

function goBackLogin() {

	url_direct = document.domain + $.cookie('cookieCurrentUri');
	/*
	if($.cookie('cookieCurrentUri') == ""){
		window.history.go(-1);
	}else{
		location.href = 'https://'+url_direct;
	}
	*/
	location.href = 'https://' + url_direct;
}

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	return "";
}

//Swal Set Default
swal.setDefaults({
	confirmButtonColor: '#276FB7',
});

//CLOSING ALERT
function closeAlert() {
	$('.alert').hide('');
}

//SCROLLBAR
$(function () {
	$('.scrollbar-outer, .scrollbar-macosx, .scrollbar-light, .scrollbar-dynamic, .scrollbar-chrome').scrollbar({
		"ignoreMobile": false
	});
})

$(document).mouseup(function (e) {
	var container = $(".collapse.autopull");

	if (!container.is(e.target) // if the target of the click isn't the container...
		&&
		container.has(e.target).length === 0) // ... nor a descendant of the container
	{
		container.collapse('hide');
	}
});



//Process Login-Logout
function popNeedLogin() {
	//$('#login_modal').modal();

	str_url = "../../module/general/login_module.php";
	$.ajax({
		url: str_url,
		success: function () {
			$('#login_modal').modal();
		}
	});
}


function procesLogin(tipe_act) {


	if (typeof (tipe_act) === "undefined") {
		tipe_act = '';
		//alert('a');
	}

	referrer_login = document.referrer;
	if (typeof (referrer_login) === "undefined") {
		referrer_login = '';
		//alert('b');
	}

	var res_login = referrer_login.split("/");
	login_from = res_login[3];

	if (typeof (login_from) === "undefined") {
		login_from = '';
		//alert('c');
	}

	if (referrer_login === "https://www.indopremier.id/index.php" || referrer_login === "https://www.indopremier.com/index.php") {
		login_from = '';
		//alert('d');
	}



	console.log('referrer_login:' + referrer_login);
	console.log('login_from:' + login_from);

	//alert('referrer_login:' + referrer_login);
	//alert('login_from:' + login_from);

	str_url = '../../programer_script/process_login.php?type=regular&kanal=mainlogin&login_from=' + login_from;
	$.post(str_url, {
			frmLoginId: $('#username').val(),
			frmPassword: $('#password').val(),
			frmCaptchaLogin: $('#frmCaptchaLogin').val(),
			frmCaptchaLoginRandomId: $('#frmCaptchaRandomId').val()
		})
		.done(function (data) {
			alert("Data Loaded: " + data);
			console.log('data:' + data);

			/*
			//NEW CHECK
			if ($.trim(data) == 'SUCCESS') {
				alert('SUCCESS')
			} else if ($.trim(data) == 'NO FSM') {
				alert('NO FSM')
			}
*/



			if ($.trim(data) == 'SUCCESS' || $.trim(data) == 'SUCCESS NO FSM' || $.trim(data) == 'LOGIN CRM') {
				if ($('#yesAsk').length || $('#noAsk').length) {
					//alert("silahkan ditambah rik...");
					$('#forminputlogin').hide();
					$('#marginodttext').show();
				} else {
					//alert('disini +1 '+window.history.length);
					if (window.history.length > 1) {
						str_referrer = document.referrer;
						var res = str_referrer.split("/");
						if (res[3] == "ipotgo" && res[4] == "data.php") {
							location.href = "../ipotgo";
						} else {
							if (tipe_act == 'stay') {
								//alert("a"+tipe_act);
								location.reload();
							} else {
								//alert("b"+tipe_act);
								goBackLogin();
							}

						}
					} else {
						location.href = '../';
					}

				}
			} else if ($.trim(data) == 'OA IN PROGRESS') {
				location.href = '../firsttime/ft_rdnprocess.php';
			} else if ($.trim(data) == 'WRONG RDN') {
				location.href = '../firsttime/ft_rdnmatch.php';
			} else if ($.trim(data) == 'SUCCESS KIDDO') {
				console.log("KIDDO");
				location.href = '../ipotkido/';
			} else if ($.trim(data) == 'SHOW LOGIN CAPTCHA' || $.trim(data) == 'WRONG CAPTCHA') {

				if ($.trim(data) == 'WRONG CAPTCHA') {
					if ($('#mainLoginShowCaptcha').is(':visible')) {
						$('#error-container').empty();
						$('#error-container')
							.append('<p>Kode Gambar Yang Anda Masukan Salah. Silahkan coba kembali.</p>')
							.addClass('animation animating shake')
							.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
								$(this).removeClass('animation animating shake');
							});
					} else {
						$('#mainLoginShowCaptcha').show();
						$('#error-container').empty();
					}



				}
			} else {
				//alert(data);
				//alert('disini +2');
				$('#error-container').empty();
				$('#error-container')
					.append('<p>Username / Password tidak sesuai. Silahkan coba kembali.</p>')
					.addClass('animation animating shake')
					.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
						$(this).removeClass('animation animating shake');
					});
			}


		});


}

//FOR SWAL GONATIVE BACK
function exitGonative() {
	swal({
			title: '',
			text: '<h3>Exit Aplikasi?</h3>',
			html: true,
			type: 'warning',
			showCancelButton: true,
			cancelButtonText: 'Batal',
			confirmButtonText: 'Ya, Exit'
		},
		function (isConfirm) {
			if (isConfirm) {
				location.href = "index.php?ex=#cl";
			}
		});
}

function procesLogout() {
	swal({
			title: '',
			text: '<h3>Anda Yakin Logout?</h3>',
			html: true,
			type: 'warning',
			showCancelButton: true,
			cancelButtonText: 'Batal',
			confirmButtonText: 'Ya, Logout'
		},
		function (isConfirm) {
			if (isConfirm) {
				str_url = "../../programer_script/process_login.php?type=logout";
				$.ajax({
					url: str_url,
					success: function (data) {
						//alert(data);
						if ($.trim(data) == 'web|ipotstock') {
							location.href = '../ipotstock/';
						} else if ($.trim(data) == 'web|ipotfund') {
							location.href = '../ipotfund/';
						} else if ($.trim(data) == 'web|ipotplan') {
							location.href = '../ipotplan/';
						} else if ($.trim(data) == 'web|ipotgo') {
							location.href = '../ipotgo/';
						} else if ($.trim(data) == 'web|storego') {
							location.href = 'index.php?ex=#cl';
						} else if ($.trim(data) == 'web|ipotnews') {
							location.href = 'index.php?ex=#cl';
						} else {
							str = $.trim(data);
							res = str.split("|");
							if (res[0] == "ios") {
								location.href = '../storereksa/';
							} else {
								location.href = '../';
							}

						}
					}
				});

			}
		});

}


//End Process Login-Logout

function procesLogoutPin() {

	str_url = "../../programer_script/process_login.php?type=logoutpin";
	$.ajax({
		url: str_url,
		success: function (data) {
			//alert("dila");
			location.reload();
		}
	});
}

function checkExistingLogin() {

	str_url = "../../programer_script/check_existing_login.php?type=general-session";
	$.ajax({
		url: str_url,
		success: function (data) {
			console.log("Flag Existing Login : " + data);
			if ($.trim(data) == 'NO') {
				location.reload();
			}
			//location.reload();
		}
	});
}


//CACHED GET SCRIPT

jQuery.cachedScript = function (url, options) {
	// Allow user to set any option except for dataType, cache, and url
	options = $.extend(options || {}, {
		dataType: "script",
		cache: true,
		url: url,
		async: false
	});
	// Use $.ajax() since it is more flexible than $.getScript
	// Return the jqXHR object so we can chain callbacks
	return jQuery.ajax(options);
};


//MENU FUNCTION
$(".open-panel").click(function () {
	$("html").addClass("openNav");
});

$(".close-panel, #content").click(function () {
	$("html").removeClass("openNav");
});

//TOP MENU
function topmenu01() {
	$('#topmenu01').addClass('active');
	$('#topmenu02,#topmenu03,#topmenu04,#topmenu05,#topmenu06,#topmenu07,#topmenu08,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu02() {
	$('#topmenu02').addClass('active');
	$('#topmenu01,#topmenu03,#topmenu04,#topmenu05,#topmenu06,#topmenu07,#topmenu08,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu03() {
	$('#topmenu03').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu04,#topmenu05,#topmenu06,#topmenu07,#topmenu08,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu04() {
	$('#topmenu04').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu03,#topmenu05,#topmenu06,#topmenu07,#topmenu08,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu05() {
	$('#topmenu05').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu03,#topmenu04,#topmenu06,#topmenu07,#topmenu08,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu06() {
	$('#topmenu06').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu03,#topmenu04,#topmenu05,#topmenu07,#topmenu08,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu07() {
	$('#topmenu07').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu03,#topmenu04,#topmenu05,#topmenu06,#topmenu08,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu08() {
	$('#topmenu08').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu03,#topmenu04,#topmenu05,#topmenu06,#topmenu07,#topmenu09,#topmenu10').removeClass('active');
}

function topmenu09() {
	$('#topmenu09').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu03,#topmenu04,#topmenu05,#topmenu06,#topmenu07,#topmenu08,#topmenu10').removeClass('active');
}

function topmenu10() {
	$('#topmenu10').addClass('active');
	$('#topmenu01,#topmenu02,#topmenu03,#topmenu04,#topmenu05,#topmenu06,#topmenu07,#topmenu08,#topmenu09').removeClass('active');
}
//END TOP MENU


//ADD BASKET
function showCartList() {
	//str_url = '../../../../../module/shoppingcart/cart-list.php';
	str_url = domain_name + 'module/shoppingcart/cart-list.php';
	$.ajax({
		url: str_url,
		success: function (data) {
			$('#cart-list').html(data);
			$('#showhidebasket').slideToggle('fast');
		}
	});

}

function hideCartList() {
	$('#showhidebasket').slideUp('fast');
	$('#cart-list').html('');
}

$(document).mouseup(function (e) {
	var container = $("#showhidebasket");

	if (!container.is(e.target) // if the target of the click isn't the container...
		&&
		container.has(e.target).length === 0) // ... nor a descendant of the container
	{
		hideCartList();
	}
});

function animateAddBasket(id_name) {
	//$('#'+id_name).effect("transfer", { to: "#shoppingBasket", className: "ui-effects-transfer" }, 600);
	$('.cartbtn')
		.addClass('animation animating rubberBand')
		.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			$(this).removeClass('animation animating rubberBand');
		});
	getTotalBasket();

}

function animateAddAllocation(id_name) {
	//$('#'+id_name).effect("transfer", { to: "#step3label", className: "ui-effects-transfer" }, 600);	  
}


function getTotalBasket() {

	//str_url = "../../programer_script/view_cart.php?type=totalbasket";
	str_url = domain_name + "programer_script/view_cart.php?type=totalbasket";
	$.ajax({
		url: str_url,
		cache: false,
		success: function (data) {
			$("#countFunds, .countFunds").text(data);
			//alert(data);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);			
		}
	});
}

function addBasket(animate_id, productid, producttype, baskettype) {
	//baskettype = direct | switch
	str_url = "../../programer_script/process_cart.php?fundid=" + productid + "&action=add&type=" + producttype + "&baskettype=" + baskettype;
	$.ajax({
		url: str_url,
		success: function (data) {
			animateAddBasket(animate_id);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);			
		}
	});
}

function deleteDataBasket(productid, producttype, baskettype) {
	str_url = "../../programer_script/process_cart.php?fundid=" + productid + "&action=remove&type=" + producttype + "&baskettype=" + baskettype;
	$.ajax({
		url: str_url,
		success: function (data) {
			animateAddBasket();
			setTimeout(function () {
				getTotalBasket();
				showCartList();
			}, 1000);

		},
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);			
		}
	});

	$('#checkoutList').on('click', '.deleteList', function () {
		$(this).closest('li')
			.addClass('animation animating slideOutLeft')
			.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
				$(this).remove();
			});
	});
}

function menuAuthorisasi(tipe) {

	str_url = "../../programer_script/user_authorisasi.php?type=regular";
	$.ajax({
		url: str_url,
		success: function (data) {

			//if(data == "NO FSM"){				
			if ($.trim(data) == "NO FSM") {
				//alert ('NO FSM');
				popNeedLogin();
			} else if ($.trim(data) == "NO RDI") {
				//alert ('NO RDI');
				//alert ('Transaksi Tidak Dapat Dilakukan.\nMohon Menunggu Proses RDI Account Anda Selesai.');
				swal({
					title: "Transaksi Tidak Dapat Dilakukan",
					text: "Mohon Menunggu Proses RDI Account Anda Selesai.",
					type: "error",
					timer: 4000,
					showConfirmButton: true
				});
			} else if ($.trim(data) == "YES") {
				if (tipe == "SELL") {
					location.href = '../../ipotfund/trx-sell-new.php?showportfolio=yes';
				} else if (tipe == "AUTO-INVESTMENT") {
					location.href = 'autoinvestment.php?page=autoinvest';
				} else if (tipe == "AUTO-INVESTMENT-STOCK") {
					location.href = 'autoinvestmentStock.php?page=autoinveststock';
				} else if (tipe == "ORDERMATRIX") {
					location.href = '../../ipotfund/ordermatrix.php';
				} else if (tipe == "AUTOCASH") {

					//alert(document.cookie.split(";"));
					module_pick = getCookieValue('cookieCurrentModule');
					if (module_pick == "ipotgo" || module_pick == "ipotnews") {
						location.href = 'autocash.php';
					} else {
						location.href = '../../ipotmember/autocash.php';
					}

				} else if (tipe == "AUTOCASHAPPS") {
					location.href = '../../storego/autocash.php';
				} else if (tipe == "EIPO") {
					location.href = '../../ipotstock/eIPO-book.php';
				}
			} else {
				popNeedLogin();
			}
		}
	});

}

function menuAuthorisasiDirect(tipe, link_direct) {
	if (tipe == "EIPO") {
		str_url = "../../programer_script/user_authorisasi.php?type=isipotmember";
	} else {
		str_url = "../../programer_script/user_authorisasi.php?type=regular";
	}
	$.ajax({
		url: str_url,
		success: function (data) {
			//if(data == "NO FSM"){				
			if ($.trim(data) == "NO FSM") {
				//alert ('NO FSM');
				popNeedLogin();
			} else if ($.trim(data) == "NO RDI") {
				//alert ('NO RDI');
				//alert ('Transaksi Tidak Dapat Dilakukan.\nMohon Menunggu Proses RDI Account Anda Selesai.');
				swal({
					title: "Transaksi Tidak Dapat Dilakukan",
					text: "Mohon Menunggu Proses RDI Account Anda Selesai.",
					type: "error",
					timer: 4000,
					showConfirmButton: true
				});
			} else if ($.trim(data) == "YES") {
				if (tipe == "SELL") {
					location.href = '../../ipotfund/trx-sell.php';
				} else if (tipe == "AUTO-INVESTMENT") {
					location.href = 'autoinvestment.php?page=autoinvest';
				} else if (tipe == "ORDERMATRIX") {
					location.href = '../../ipotfund/ordermatrix.php';
				} else if (tipe == "EIPO") {
					//location.href= '../../ipotstock/eIPO-book.php';
					location.href = link_direct;
				}
			} else {
				popNeedLogin();
			}
		}
	});

}

function autoCompleteListFundSales() {
	$.getJSON("../../programer_script/source_json_list_acc_sales.php?type=regular", function (dataResult) {
		$("#frmShowListAccountSales").autocomplete({
			//minLength: 2,		    
			source: dataResult,
			html: true,
			focus: function (event, ui) {
				$("#frmShowListAccountSales").val(ui.item.label);
				return false;
			},

			select: function (event, ui) {
				//$( "#"+id_name ).val( ui.item.value );				
				$("#frmShowListAccountSales").val(ui.item.label);
				$("#frmPickCustcode").val(ui.item.value);
				changeCustcodeSelect();
				return false;
			},

			open: function () {
				$(this).autocomplete('widget').css('z-index', 3000);
				return false;
			},



		}).data("ui-autocomplete")._renderItem = function (ul, item) {
			return $("<li></li>")
				.data("item.autocomplete", item)
				.append("<a>" + item.label + " </a>")
				.appendTo(ul);
		};
	});
}


function submitFasilitasTambahan() {
	flag_regular = "N";
	if ($('#checkAccTypeRegular').is(':checked')) {
		flag_regular = "Y";
	}
	flag_odt = "N";
	if ($('#checkAccTypeOdt').is(':checked')) {
		flag_odt = "Y";
	}
	flag_margin = "N";
	if ($('#checkAccTypeMargin').is(':checked')) {
		flag_margin = "Y";
	}
	flag_sp = "N";
	if ($('#SPFacilityNo').is(':checked')) {
		flag_sp = "N";
	}
	if ($('#SPFacility').is(':checked')) {
		flag_sp = "Y";
	}

	console.log(flag_regular + "|" + flag_odt + "|" + flag_margin + "|" + "|" + flag_sp);

	str_url = '../../programer_script/submit_registration_existing.php?type=submit';
	$.post(str_url, {
			flagRegular: flag_regular,
			flagOdt: flag_odt,
			flagMargin: flag_margin,
			flagSp: flag_sp
		})
		.done(function (data) {
			//alert( "Data Loaded: " + data );
			$('#checkAccTypeRegular').attr('checked', false); // Unchecks it

			$('#checkAccTypeOdt').attr('checked', false); // Unchecks it
			$('#checkAccTypeMargin').attr('checked', false); // Unchecks it
			$('#SPFacilityNo').attr('checked', false); // Unchecks it
			$('#SPFacility').attr('checked', false); // Unchecks it
			$('#upgradeFasilitas').modal('hide')
			$('#confirmFasilitas').modal()
		});


}

function allowOnlyNumberFormat(id_name) {
	$("#" + id_name).keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
}

function allowOnlyAbjad(id_name) {

	//plus single quote
	//$("#"+id_name).keydown(function (e) {
	$("#" + id_name).keyup(function (e) {
		//var testPattern = new RegExp('^[a-zA-Z\s]$');
		//var testPattern = new RegExp("[a-z-A-Z]");
		var testPattern = new RegExp("^[a-z-A-Z\\s]+$");
		var res = testPattern.test($("#" + id_name).val().charAt($("#" + id_name).val().length - 1));
		if (!res) $(this).val($(this).val().slice(0, -1));
	});

}


//ini di js page nya ajah
function checkFormatLogin(id_name) {

	$("#" + id_name).keyup(function (e) {
		//var testPattern = new RegExp("[0-9a-z-A-Z\s\-]");
		var testPattern = new RegExp("^[0-9a-z-A-Z]+$");

		var res = testPattern.test($("#" + id_name).val().charAt($("#" + id_name).val().length - 1));
		if (!res) $(this).val($(this).val().slice(0, -1));
		//ilangin strip
		$(this).val($(this).val().replace(/-/g, ''));


	});

	//plus single quote
	/*
	$("#"+id_name).keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        //if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190,222,32]) !== -1 ||
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up	
			 (e.keyCode >= 96 && e.keyCode <= 105) || 
             // Allow: home, end, left, right, down, up	
			 (e.keyCode === 109 || e.keyCode === 189 || e.keyCode === 173) || 
             // Allow: single quote without shift	
			(e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ( ( (e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 48 || e.keyCode > 57) ) || (e.shiftKey && (e.keyCode >= 48 && e.keyCode <= 57) ) || e.keyCode == 222  ) {
            e.preventDefault();
        }
    });
	*/
}



function allowOnlyAbjadNumber(id_name) {

	//plus single quote
	//$("#"+id_name).keydown(function (e) {
	$("#" + id_name).keyup(function (e) {
		//var testPattern = new RegExp('^[0-9a-zA-Z\s\']$');
		var testPattern = new RegExp("[0-9a-z-A-Z\\s]");
		var res = testPattern.test($("#" + id_name).val().charAt($("#" + id_name).val().length - 1));
		if (!res) $(this).val($(this).val().slice(0, -1));
	});

}

function formatPhoneNonCellular(id_name) {
	$("#" + id_name).keydown(function (e) {

		// Allow: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode === 107 || (e.keyCode === 61 && e.shiftKey === true)) ||
			// Allow: plus sign
			(e.shiftKey === true && e.keyCode === 57) ||
			// Allow: (
			(e.shiftKey === true && e.keyCode === 48) ||
			// Allow: )
			(e.keyCode === 32) ||
			// Allow: spasi
			(e.keyCode >= 35 && e.keyCode <= 40)) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
}


function formatPhoneCellular(id_name) {
	$("#" + id_name).keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up			
			(e.keyCode === 107 || (e.keyCode === 61 && e.shiftKey === true)) ||
			// Allow: + dari numpad
			(e.keyCode >= 35 && e.keyCode <= 40)) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
}

function mailValidation(id_name) {
	$("#" + id_name).blur(function () {
		expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

		if (!expr.test($("#" + id_name).val())) {
			swal(
				'Ups!',
				'Penulisan format email tidak sesuai',
				'error'
			); //##dillah		
			$("#" + id_name).val('');
		} else {
			return;
		}
	});
}

function allowNumberPlusSign(id_name) { //untuk telpon
	$("#" + id_name).keyup(function (e) {

		var testPattern = new RegExp("[0-9\\+]");
		var res = testPattern.test($("#" + id_name).val().charAt($("#" + id_name).val().length - 1));
		if (!res) $(this).val($(this).val().slice(0, -1));

	});
}

function allowPureNumber(id_name) { //ilangin titik
	//$("#"+id_name).keydown(function (e) {
	$("#" + id_name).keyup(function (e) {
		var testPattern = new RegExp('^[0-9]$');
		var res = testPattern.test($("#" + id_name).val().charAt($("#" + id_name).val().length - 1));
		if (!res) $(this).val($(this).val().slice(0, -1));

	});
}


function getCookieValue(cookieName) {
	return_msg = "";
	list_cookie = document.cookie.split(";");
	for (i = 0; i < list_cookie.length; i++) {
		list_cookie_detail = list_cookie[i].split("=");
		if (list_cookie_detail[0] == cookieName) {
			return_msg = list_cookie_detail[1];
			break;
		}
	}
	return return_msg;
}

function formatRtRw(id_name) {
	$("#" + id_name).keyup(function (e) {
		var testPattern = new RegExp("[0-9\\/]");
		var res = testPattern.test($("#" + id_name).val().charAt($("#" + id_name).val().length - 1));
		if (!res) $(this).val($(this).val().slice(0, -1));
	});
}

$(document).ready(function () {

	getTotalBasket();

	$('.collapse').collapse({
		toggle: false
	});

	if ($("#frmShowListAccountSales").length != 0) {
		autoCompleteListFundSales();
	}

	//window.onpopstate = function(event) {
	//alert("location: " + document.location + ", state: " + JSON.stringify(event.state));
	//};

	//history.pushState({page: 1}, "title 1", document.referrer);
	//history.pushState(null, null, window.location.href);
	//history.replaceState({page: 1}, "title 1", document.referrer);
});