$(function(){
	$('.show_order_form').on('click', function(){
		$('.form_layout').css('display', 'flex');		 
	});
	
	$('.close_button').on('click', function(){
		$('.form_layout').css('display', 'none');
	});
	
	$('.order_form button').on('click', function(){
		let formData = $('.order_form').serializeArray();//let создает переменную
		let request = {};
		for(i in formData) {
			request[formData[i].name] = formData[i].value;
		}
		
		$.post('/api/api.php', request, function(response) {
			if (response == "1")
				$('.form_layout').css('display', 'none');
		});
		return false;
	});
});