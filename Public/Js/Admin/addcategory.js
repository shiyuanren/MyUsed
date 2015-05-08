$(function(){
	$('#add-btn').on('click',send);	
})


function send(){
		var $categoryName=$('#categoryName').val();
		var $desp=$('#categoryDesp').val();

		//$action=$("#add-form").attr("action");
		$action="addCategory";


		/*$.ajax({
			type:'POST',
			url:'addCategory',
			data:{category_name:$categoryName,description:$desp},
			success:function(data){
				alert(data.msg);
			}

		});*/
		
		$.post('addCategory',{category_name:$categoryName,description:$desp},function(data){

			if(!data.status){
				alert(data.msg);
			}else{
				window.location.href=data.url;
			}
			//
		})
	}