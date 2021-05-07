$('#btnCommentNew').on('click',function(){
	if(checkInput()){
		if(checkEmail($('#email').val())){
			addCommentNew_Ajax($(this));
		}
	}else{
		alert('Bạn chưa điền đủ nội dung hoặc không phù hợp.');
	}
});

$('#btnCommentProduct').on('click',function(){
	if (checkInput()) {
		addCommentProduct_Ajax($(this));
	} else {
		alert('Bạn chưa điền đủ nội dung hoặc không phù hợp.');
	}
});

function checkInput() {
	var name=$('#author').val();
	var email=$('#email').val();
	var phone=$('#url').val();
	var content=$('#comment').val();
	if (content=='' || email=='' || name=='') {
		return false;
	}
	else{
		return true;
	}
	
}

function checkEmail(email) { 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    if (!filter.test(email)) { 
             alert('Hãy nhập địa chỉ email hợp lệ.\nExample@gmail.com');
             email.focus; 
             return false; 
    }
    else{ 
             return true; 
    } 
} 

function addCommentNew_Ajax(btn) {
	$.ajax({
		url: $(btn).attr('ajax_url'),
		method: 'post',
		data:{
			_token: $('#_token').val(),
			name: $('#author').val(),
			email: $('#email').val(),
			phone: $('#url').val(),
			content: $('#comment').val(),
			avatar: $(btn).attr('avatar'),
			newid: $('#newid').val()
		},
		success: function(data){
			document.getElementById('comment_content').innerHTML=data;
		}
	});
}

function addCommentProduct_Ajax(btn) {
	$.ajax({
		url: $(btn).attr('ajax_url'),
		method: 'post',
		data:{
			_token: $('#_token').val(),
			name: $('#author').val(),
			email: $('#email').val(),
			phone: $('#url').val(),
			content: $('#comment').val(),
			avatar: $(btn).attr('avatar'),
			productid: $('#productid').val()
		},
		success: function(data){
			document.getElementById('comment_content').innerHTML=data;
		}
	});
}