$('.media').each(function(index){
	$(this).click(function(){
		console.log('test');
		var src = $(this).find('img').attr('src');
		$('#modal-img').attr('src', src);
		$('#modal-content').html(posts.data[index].content);
	});
});