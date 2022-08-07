

function showFilterMainResearchNews(searchTxt,halaman){
	$.post('../../module/newsresearch/ajax/ajax_filterMainResearchNews.php?searchTxt='+searchTxt+'&halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showFilterMoreResearchNews(halaman,searchTxt){
	$.post('../../module/newsresearch/ajax/ajax_filterResearchNews.php?halaman='+halaman+'&searchTxt='+searchTxt, function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showFilterMainFinancialPlanningNews(searchTxt,halaman){
	$.post('../../module/newsresearch/ajax/ajax_filterMainFinancialPlanningNews.php?searchTxt='+searchTxt+'&halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showFilterMoreFinancialPlanningNews(halaman,searchTxt){
	$.post('../../module/newsresearch/ajax/ajax_filterFinancialPlanningNews.php?halaman='+halaman+'&searchTxt='+searchTxt, function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showFilterMainMutualFundNews(searchTxt,halaman){
	$.post('../../module/newsresearch/ajax/ajax_filterMainMutualFundNews.php?searchTxt='+searchTxt+'&halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showFilterMoreMutualFundNews(halaman,searchTxt){
	$.post('../../module/newsresearch/ajax/ajax_filterMutualFundNews.php?halaman='+halaman+'&searchTxt='+searchTxt, function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showMoreResearchNews(halaman){
	$.post('../../module/newsresearch/ajax/ajax_researchNews.php?halaman='+halaman, function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showMainResearchNews(halaman){
	$.post('../../module/newsresearch/ajax/ajax_mainResearchNews.php?halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}


function showMoreFinancialPlanningNews(halaman){
	$.post('../../module/newsresearch/ajax/ajax_financialPlanningNews.php?halaman='+halaman, function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showMainFinancialPlanningNews(halaman){
	$.post('../../module/newsresearch/ajax/ajax_mainFinancialPlanningNews.php?halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showMoreMutualFundNews(halaman){
	$.post('../../module/newsresearch/ajax/ajax_mutualFundNews.php?halaman='+halaman, function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showMainMutualFundNews(halaman){
	$.post('../../module/newsresearch/ajax/ajax_mainMutualFundNews.php?halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function showMoreGeneralNews(halaman){ //###
	//alert("boom : "+halaman);
	//$.post('../../module/newsresearch/ajax/ajax_generalNews.php?halaman='+halaman, function(data) {
	$.post('../../module/newsresearch/ajax/ajax_generalNewsMore.php?halaman='+halaman+'&start=6', function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');
		//alert('12');
	});
}

function showFilterMoreGeneralNews(halaman,fmc,fnc,fm,fn){
	
	$.post('../../module/newsresearch/ajax/ajax_filterGeneralNews.php?halaman='+halaman+'&fmc='+fmc+'&fnc='+fnc+'&fm='+fm+'&fn='+fn, function(data) {
		document.getElementById("conMoreGeneralNews").innerHTML = data;
		//modifyAHref('');		
	});
}

function showMainGeneralNews(halaman){ //##
	//alert(halaman);
	$.post('../../module/newsresearch/ajax/ajax_mainGeneralNews.php?halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		//alert('14');
	});
}

function showFilterMainGeneralNews(fmc,fnc,fm,fn,halaman){
	$.post('../../module/newsresearch/ajax/ajax_filterMainGeneralNews.php?fmc='+fmc+'&fnc='+fnc+'&fm='+fm+'&fn='+fn+'&halaman='+halaman, function(data) {
		document.getElementById("conGeneralNews").innerHTML = data;
		//modifyAHref('');
		
	});
}

function optionFundManager(id_name){
	//$( "#"+id_name+"ManagerCode" ).val( '' );
	$.getJSON("../../module/newsresearch/ajax/ajax_jsonGetFund.php?type=fund_manager", function(dataFundManager) {	
		$("#"+id_name+"Manager").autocomplete({
			//minLength: 2,		    
			source: dataFundManager,
			
			focus: function( event, ui ) {			
				$( "#"+id_name+"Manager" ).val( ui.item.label );
				$( "#"+id_name+"ManagerCode" ).val( ui.item.value );		
				return false;
			},
				  
			select: function( event, ui ) {
				//$( "#"+id_name ).val( ui.item.value );
				$( "#"+id_name+"Manager" ).val( ui.item.label );
				$( "#"+id_name+"ManagerCode" ).val( ui.item.value );		
				return false;
			},
			
			open: function(){
				$(this).autocomplete('widget').css('z-index', 3000);
				return false;
			}
		});
	});
}

function optionFundName(id_name,micode){
	//$( "#"+id_name+"NameCode" ).val( '' );
	$.getJSON("../../module/newsresearch/ajax/ajax_jsonGetFund.php?type=fund_name", function(dataFundName) {	
		$("#"+id_name+"Name").autocomplete({
			//minLength: 2,		    
			source: dataFundName,
			
			focus: function( event, ui ) {			
				$( "#"+id_name+"Name" ).val( ui.item.label );
				$( "#"+id_name+"NameCode" ).val( ui.item.value );		
				return false;
			},
				  
			select: function( event, ui ) {
				//$( "#"+id_name ).val( ui.item.value );
				$( "#"+id_name+"Name" ).val( ui.item.label );
				$( "#"+id_name+"NameCode" ).val( ui.item.value );		
				return false;
			},
			
			open: function(){
				$(this).autocomplete('widget').css('z-index', 3000);
				return false;
			}
		});
	});
}


function showmoregeneralnews (){
	$('#moregeneralnewscontainer')
		.show()
		.addClass('animation animating fadeInDown')
		.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			$(this).removeClass('animation animating fadeInDown');
		});
}
