jQuery(function($){
	$('#true_loadmore').click(function(){
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#true_loadmore').before(data); // вставляем новые посты
					$("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
				}
			}
		});
	});
});