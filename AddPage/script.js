$(function(){
	var dTable = $('#tResult').DataTable({
		'searching': true,
		'stateSave': true,
		'language': {
			'paginate': {
				'next': 'след.',
				'previous': 'пред.',
			},
			"emptyTable": 'Записи отсутствуют',
			"infoEmpty": 'Показано от 0 до 0 из 0 записей',
			"info": 'Показано от _START_ до _END_ из _TOTAL_ записей',
			"lengthMenu": 'Показано _MENU_ записей'	
		}
	});
		$.ajax({
		type : "POST",
		url: "../php/db.php",
		dataType:"json",

		success:function(response){
			for(let key in response){
				dTable.row.add([response[key].Termin,response[key].Meaning]).draw(false);
			}
		}
	});
});