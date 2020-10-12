$(document).on('submit','.database_operation',function(){
		var url=$(this).attr('action');
		var data=$(this).serialize();
		$.post(url,data,function(fb)
		{
			var resp=$.parseJSON(fb);
			if(resp.status=='true')
		{
			alert(resp.message);
			setTimeout(function(){
				window.location.href=resp.reload;
		},1000);
	}
	else
	{
		alert(resp.message);
	}
})
return false;

});
$(document).on('click','.category_status',function(){
	var id=$(this).attr('data-id');
	$.get(BASE_URL+'/admin/category_status/'+id,function(fb){
		alert('Status Successfully Changed');
	})
});
$(document).on('click','.exam_status',function(){
	var id=$(this).attr('data-id');
	$.get(BASE_URL+'/admin/exam_status/'+id,function(fb){
		alert('Status Successfully Changed');
	})
});

$(document).on('click','.student_status',function(){
	var id=$(this).attr('data-id');
	$.get(BASE_URL+'/admin/student_status/'+id,function(fb){
		alert('Status Successfully Changed');
	})
});

$(document).on('click','.portal_status',function(){
	var id=$(this).attr('data-id');
	$.get(BASE_URL+'/admin/portal_status/'+id,function(fb){
		alert('Status Successfully Changed');
	})
});


