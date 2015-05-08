$(function(){
	$("#panel1-btn").on('click',function(){

		 

		$('#myTab a[href="#panel-2"]').tab('show'); // Select tab by name 
		/*var sent_msg=$('#form-1').serialize();
		$.post('release',sent_msg,function($data){
			var $pid=$data;
			alert($pid);

		});*/
	});

	$("#panel2-btn").on('click',function(){

		var $sent_msg1=$('#form-1').serialize();
		var $sent_msg2=$('#form-2').serialize();
		$.post('release',{product:$sent_msg1,seller:$sent_msg2},function($data){
			var $pid=$data;
			//alert($pid);

		});
		$('#myTab a[href="#panel-3"]').tab('show');
		
	});

})