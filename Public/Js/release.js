


$(function(){

	$("#panel1-btn").on('click',function(){

		for(var i=0;i<document.form1.elements.length-1;i++)
		{
			if(document.form1.elements[i].value=="")
			{
				alert("当前表单不能有空项");
				document.form1.elements[i].focus();
				return false;
			}
		}
		//  return true;

		$('#myTab a[href="#panel-2"]').tab('show'); // Select tab by name
	});

	$("#panel2-btn").on('click',function(){

		for(var i=0;i<document.form2.elements.length-1;i++)
		{
			if(document.form2.elements[i].value=="")
			{
				alert("当前表单不能有空项");
				document.form2.elements[i].focus();
				return false;
			}
		}
				//  return true;

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
