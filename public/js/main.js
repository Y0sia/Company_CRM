$(document).ready(function() {

	$('#plus').click(function(){
		$('.comment__form').css('display', 'block');
	});
	$('#minus').click(function(){
		$('.comment__form').css('display', 'none');
	});
		$('.add-company__button').click(function(){
			if($('#add-company-span').text() == 'Добавить компанию') {
				$('.add-company__form').css('display', 'block');
				$('#add-company-span').text('Скрыть');
			} else {
				$('.add-company__form').css('display', 'none');
				$('#add-company-span').text('Добавить компанию');
			}
		});

});