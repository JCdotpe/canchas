<?php 


//CAP 7

$C7P701_1 = array(
	'name'	=> 'C7P701_1',
	'id'	=> 'C7P701_1',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_2 = array(
	'name'	=> 'C7P701_2',
	'id'	=> 'C7P701_2',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_3 = array(
	'name'	=> 'C7P701_3',
	'id'	=> 'C7P701_3',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_4 = array(
	'name'	=> 'C7P701_4',
	'id'	=> 'C7P701_4',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_5 = array(
	'name'	=> 'C7P701_5',
	'id'	=> 'C7P701_5',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_6 = array(
	'name'	=> 'C7P701_6',
	'id'	=> 'C7P701_6',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_7 = array(
	'name'	=> 'C7P701_7',
	'id'	=> 'C7P701_7',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_8 = array(
	'name'	=> 'C7P701_8',
	'id'	=> 'C7P701_8',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_9 = array(
	'name'	=> 'C7P701_9',
	'id'	=> 'C7P701_9',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_10 = array(
	'name'	=> 'C7P701_10',
	'id'	=> 'C7P701_10',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_11 = array(
	'name'	=> 'C7P701_11',
	'id'	=> 'C7P701_11',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_12 = array(
	'name'	=> 'C7P701_12',
	'id'	=> 'C7P701_12',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_13 = array(
	'name'	=> 'C7P701_13',
	'id'	=> 'C7P701_13',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_14 = array(
	'name'	=> 'C7P701_14',
	'id'	=> 'C7P701_14',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_15 = array(
	'name'	=> 'C7P701_15',
	'id'	=> 'C7P701_15',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_16 = array(
	'name'	=> 'C7P701_16',
	'id'	=> 'C7P701_16',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_17 = array(
	'name'	=> 'C7P701_17',
	'id'	=> 'C7P701_17',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P701_17 = array(
	'name'	=> 'C7P701_17',
	'id'	=> 'C7P701_17',
	'maxlength'	=> 1,
	'class' => 'form-control',
);


$C7P702_1 = array(
	'name'	=> 'C7P702_1',
	'id'	=> 'C7P702_1',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P702_2 = array(
	'name'	=> 'C7P702_2',
	'id'	=> 'C7P702_2',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P702_3 = array(
	'name'	=> 'C7P702_3',
	'id'	=> 'C7P702_3',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P702_4 = array(
	'name'	=> 'C7P702_4',
	'id'	=> 'C7P702_4',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P702_5 = array(
	'name'	=> 'C7P702_5',
	'id'	=> 'C7P702_5',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C7P702_6 = array(
	'name'	=> 'C7P702_6',
	'id'	=> 'C7P702_6',
	'maxlength'	=> 1,
	'class' => 'form-control',
);


$OBS = array(
	'name'	=> 'OBS',
	'id'	=> 'OBS',
	'maxlength'	=> 1000,
	'class' => 'form-control',
);



//FIN CAP 7




//700*******************************************************************************************************


$attr = array('class' => 'form-vertical form-auth','id' => 'cap7_f');

echo form_open($this->uri->uri_string(),$attr); 

echo '
<div class="panel panel-info row">

	<div class="panel-heading">
		<h5 class="panel-title">700. Test Habilidades no Cognitivas</h5>
	</div>


	<div class="col-md-12">	
				<label for="">701. Test Habilidades Laborales</label>
						<table class="table table-condensed" id="emb_table">
					          <thead>
					               <tr>
					                 <th class="span3">Marque el número de la respuesta que más se parezca a cómo es usted </th>
					                 <p>(1)Poco parecido a mi forma de ser / (2)Algo parecido a mi forma de ser / (3)Parecido a mi forma de ser / (4)Muy parecido a mi forma de ser</p>
					                 <th class="span3"></th>
					                </tr>					              
					         </thead>
					         <tbody>
					              <tr>
					                 <td>1. Me propongo ser el (la) mejor del mundo en las cosas que hago</td>
					                 <td>' . form_input($C7P701_1) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>2. He superado dificultades para conquistar un reto o algo importante</td>
					                 <td>' . form_input($C7P701_2) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>3. Nuevas ideas y proyectos a veces me distraen de los que ya tenia</td>
					                 <td>' . form_input($C7P701_3) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>4. Ambiciono salir adelante</td>
					                 <td>' . form_input($C7P701_4) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>5. Cambio de intereses de un año al otro </td>
					                 <td>' . form_input($C7P701_5) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>6. Las dificultades no me desalientan </td>
					                 <td>' . form_input($C7P701_6) . '<div class="help-block error"></div></td>
					              </tr>  		

					              <tr>
					                 <td>7. He estado obsesionado con ideas o proyectos pero al poco tiempo pierdo el interés en ellos </td>
					                 <td>' . form_input($C7P701_7) . '<div class="help-block error"></div></td>
					              </tr>  	

					              <tr>
					                 <td>8. Soy una persona que trabaja duro</td>
					                 <td>' . form_input($C7P701_8) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>9. A menudo propongo metas, pero luego persigo otras distintas</td>
					                 <td>' . form_input($C7P701_9) . '<div class="help-block error"></div></td>
					              </tr>  		

					              <tr>
					                 <td>10. Tengo dificultad para mantener mi atención en proyectos que duran muchos meses en terminarse </td>
					                 <td>' . form_input($C7P701_10) . '<div class="help-block error"></div></td>
				              	</tr>  

					              <tr>
					                 <td>11. Siempre termino lo que empiezo</td>
					                 <td>' . form_input($C7P701_11) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>12. Lograr algo de importancia duradera es la meta más importante de mi vida</td>
					                 <td>' . form_input($C7P701_12) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>13. Pienso que se le da demasiada importancia al éxito</td>
					                 <td>' . form_input($C7P701_13) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>14. He logrado una meta que me llevo años de esfuerzo conseguir</td>
					                 <td>' . form_input($C7P701_14) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>15. Siempre busco tener éxito </td>
					                 <td>' . form_input($C7P701_15) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>16. Cada cierto tiempo me intereso en nuevas metas </td>
					                 <td>' . form_input($C7P701_16) . '<div class="help-block error"></div></td>
					              </tr>  		

					              <tr>
					                 <td>17. Soy dedicado y disciplinado</td>
					                 <td>' . form_input($C7P701_17) . '<div class="help-block error"></div></td>
					              </tr>  
			              </tbody>
			           </table>	



				<label for="">702. Test de Bienestar</label>
				<label>A continuación encontrará 5 afirmaciones usando la escala del 1 al 7 mostrada abajo, indique su grado de acuerdo o desacuerdo con cada afirmación, colocando el número apropiado sobre la línea que está antes de cada oración. Por favor sea transparente y sincero en sus respuestas.</label>
					<p>(1)Totalmente en descuerdo / (2)En desacuerdo / (3)Ligeramente en desacuerdo / (4)Ni de acuerdo ni en desacuerdo / (5)Ligeramente de acuerdo / (6)De acuerdo / (7)Totalmente de acuerdo</p>
						<table class="table table-condensed" id="emb_table">
					          <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span3"></th>
					                </tr>					              
					         </thead>
					         <tbody>
					              <tr>
					                 <td>1. En la mayoría de aspectos de mi vida es cercana a mi ideal</td>
					                 <td>' . form_input($C7P702_1) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>2. Las condiciones de mi vida son excelentes</td>
					                 <td>' . form_input($C7P702_2) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>3. Estoy satisfecho/a con mi vida</td>
					                 <td>' . form_input($C7P702_3) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>4. Hasta ahora, he conseguido las cosas importantes que he deseado en la vida</td>
					                 <td>' . form_input($C7P702_4) . '<div class="help-block error"></div></td>
					              </tr>  	
					              <tr>
					                 <td>5. Si pudiera vivir mi vida de nuevo, no cambiaría casi nada</td>
					                 <td>' . form_input($C7P702_5) . '<div class="help-block error"></div></td>
					              </tr>  	
			              </tbody>
			           </table>	

			<div class="form-group">
				<label for="">Observaciones</label>
					'.form_textarea($OBS).'										
			</div>	
	</div>





</div>';
echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>


<script type="text/javascript">


$(function(){


if(<?php echo $CAP07->num_rows() ?> == 1){

	$.each( <?php echo json_encode($CAP07->row()); ?>, function(fila, valor) {
	        $('#' + fila).val(valor);       	
	}); 

}

$("#cap7_f").validate({
		    rules: {  
		    	C7P701_1:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_1:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_2:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_3:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_4:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_5:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_6:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_7:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_8:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_9:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_10:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_11:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_12:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_13:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_14:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_15:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_16:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
				C7P701_17:{
				    		required:true,
				    		valrango:[0,4,9],
				    		rangelength:[1,1]
				    	},
   	/********** C7P702 ************/
		    	C7P702_1: {
				    		required:true,
				    		valrango:[1,7,9],
				    		rangelength:[1,1]
				    	},
		    	C7P702_1: {
				    		required:true,
				    		valrango:[1,7,9],
				    		rangelength:[1,1]
				    	},
				C7P702_2: {
				    		required:true,
				    		valrango:[1,7,9],
				    		rangelength:[1,1]
				    	},
				C7P702_3: {
				    		required:true,
				    		valrango:[1,7,9],
				    		rangelength:[1,1]
				    	},
				C7P702_4: {
				    		required:true,
				    		valrango:[1,7,9],
				    		rangelength:[1,1]
				    	},
				C7P702_5: {
				    		required:true,
				    		valrango:[1,7,9],
				    		rangelength:[1,1]
				    	}

		    },

		    messages: {   
			//FIN MESSAGES
		    },
		    errorPlacement: function(error, element) {
		        $(element).next().after(error);
		    },
		    invalidHandler: function(form, validator) {
		      var errors = validator.numberOfInvalids();
		      if (errors) {
		        // var message = errors == 1
		        //   ? 'Por favor corrige estos errores:\n'
		        //   : 'Por favor corrige los ' + errors + ' errores.\n';
		        // var errors = "";
		        // if (validator.errorList.length > 0) {
		        //     for (x=0;x<validator.errorList.length;x++) {
		        //         errors += "\n\u25CF " + validator.errorList[x].message;
		        //     }
		        // }
		        // alert(message + errors);
		        alert("Corregir los errores");
		      }
		      validator.focusInvalid();
		    },
		    submitHandler: function(form) {

				    	var cap7_data = $("#cap7_f").serializeArray();
					    cap7_data.push(
					        {name: 'ajax',value:1}
					    );
						
				        var bcar = $( "#cap7_f :submit" );
				        bcar.attr("disabled", "disabled");
				        $.ajax({
				            url: CI.site_url + "/encuesta/cap7",
				            type:'POST',
				            data:cap7_data,
				            dataType:'json',
				            success:function(json){
								alert(json.msg);
								bcar.removeAttr('disabled');
							
				            }
				        });     			          	
		    }       
}); 


}); 
</script>