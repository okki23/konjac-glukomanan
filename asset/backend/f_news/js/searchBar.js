
//SEARCH BAR
var domain_name = window.location.protocol+"//"+window.location.host+"/";

$.when(
	//GET MANDATORY HERE
	$.cachedScript(domain_name+"allwebcore/js/jquery-ui.js"),
	$.cachedScript(domain_name+"allwebcore/js/jquery-ui-touch.js"),
	$.Deferred(function(deferred) {
		$(deferred.resolve);
	})
).done(function() {  
});


function openSearchBar () {
	$('#searchBarContainer')
		.addClass('open animation animating slideInRight')
		.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			$(this).removeClass('animation animating slideInRight');
			$('#newsSmartSearch').focus();
	});
	
	runSearchBar(); 
}
function closeSearchBar () {
	$('#searchBarContainer')
		.addClass('animation animating slideOutLeft')
		.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			$(this).removeClass('animation animating slideOutLeft open');
		});
}


function runSearchBar () {
	//str_url = "../../../programer_script/source_json_fund.php?type=alldata";
	str_url = domain_name+"programer_script/source_json_fund.php?type=alldata";
	
	
	$.getJSON(str_url, function(dataProvince) {
		$( "#newsSmartSearch, #newsSmartSearch2").autocomplete({
			minLength: 2,		    
			source: dataProvince,				
			html: true,
			focus: function( event, ui ) {			
				$("#newsSmartSearch, #newsSmartSearch2").val( ui.item.kode );
				return false;
			},
				  
			select: function( event, ui ) {						
				$( "#newsSmartSearch, #newsSmartSearch2").val( ui.item.kode );
				//autoCompleteNewsSelect(ui.item.kode);
				$( ".searchSpanText" ).slideDown( "slow");
				return false;
			},
			
			open: function(){				
				$(this).autocomplete('widget').css('z-index', 3000);
				//$('.ui-autocomplete.ui-widget-content').prepend('<div class="checkbox mb10 mt5"><label class="text-default"><i class="fa fa-check"></i> di cari sebagai kata bebas</label></div>');	
				
				return false;
			},
			
			

			
		}).data("ui-autocomplete")._renderItem = function (ul, item) {
			if(item.type  == "Saham" && item.subtype  == "Waran"){
				type_name = "Waran";
			}else if(item.type  == "Saham" && item.subtype  == "Right"){
				type_name = "Right";
			}else if(item.type  == "Saham" && item.subtype  == "ETF"){
				type_name = "ETF - Saham";
			}else if(item.type  == "Reksadana" && item.subtype  == "ETF"){
				type_name = "ETF - Saham - NAV";
			}else{
				type_name =  item.type;
			}
			if(true){ //if((item.type  == "Saham" && item.subtype  != "Waran" && item.subtype  != "Right") || item.type  == "Reksadana" || item.type  == "Currency" || item.type  == "Commodity")	
			 return $("<li></li>")
				 .data("item.autocomplete", item)
				 .append("<a class=\"stockAutoComplete\">" + item.show + " <span class=\"typeAutoComplete\">" + type_name + "</span></a>")
				 .appendTo(ul);	
				
			}
			else {
				return $("<li></li>")
				 .data("item.autocomplete", item);
			}
		};
			 
	});
	
}


