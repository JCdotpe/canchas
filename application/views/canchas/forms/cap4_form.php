<?php 

//CAP 4
$C4P401 = array(
	'name'	=> 'C4P401',
	'id'	=> 'C4P401',
	'maxlength'	=> 2,
	'class' => 'form-control',
);

$C4P402 = array(
	'name'	=> 'C4P402',
	'id'	=> 'C4P402',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P403 = array(
	'name'	=> 'C4P403',
	'id'	=> 'C4P403',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P403_OBS = array(
	'name'	=> 'C4P403_OBS',
	'id'	=> 'C4P403_OBS',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P404 = array(
	'name'	=> 'C4P404',
	'id'	=> 'C4P404',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P405 = array(
	'name'	=> 'C4P405',
	'id'	=> 'C4P405',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P406 = array(
	'name'	=> 'C4P406',
	'id'	=> 'C4P406',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P407 = array(
	'name'	=> 'C4P407',
	'id'	=> 'C4P407',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P408 = array(
	'name'	=> 'C4P408',
	'id'	=> 'C4P408',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P409 = array(
	'name'	=> 'C4P409',
	'id'	=> 'C4P409',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P410 = array(
	'name'	=> 'C4P410',
	'id'	=> 'C4P410',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4_OBS = array(
	'name'	=> 'C4_OBS',
	'id'	=> 'C4_OBS',
	'maxlength'	=> 1000,
	'class' => 'form-control',
);

$pcap4_num = array(
	'name'	=> 'pcap4_num',
	'id'	=> 'pcap4_num',
	'class' => 'form-control input3 col-centered valid',
	'maxlength'	=> 2,
);

//400*******************************************************************************************************


$attr = array('class' => 'form-vertical form-auth','id' => 'cap4_f');

echo form_open($this->uri->uri_string(),$attr); 

echo '

<div class="panel panel-info row">

	<div class="panel-heading">
		<h5 class="panel-title">400. En los ultimos tres meses, sin considerar a padres y hermanos, mencione a 10 personas con las que ha mantenido mayor comunicación o contacto</h5>
	</div>
	<div class="col-md-12">	
							<div class="form-group" style="text-align:center">
							<label for="">Número de personas: </label>
							'.form_input($pcap4_num).'<div class="help-block error"></div>
							</div>
				<div class="table-responsive">

						<table class="table table-condensed" id="pcap4_n">
					              <thead>
					               <tr>
					                 <th class="span3">401</th>
					                 <th class="span3">402</th>
					                 <th class="span3">403</th>
					                 <th class="span3">404</th>
					                 <th class="span3">405</th>
					                 <th class="span3">406</th>
					                 <th class="span3">407</th>
					                 <th class="span3">408</th>
					                 <th class="span3">409</th>
					                 <th class="span3">410</th>
					                </tr>					              
					               <tr>
					                 <th class="span3">Nro de Orden</th>
					                 <th class="span3">Nombre</th>
					                 <th class="span3">Tipo de relación <br /> (1)Familiar / (2)Amistad / (3)Pareja / (4)Laboral o profesional / (5)Profesor o tutor / (6)Universidad/Instituto / (7)Otro</th>
					                 <th class="span3">Es tu compañero en la especialidad que estudias <br / >(1)Si / (2)No</th>
					                 <th class="span3">Es becario del programa Beca 18 <br / >(1)Si / (2)No</th>
					                 <th class="span3">Sexo<br / > (1)Hombre / (2)Mujer</th>
					                 <th class="span3">Vive en el Perú o en el extranjero <br / >(1)Perú / (2)Extranjero</th>
					                 <th class="span3">En que Departamento vive?</th>
					                 <th class="span3">En que Provincia vive?</th>
					                 <th class="span3">En que Distrito vive</th>
					                </tr>
					             </thead>
					              <tbody>
 
			              </tbody>
			           </table>	
				</div>


	</div>	           

</div>';

			// <div class="col-md-12">
			// 	<label for="">Observaciones</label>
			// 		'.form_textarea($C4_OBS).'										
			// </div>	
echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>


<script type="text/javascript">

$(function(){

$(document).on("change",'.cap4_res7',function() {
		var pre = $(this).attr('id');
		var tex = pre.substring(0,7);
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
			
	if($(this).val() == 2 || $(this).val() == '' ){
		 	i_disread('#C4P408_'+ nro)
		 	i_disread('#C4P409_'+ nro)
		 	i_disread('#C4P410_'+ nro)
	}else{
		 	i_enread('#C4P408_'+ nro)
		 	i_enread('#C4P409_'+ nro)
		 	i_enread('#C4P410_'+ nro)
	}

});

//val car_n
$(document).on("change",'.cap4_res3',function() {
		var pre = $(this).attr('id');
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
			
	if($(this).val() == 7){
			// i_enable('#C4P404_'+ nro)
		 	$('#C4P403_OBS_' + nro).removeAttr('readonly');
	}else{
			// i_enable('#C4P404_'+ nro)
			$('#C4P403_OBS_' + nro).val('');
		 	$('#C4P403_OBS_' + nro).attr('readonly','readonly');	
	}

});

$(document).on("change",'.cap4_res4',function() {
		var pre = $(this).attr('id');
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
	if(!$(this).is('[readonly]')){
			
		if($(this).val() == 2){
				 i_disread('#C4P405_'+ nro)
		}else{
				i_enread('#C4P405_'+ nro)
		}
	}

});

$('#pcap4_num').val((<?php echo $CAP04->num_rows(); ?> > 0) ? <?php echo $CAP04->num_rows(); ?> : '' );

$('#pcap4_num').keyup(function(event) {

$('#pcap4_n tr').remove('.entrev');
	var ahua = $(this).val();
	if(ahua >= 0 && ahua<=10){
	  for(var i=1; i<=ahua;i++){
	  	var nrq = '';
	  	if($('#C3P301').val() == 2)
	  		nrq = 'readonly="readonly"';


	    var asd = '<tr class="entrev">';
	    asd +='<td><input type="text" class="form-control input3 embc' + i + '" maxlength="2" readonly name="C4P401[]" id="C4P401_' + i + '" value="' + i + '" ></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C4P402[]" id="C4P402_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control cap4_res3 embc' + i + '" maxlength="1" name="C4P403[]" id="C4P403_' + i + '" value="" > - Especifique <div class="help-block error"></div><input type="text" class="form-control embc' + i + '" maxlength="50" name="C4P403_OBS[]" id="C4P403_OBS_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" '  + nrq + ' class="form-control cap4_res4 embc' + i + '" maxlength="1" name="C4P404[]"  id="C4P404_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" '  + nrq + ' class="form-control embc' + i + '" maxlength="1" name="C4P405[]"  id="C4P405_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C4P406[]"  id="C4P406_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control cap4_res7 embc' + i + '" maxlength="1" name="C4P407[]"  id="C4P407_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C4P408[]"  id="C4P408_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C4P409[]"  id="C4P409_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C4P410[]"  id="C4P410_' + i + '" value="" ><div class="help-block error"></div></td>';

	    asd += '</tr>';
	    $('#pcap4_n > tbody').append(asd);
	  }
	}else if(ahua==''){
		//
	}else{
		//alert('10 Entrevistas máximo');
	}

	var as = 1;
	$.each( <?php echo json_encode($CAP04->result()); ?>, function(i, data) {
		   $('#C4P401_' +  as).val(data.C4P401);
		   $('#C4P402_' +  as).val(data.C4P402);
		   $('#C4P403_' +  as).val(data.C4P403);
		   $('#C4P403_' +  as).trigger('change');
		   $('#C4P403_OBS_' +  as).val(data.C4P403_OBS);

		   $('#C4P404_' +  as).val(data.C4P404);
		   $('#C4P404_' +  as).trigger('change');
		   $('#C4P405_' +  as).val(data.C4P405);
		   $('#C4P406_' +  as).val(data.C4P406);
		   $('#C4P407_' +  as).val(data.C4P407);
		   $('#C4P407_' +  as).trigger('change');
		   $('#C4P408_' +  as).val(data.C4P408);
		   $('#C4P409_' +  as).val(data.C4P409);
		   $('#C4P410_' +  as).val(data.C4P410);
		   as++;
	}); 

});


$('#pcap4_num').trigger('keyup');


$("#cap4_f").validate({
		    rules: {  
		    	pcap4_num:{
		    		range:[1,10],
		    		required:true,
		    	},				    		   			    	    
				'C4P402[]':{
				    required:true,
				},	       
				'C4P403[]':{
					range:[1,7],
				    required:true,
				},  		              
				'C4P403_OBS[]':{	    	
				}, 
				'C4P404[]':{
					valrango:[1,2,9],
				    requeridodis:true,
				},	       
				'C4P405[]':{
					valrango:[1,2,9],
				    requeridodis:true,
				},  		              
				'C4P406[]':{
					range:[1,2],
				    required: true,			    	
				}, 		
				'C4P407[]':{
					range:[1,2],
				    required:true,
				},	       	              		    		    		   			    	    
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

				    	var cap4_data = $("#cap4_f").serializeArray();
					    cap4_data.push(
					        {name: 'ajax',value:1}
					    );
						
				        var bcar = $( "#cap4_f :submit" );
				        bcar.attr("disabled", "disabled");
				        $.ajax({
				            url: CI.site_url + "/encuesta/cap4",
				            type:'POST',
				            data:cap4_data,
				            dataType:'json',
				            success:function(json){
								alert(json.msg);
								bcar.removeAttr('disabled');
								$('#ctab4').removeClass('active');
								window.scrollTo(0, 0);
								$('#ctab5 a').trigger('click');										
				            }
				        });     			          	
		    }       
}); 


}); 
</script>