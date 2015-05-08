
$(function(){
	$('#incr').on('click',numUp);
	$('#minus').on('click',numMinus);
	$('#shopping-cart').on('click',addToCart);


	function numUp(){
		var num = parseInt($('#num').val());
		$('#num').val(num+1);

	}

	function numMinus(){
		var num = parseInt($('#num').val());
		if(num<2) return;
		$('#num').val(num-1);
	}

	function addToCart(){
		var $num=$('#num').val();
		//$action = $('#');
		$.post("addToCart",{id:$id,num:$num},function(data){
			alert(data.info);
		});
	}
})