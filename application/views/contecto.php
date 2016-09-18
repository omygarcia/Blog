<?php
foreach ($contenido->result() as $row) {
	echo $row->titulo."<br />";
}
?>
<center>
<fieldset>
	<legend>Contacto</legend>
	<form action="">
		<label>Nombre:</label><br />
		<input type="text" name="txt_nombre" /><br />
		<label>E-mail:</label><br />
		<input type="mail" name="txt_correo" /><br />
		<label>Mensaje:</label><br />
		<textarea name="txt_mensaje" id="message"></textarea><br />
		<input type="submit" value="Enviar" />
	</form>
</fieldset>
</center>