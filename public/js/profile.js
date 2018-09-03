var textArray = [];

$('#profile-edit').click(function(){
	$('.profile-data').each(function(index){
		//$(this).text()
		var text = $(this).text();
		textArray.push(text);
		
		switch (index) {
			case 0:
				$(this).html("<input type='text' id='profile-career' value='" + text + "'>");
				break;
			case 1:
				$(this).html("<input type='text' id='profile-born' value='" + text + "'>");
				break;
			case 2:
				$(this).html("<input type='text' id='profile-cellphone' value='" + text + "'>");
				break;				
		}
	});
	
	$('#profile-submit').show();
	$('#profile-cancel').show();
	$(this).hide();
});

$('#profile-cancel').click(function(){
	$('.profile-data').each(function(index){
		switch (index) {
			case 0:
				$(this).html(textArray[0]);
				break;
			case 1:
				$(this).html(textArray[1]);
				break;
			case 2:
				$(this).html(textArray[2]);
				break;
		}
	});
	
	$('#profile-submit').hide();
	$('#profile-cancel').hide();
	$('#profile-edit').show();
});