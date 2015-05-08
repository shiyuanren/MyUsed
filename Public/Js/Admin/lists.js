$(function(){

	$('#select').on('click',function(){
		if($(this).prop('checked')){
			$("input[name*=\'items\']").each(function(){
				$(this).prop('checked',true);
			});
		}else{
			$("input[name*=\'items\'").each(function(){
				$(this).prop('checked',false);
			});
		}
	});

	$('#del-btn').on('click',function(){

		var $chk_values=[];
		$("input[name*=\'items\']:checked").each(function(){
			$chk_values.push($(this).val());
		});
		//console.log(chk_values);
		$.post('deleteCategories',{ids:$chk_values},function(data){

			if(data.status==0){
				alert(data.msg);
			}
			window.location.href=data.url;
		});

	});

})