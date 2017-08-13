
$(document).ready(function () {
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',                
		language: 'pt-BR'
	});

});
$(document).ready(function () {
	
	if(window.location.href.indexOf("customer") > -1) {
		$('#ul-menu li').removeClass("active");
		$('#link-customer').addClass("active");
	}
	if(window.location.href.indexOf("user") > -1) {
		$('#ul-menu li').removeClass("active");
		$('#link-user').addClass("active");
	}
	if(window.location.href.indexOf("product") > -1) {
		$('#ul-menu li').removeClass("active");
		$('#link-product').addClass("active");
	}

});
