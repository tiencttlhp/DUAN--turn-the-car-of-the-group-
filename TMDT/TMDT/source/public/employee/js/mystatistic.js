$('#check_sale').on('click',function(){
	statisticAjax($(this).attr('link'));
});

$('#check_income').on('click',function(){
	statisticAjax($(this).attr('link'));
});

$('#check_profit').on('click',function(){
	statisticAjax($(this).attr('link'));
});

function statisticAjax(url) {
	console.log($('#timestart').val());
	$.ajax({
		url: url,
		method: 'post',
		data:{
			_token: $('#_token').val(),
			timestart: $('#timestart').val(),
			timeend: $('#timeend').val()
		},
		success: function (result){
            document.getElementById('nd').innerHTML=result['str'];
            document.getElementById('tong').innerHTML=result['total']+' VND';
         }
	});
};