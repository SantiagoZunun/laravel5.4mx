$(function() {

  // alert('Alerta agregado');
   $('#selectPais').on('change', SelecionPaisChange );

});

function SelecionPaisChange() {
    var pais_id =	$(this).val();
    //alert(pais_id);

     //utilizo la routa y se encuentra en al archivo API
     $.get('/api/estados/1/estados', function (data) {

     	//Aqui no me llega informacion
     	 console.log(data);


     });





}

//hola nada pro ahora