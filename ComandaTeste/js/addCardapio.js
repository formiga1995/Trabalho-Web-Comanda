	$(document).ready(function(){		 	
  	var count = 0;

  	$('.btn-plus').on('click',function() {
  		count++;
  		$('.input-qtn').val(count);
  		//alert(count);
  	});

  	$('.btn-minus').on('click',function() {

  		if( count > 1) {
  			count--;	
  		} else {
  			count = 1;
  		}
  	
  		$('.input-qtn').val(count);
  	});

  		$('.btn-reset').on('click',function(){
  			$('.input-qtn').val('');

  		});
  	});