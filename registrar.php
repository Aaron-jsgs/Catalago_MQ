<?php
include("con_db.php");
if (isset($_POST['Enviar'])) {
	if (strlen($_POST['fullname']) >= 1 && strlen($_POST['message']) >= 1) {
 		$Nombre = trim($_POST['fullname']);
 		$Email = trim($_POST['email']);
 		$Numero = trim($_POST['phone']);
 		$Asunto = trim($_POST['asunto']);
 		$Mensaje = trim($_POST['message']);
 		$fechareg = date("d/m/y");
 		$consulta = "INSERT INTO form_contact (Nombre, Email,Numero,Asunto, Mensaje, Fecha_reg) VALUES ('$Nombre','$Email','$Numero','$Asunto','$Mensaje','$fechareg')";
	 $resultado = mysqli_query($conex,$consulta);
 	if ($resultado) {
 		?> 
 			<h3 class="ok">¡Datos Registrados!</h3>
 		<?php
 	} else {
 		?> 
 			<h3 class="bad">¡Se presento un error, intenta de nuevo!</h3>
 		<?php
 	}
	 } else {
 		?> 
 			<h3 class="bad">¡Por favor complete los campos!</h3>
 		<?php
 	}
}
?>