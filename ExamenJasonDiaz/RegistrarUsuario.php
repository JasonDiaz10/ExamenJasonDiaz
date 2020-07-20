<?php
require("Cabeza.php");
require("SQL.php");
?>
	
	<?php
	 if($_POST){
		 
		 if($_POST["pass1"] == $_POST["pass2"]){
						
			$queEmp = "INSERT INTO `veterinaria`.`emp_empleados` (`emp_id`, `emp_nombre1`, `emp_nombre2`, `emp_apellido1`, `emp_apellido2`, `emp_fotoemp`, `emp_direccion`, `emp_telcasa`, `emp_telcelular`, `emp_email`, `emp_dui`, `emp_nit`, `emp_isss`, `emp_licconducir`, `dep_emp_id`, `gen_genero_gen_id`, `esp_emp_id`, `car_emp_id`) 
			VALUES (NULL, '".$_POST["PrimerNombre"]."', '".$_POST["SegundoNombre"]."', '".$_POST["PrimerApellido"]."', '".$_POST["SegundoApellido"]."', NULL, '".$_POST["Direcion"]."', '".$_POST["Telefono"]."', '".$_POST["TelefonoCel"]."', '".$_POST["E-mail"]."', '".$_POST["DUI"]."', '".$_POST["NIT"]."', '".$_POST["Isss"]."', '".$_POST["LC"]."','".$_POST["Departamento"]."', '".$_POST["SEXO"]."', '".$_POST["Especializacion"]."', '".$_POST["Cargo"]."')";
			//echo $queEmp;
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
			$queEmp = "SELECT `emp_id` FROM `veterinaria`.`emp_empleados` where `emp_nombre1`='".$_POST["PrimerNombre"]."'";
			//echo "<br>".$queEmp;
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
			$ron = mysql_fetch_row($resEmp);
			//echo $ron[0];
			$queEmp0 = "INSERT INTO `veterinaria`.`usr_usuarios` (`usr_username`, `usr_passwd`, `usr_accesibilidad`, `emp_usr_id`";
			$queEmp1 = ") VALUES ('".$_POST["user"]."', '".$_POST["pass1"]."', '".$_POST["Cargo"]."', '".$ron[0]."');";
			$queEmp = $queEmp0.$queEmp1;
			//echo "<br>".$queEmp;
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error()); 
			echo "<p> Creacion de Usuario Satisfactoria </p>";
			 }
		 else
			echo "<p>Las contraseñas no coinciden intented de nuevo </p>";
		 
		 }
	 else{	 
	?>
				<center><p>
	<form name="formulario" method="POST" onSubmit='return Comprobacion()' action="RegistarUsario.php">
	<div align="center">
	<center>
	<p> Añadir un nuevo usuario al sistema</p>
	<p>Usuario: <input type="text" name="user"></p>
	<p>Contraseña: <input type="password" name="pass1"></p>
	<p>Confirmar-Contraseña: <input type="password" name="pass2"></p>
	<p>Nombre Completo: <input type="text" name="Nombre"></p>
	<p>Cedula: <input type="text" name="Cedula"></p>
	<p>Telefono: <input type="text" name="Telefono"></p>
	<p>Correo Electronico: <input type="text" name="Correo"></p>
        <p>Direccion: <input type="text" name="Direccion"></p>
        <p>Estado: 
	<select name="Estado">
		<?php
		$queEmp = "SELECT * FROM `car_cargos`";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		while ($row = mysql_fetch_row($resEmp)){
			echo "<option value=".$row[0]." selected>".$row[1]."</option>";
			}
		?>
	</select>
	</p>
	<p>Rol: <input type="text" name="Direcion"></p>
	<p><input type="submit" value="Ingresar"></p>
	</center>
	</div>
	</form>
	</p>
	
	</center>
     <?php
		}
     ?>  
       
           
<?php
require("Pie.php");
?>

	
	
