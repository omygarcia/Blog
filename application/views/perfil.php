<!-- Perfil -->
<div class="col-lg-12">
<button class="btn btn-default">Crear nuevo post</button>
<?php
    //send info to method test of controller welcome
    echo form_open("welcome/test");
    $atributos = array('style'  => 'text-align: center;');
    echo form_input_text('nombre', 'Ingresa nombre', $atributos);
    echo form_input_password('password','Ingresa contraseña', $atributos);
    echo form_input_checkbox('remember','Recordar');
    echo form_input_radio('area','Valor 1', 'valor1');
    echo form_input_radio('area','Valor 2', 'valor2');
    echo form_input_radio('area','Valor 3', 'valor3');
    echo form_input_textarea('area','ingresa una descripcion');
    echo form_input_select("lol");
    $options = array('1' => 1,'2' => 2);
    echo select_options($options);
    echo form_submit("Enviar formulario");
    echo form_close();

    // send file to method uploadTest of controller welcome
    echo form_open_multipart("welcome/uploadTest");
    echo form_input_file('Selecciona una imagen');
    echo form_submit("Enviar formulario");
    echo form_close();
?>

<table class="table-responsive table-bordered">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Descripcion</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php
foreach ($contenido->result() as $row) {
	echo "<tr id='tr_".$row->id_blog."'><td>".$row->titulo."</td><td>".$row->descripcion."</td><td><a href='#' class='btn btn-primary' onclick='modificar()'>Modificar</a></td><td><a href='#' class='btn btn-danger' onclick='eliminar(".$row->id_blog.")'>Eliminar</a></td></tr>";
}
?>
	</tbody>
</table>
<div id="mensaje"></div>
<hr />
</div>
<script>
	function eliminar(id)
	{
		event.preventDefault();
		var resp = confirm("¿Estas seguro de eliminar el post on el id = "+id+"?");
		if(resp)
		{
			$("#tr_"+id).html("");

			var datos = {"id":id};
			var request = null;
			if(request)
			{
				request.abort();
			}
			request = $.ajax({
				url:"<?php echo base_url();?>inicio/delete",
				type:"post",
				data:datos,
				success:
					function(respuesta)
					{
						if(respuesta)
						{
							$('#mensaje').html("El post con el id"+respuesta+"se elimino correctamente");
						}
						else
						{
							$("#mensaje").html("No se pudo eliminar");
						}
					},
				error:
					function(textStatus)
					{
						$("#mensaje").html("Error:"+textStatus);
					}
			});
		}
	}

	function modificar()
	{
		event.preventDefault();
	}
</script>