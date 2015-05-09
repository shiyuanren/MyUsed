


$(function(){
	
	$("#panel1-btn").on('click',function(){
		$('#myTab a[href="#panel-2"]').tab('show'); // Select tab by name 
	});

	$("#panel2-btn").on('click',function(){

		var $sent_msg1=$('#form-1').serialize();
		var $sent_msg2=$('#form-2').serialize();

		var sendMsg = $sent_msg1+'&'+$sent_msg2;
		//console.log(sendMsg);

/*		$.ajaxSetup({
			async: false
		});*/
		$.post('release',sendMsg,function($data){
			/*alert(window.product_id);
			window.product_id=$data;
			alert(window.product_id);
*/
			$("#product_id").val($data);
			

		});
		$('#myTab a[href="#panel-3"]').tab('show');
		
	});


	$('#input-1').fileinput({

		overwriteInitial:true,
		uploadUrl:"uploadImgs",
		uploadAsync:true,
		maxFileCount:1,
		maxFileCount:5,
		uploadExtraData:function(){
			return {
				product_id:$("#product_id").val()
			};

		}
	});

})