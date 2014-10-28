<?php 
// $depArray = NULL;
$depArray = array(-1 => ' -'); 
// foreach($dptos->result() as $d)
// {
// 	$depArray[$d->CCDD]=strtoupper($d->Nombre);
// }

$provArray = array(-1 => ' -'); 
$distArray = array(-1 => ' -'); 

$test = array(
	'name'	=> 'test',
	'id'	=> 'test',
	'maxlength'	=> 200,
	'class' => 'form-control',
);

// EXTRAS
$pcap1_num = array(
	'name'	=> 'pcap1_num',
	'id'	=> 'pcap1_num',
	'class' => 'form-control input3 col-centered valid',
	'maxlength'	=> 2,
);

$attr = array('class' => 'form-vertical form-auth','id' => 'cap1_f');

echo form_open($this->uri->uri_string(),$attr); 

echo '

<div class="panel panel-info row">
							<div class="panel-heading">
								<h5 class="panel-title">100. Características de los miembros del hogar de origen y de los hermanos que no son miembros del hogar</h5>
							</div>
	<div class="col-md-12">	
							<div class="form-group" style="text-align:center">
							<label for="">Número de miembros del hogar: </label>
							'.form_input($pcap1_num).'<div class="help-block error"></div>
							</div>
				<div class="table-responsive">

							<table class="table table-bordered" id="pcap1_an">
								<thead>
									<tr>
										<th style="text-align:center;">101</th>
										<th colspan="3" style="text-align:center;">102</th>
										<th style="text-align:center;">103</th>
										<th style="text-align:center;">104</th>
										<th style="text-align:center;">105</th>
										<th style="text-align:center;">106</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nro de Orden</td>
										<td colspan="3">Cuales son los nombres y apellidos de cada una de las personas que viven permanentemente en tu hogar de origen y de los hermanos que no viven en este hogar?</td>
										<td>Cual es la relacion de parentesco con el postulante? <br /><b>(1)Postulante / (2)Padre / (3)Madre / (4)Hermano(a) / (5)Esposo(a) / (6)Hijo(a) / (7)Abuelo(a) / (8)Otros parientes / (9)Otros no parientes</b></td>
										<td>Vive permanentemente en tu hogar de origen? <br /><b>(1)Si / (2)No</b></td>
										<td>Sexo <br /><b>(1)Hombre / (2)Mujer</b></td>
										<td>Qué edad tiene en años cumplidos?</td>
									</tr>
									<tr>
										<td></td>
										<td width="20%">Nombre</td>
										<td width="20%">Ap. Paterno</td>
										<td width="20%">Ap. Materno</td>
										<td width="20%"></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>									

								</tbody>
							</table>
					</div>
							<br>


				<div class="table-responsive">

							<table class="table table-bordered"  id="pcap1_bn">
								<thead>
									<tr>
										<th style="text-align:center;"></th>
										<th style="text-align:center;" colspan="2">Para todas las personas de 3 a mas años de edad</th>
										<th style="text-align:center;" colspan="3">Solo para los hermanos de 14 a 23 años de edad</th>
										<th style="text-align:center;" colspan="3">Para todas las personas de 14 a mas años</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th style="text-align:center;"></th>
										<th style="text-align:center;">107</th>
										<th style="text-align:center;">108</th>
										<th style="text-align:center;">109</th>
										<th style="text-align:center;">110</th>
										<th style="text-align:center;">111</th>
										<th style="text-align:center;">112</th>
										<th style="text-align:center;">113</th>
										<th style="text-align:center;">114</th>
									</tr>								
									<tr>
										<td>Nro de Orden</td>
										<td width="20%">Cual es el idioma o lengua extranjera que aprendió en su niñez? <br /><b> (1)Castellano? / (2)Quechua? / (3)Aymara? / (4)Ashaninka? / (5)Idioma extranjero? / (6)Es sordomudo/a mudo/a?	 / (7)Otra lengua nativa?</b></td>
										<td width="20%">Cual es el nivel de estudios mas alto que aprobó? <br /><b>(1)Sin nivel / (2)Inicial / (3)Primaria / (4)Secundaria / (5)Superior No Universitaria / (6)Superior Universitaria / (7)Post- Grado u otro similar</b></td>
										<td>Ha postulado a BECA 18? <br /><b>(1)Si / (2)No/ (3)No sabe</b></td>
										<td>Ha sido aceptado en BECA 18? <br /><b>(1)Si / (2)No</b></td>
										<td>¿Planea postular o volver a postular ... a Beca 18? <br /><b>(1)Si / (2)No</b></td>
										<td>¿... es tu principal apoderado? <br /><b>(1)Si / (2)No</b></td>
										<td>Te apoya económicamente? <br /><b>(1)Si / (2)No</b></td>
										<td width="20%">Con que frecuencia te comunicas con: <br /><b>(1)Diario? / (2)Interdiario? / (3)Semanal? / (4)Quincenal? / (5)Mensual? / (6)Otro? / (7)Nunca</b></td>
									</tr>

								</tbody>
							</table>							
					</div>

				</div>
</div>

';

echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>


<script type="text/javascript">

$(function(){

$(document).on("change",'.cap1_res8',function() {
		var pre = $(this).attr('id');
		var tex = pre.substring(0,7);
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
			
	if($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3){
		 	i_disread('#C1P109_' + nro);
		 	i_disread('#C1P110_' + nro);
		 	i_disread('#C1P111_' + nro);
	}else{
		 	i_enread('#C1P109_' + nro);
		 	i_enread('#C1P110_' + nro);
		 	i_enread('#C1P111_' + nro);
	}

});


$(document).on("change",'.cap1_res10',function() {
		var pre = $(this).attr('id');
		var tex = pre.substring(0,7);
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
if(!$(this).is('[readonly]')){			
	if($(this).val() == 2 ){
		 	$('#C1P111_' + nro).removeAttr('readonly');
		 	$('#C1P112_' + nro).removeAttr('readonly');
	}else{
		 	$('#C1P111_' + nro).val('');
		 	$('#C1P111_' + nro).attr('readonly','readonly');
		 	$('#C1P112_' + nro).val('');
		 	$('#C1P112_' + nro).attr('readonly','readonly');
	}
}

});

$(document).on("change",'.cap1_res9',function() {
		var pre = $(this).attr('id');
		var tex = pre.substring(0,7);
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
			
	if($(this).val() == 2){
		 	i_disread('#C1P110_' + nro);
			i_enread('#C1P111_' + nro);
	}else if($(this).val() == 3){
			i_disread('#C1P110_' + nro);
			i_disread('#C1P111_' + nro);
	}else{
			i_enread('#C1P110_' + nro);
			i_enread('#C1P111_' + nro);		
	}
	// $('#C1P110_' + nro).trigger('change');

});




//val car_n
$(document).on("change",'.cap1_res',function() {
		var pre = $(this).attr('id');
		var tex = pre.substring(0,7);
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
			
	if($(this).val() == 6){
		 	$('#C1P114_OBS_' + nro).removeAttr('readonly');
	}else{
		 	$('#C1P114_OBS_' + nro).val('');
		 	$('#C1P114_OBS_' + nro).attr('readonly','readonly');
	}

});



$(document).on("change",'.cap1_res3',function() {
		var pre = $(this).attr('id');
		var tex = pre.substring(0,7);
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
			
	if($(this).val() == 1){
		 	i_disread('#C1P109_' + nro);
		 	i_disread('#C1P110_' + nro);
		 	i_disread('#C1P111_' + nro);
		 	i_disread('#C1P112_' + nro);
		 	i_disread('#C1P113_' + nro);
		 	i_disread('#C1P114_' + nro);
		 	i_disread('#C1P114_OBS_' + nro);
	}else{
		 	i_enread('#C1P109_' + nro);
		 	i_enread('#C1P110_' + nro);
		 	i_enread('#C1P111_' + nro);
		 	i_enread('#C1P112_' + nro);
		 	i_enread('#C1P113_' + nro);
		 	i_enread('#C1P114_' + nro);		 	
		 	i_enread('#C1P114_' + nro);		 	
		 	i_enread('#C1P114_OBS_' + nro);
	}

});


$(document).on("change",'.cap1_res6',function() {
		var pre = $(this).attr('id');
		var tex = pre.substring(0,7);
		var nro;

			if(pre.length == 8){
				 nro = pre.substring(7,8);
			}
			else if(pre.length == 9){
				nro = pre.substring(7,9);
			}				
			
	if(parseInt($(this).val()) < 3){
		 	i_disread('#C1P107_' + nro);
		 	i_disread('#C1P108_' + nro);
		 	if(parseInt($('#C1P103_'+ nro).val()) != 1){
		 	i_disread('#C1P109_' + nro);
		 	i_disread('#C1P109_' + nro);
		 	i_disread('#C1P110_' + nro);
		 	i_disread('#C1P111_' + nro);
		 	i_disread('#C1P112_' + nro);
		 	i_disread('#C1P113_' + nro);
		 	i_disread('#C1P114_' + nro);
		 	i_disread('#C1P114_OBS_' + nro);
		 	}
	}else if(parseInt($(this).val()) >= 3 && parseInt($(this).val()) < 14){	
			i_enread('#C1P107_' + nro);
		 	i_enread('#C1P108_' + nro);
		 	if(parseInt($('#C1P103_'+ nro).val()) != 1){
		 	i_disread('#C1P109_' + nro);
		 	i_disread('#C1P110_' + nro);
		 	i_disread('#C1P111_' + nro);
		 	i_disread('#C1P112_' + nro);
		 	i_disread('#C1P113_' + nro);
		 	i_disread('#C1P114_' + nro);		 	
		 	i_disread('#C1P114_' + nro);		 	
		 	i_disread('#C1P114_OBS_' + nro);	
		 	}
	}else if(parseInt($(this).val()) >= 14 && parseInt($(this).val()) <= 23){
			i_enread('#C1P107_' + nro);
		 	i_enread('#C1P108_' + nro);
		 	if(parseInt($('#C1P103_'+ nro).val()) != 1){
		 	i_enread('#C1P109_' + nro);
		 	i_enread('#C1P110_' + nro);
		 	i_enread('#C1P111_' + nro);
		 	i_enread('#C1P112_' + nro);
		 	i_enread('#C1P113_' + nro);
		 	i_enread('#C1P114_' + nro);		 	 	
		 	i_enread('#C1P114_OBS_' + nro);
			}
	}else if(parseInt($(this).val()) > 23 ){
			i_enread('#C1P107_' + nro);
		 	i_enread('#C1P108_' + nro);		
		 	if(parseInt($('#C1P103_'+ nro).val()) != 1){
		 	i_disread('#C1P109_' + nro);
		 	i_disread('#C1P110_' + nro);
		 	i_disread('#C1P111_' + nro);
		 	i_enread('#C1P112_' + nro);
		 	i_enread('#C1P113_' + nro);
		 	i_enread('#C1P114_' + nro);		 	 	
		 	i_enread('#C1P114_OBS_' + nro);		
		 	} 	
	}

});


$('#pcap1_num').val((<?php echo $CAP01->num_rows(); ?> > 0) ? <?php echo $CAP01->num_rows(); ?> : '' );

$('#pcap1_num').keyup(function(event) {

$('#pcap1_an tr').remove('.entrev');
$('#pcap1_bn tr').remove('.entrev');

	var ahua = $(this).val();
	if(ahua >= 0 && ahua<=20){
	  for(var i=1; i<=ahua;i++){
	    var asd = '<tr class="entrev">';
	    asd +='<td><input type="text" class="form-control input3 embc' + i + '" maxlength="2" readonly name="C1P101[]" id="C1P101_' + i + '" value="' + i + '" ></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C1P102A[]" id="C1P102A_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C1P102B[]" id="C1P102B_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C1P102C[]"  id="C1P102C_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control cap1_res3 embc' + i + '" maxlength="1" name="C1P103[]"  id="C1P103_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P104[]"  id="C1P104_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P105[]"  id="C1P105_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control cap1_res6 embc' + i + '" maxlength="2" name="C1P106[]"  id="C1P106_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd += '</tr>';
	    $('#pcap1_an > tbody').append(asd);
	  }

	  for(var i=1; i<=ahua;i++){
	    var asd = '<tr class="entrev">';
	    asd +='<td><input type="text" class="form-control input3 embc' + i + '" maxlength="2" readonly name="C1P101x[]" id="C1P101x_' + i + '" value="' + i + '" ></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P107[]" id="C1P107_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + ' cap1_res8" maxlength="1" name="C1P108[]" id="C1P108_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + ' cap1_res9" maxlength="1" name="C1P109[]"  id="C1P109_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + ' cap1_res10" maxlength="1" name="C1P110[]"  id="C1P110_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P111[]"  id="C1P111_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P112[]"  id="C1P112_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P113[]"  id="C1P113_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + ' cap1_res" maxlength="1" name="C1P114[]"  id="C1P114_' + i + '" value="" ><div class="help-block error"></div> - Otro Especifique <div class="help-block error"></div><input type="text" readonly class="form-control input10 embc' + i + '" maxlength="50" name="C1P114_OBS[]" id="C1P114_OBS_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd += '</tr>';
	    $('#pcap1_bn > tbody').append(asd);
	  }

	}else if(ahua==''){
		//
	}else{
		//alert('10 Entrevistas máximo');
	}

	var as = 1;
	$.each( <?php echo json_encode($CAP01->result()); ?>, function(i, data) {
		   $('#C1P101_' +  as).val(data.C1P101);
		   $('#C1P101x_' +  as).val(data.C1P101);
		   $('#C1P102A_' +  as).val(data.C1P102A);
		   $('#C1P102B_' +  as).val(data.C1P102B);
		   $('#C1P102C_' +  as).val(data.C1P102C);
		   $('#C1P103_' +  as).val(data.C1P103);
		   $('#C1P103_' +  as).trigger('change');
		   $('#C1P104_' +  as).val(data.C1P104);
		   $('#C1P105_' +  as).val(data.C1P105);
		   $('#C1P106_' +  as).val(data.C1P106);
		   if(!$("#C1P106_" + as ).is('[readonly]'))
		   $('#C1P106_' +  as).trigger('change');
		   $('#C1P107_' +  as).val(data.C1P107);
		   $('#C1P108_' +  as).val(data.C1P108);
		   $('#C1P109_' +  as).val(data.C1P109);
		   if(!$("#C1P109_" + as ).is('[readonly]'))
		   $('#C1P109_' +  as).trigger('change');
		   $('#C1P110_' +  as).val(data.C1P110);
		   if(!$("#C1P110_" + as ).is('[readonly]'))
		   $('#C1P110_' +  as).trigger('change');
		   $('#C1P111_' +  as).val(data.C1P111);
		   $('#C1P112_' +  as).val(data.C1P112);
		   $('#C1P113_' +  as).val(data.C1P113);
		   $('#C1P114_' +  as).val(data.C1P114);
		   if(!$("#C1P114_" + as ).is('[readonly]'))
		   $('#C1P114_' +  as).trigger('change');
		   $('#C1P114_OBS_' +  as).val(data.C1P114_OBS);
		   as++;
	}); 

});

$('#pcap1_num').trigger('keyup');


$("#cap1_f").validate({
		    rules: {  
		    	pcap1_num:{
		    		range:[1,20],
		    		required:true,
		    	},			    		   			    	    
				'C1P102A[]':{
				    required:true,
				},	       
				'C1P102B[]':{
				    required:true,
				},  		              
				'C1P102C[]':{
				    required: true,			    	
				}, 
				'C1P103[]':{
		    		range:[0,9],
					digits:true,
				    required:true,
				},	       
				'C1P104[]':{
		    		valrango:[1,2,9],
					digits:true,
				    required:true,
				},  		              
				'C1P105[]':{
		    		valrango:[1,2,9],
					digits:true,
				    required: true,			    	
				}, 		
				'C1P106[]':{
		    		valrango:[1,98,99],
					digits:true,
				    required:true,
				},	       
				'C1P107[]':{
		    		valrango:[1,7,9],
					digits:true,
				    requeridodis:true,
				},  		              
				'C1P108[]':{
		    		valrango:[1,7,9],
					digits:true,
				    requeridodis: true,			    	
				}, 		
				'C1P109[]':{
		    		valrango:[1,3,9],
					digits:true,
				    requeridodis: true,			    	
				}, 		
				'C1P110[]':{
		    		valrango:[1,2,9],
					digits:true,
					requeridodis:true,
				},  		              
				'C1P111[]':{
		    		valrango:[1,2,9],
					digits:true,
				    requeridodis: true,			    	
				}, 		
				'C1P112[]':{
		    		valrango:[1,2,9],
					digits:true,
				    requeridodis: true,			    	
				}, 				
				'C1P113[]':{
		    		valrango:[1,2,9],
					digits:true,
				    requeridodis:true,
				},  		              
				'C1P114[]':{
		    		valrango:[1,7,9],
					digits:true,
				    requeridodis: true,			    	
				}, 		
				'C1P114_OBS[]':{		    	
				    requeridodis: true,			    	
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

				    	var cap1_data = $("#cap1_f").serializeArray();
					    cap1_data.push(
					        {name: 'ajax',value:1}
					    );
						
				        var bcar = $( "#cap1_f :submit" );
				        bcar.attr("disabled", "disabled");
				        $.ajax({
				            url: CI.site_url + "/encuesta/cap1",
				            type:'POST',
				            data:cap1_data,
				            dataType:'json',
				            success:function(json){
								alert(json.msg);
								bcar.removeAttr('disabled');
								$('#ctab1').removeClass('active');
								window.scrollTo(0, 0);
								$('#ctab2 a').trigger('click');								
				            }
				        });     			          	
		    }       
}); 


}); 
</script>
