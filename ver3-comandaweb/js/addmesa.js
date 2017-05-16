function addmesa(){
var count = ($('.content').size() +1);
        $("#btn-add").click(function () {
			var div;
			if(count%5 === 0){
				div = 'div';  // Quebra de linha se o botão for múltiplo de 5
			}
			else {
				div = 'x';
			}
            var btnMesa = $(document.createElement(div)).attr('class',
            'content').attr("id", 'divRemover' + count);
             
            btnMesa.html('<input type="button" id="idMesa' + count + ' " value="'+ count + '" class="btn-mesa">' );

            btnMesa.appendTo("#Mesas");
             
            count++;
			

        });


    $("#btn-remover").click(function () {
		if(count > 1){          //Isso aqui pro contador não ficar zoado
			count--;   
		}
		else{
			count = 1;
		}
		
     //count--
	 ;
     
    $("#divRemover" + count).remove();        //tchau botão
     });
}