$(function(){
	$('#toOrder').on('click',settle);
})


function settle(){
	
	$.post('cartToOrder','',function(data){
		if(data.status!=1){
			alert(data.msg);
			if(data.status==0){
				window.location.href=data.url;
			}
			return;
		}
		alert(data.msg);
		window.location.href=data.url;
	},'json');
}