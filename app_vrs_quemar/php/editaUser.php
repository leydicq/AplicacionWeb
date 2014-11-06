<?php
	session_start();  
    include("conexion.php"); 
    $id_user = $_GET['id'];   
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/estlosMain.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>	
    <script type="text/javascript">
        function cancelar(){
             $("#tablaMain").load("php/adminUsuarios.php");
        };
        //
        function valUser(v_cod,v_usu,v_nom,v_ape,v_ema,v_rol,v_con,v_vco){
            v_nom= v_nom.replace(/\s/g,"%20");
            v_ape= v_ape.replace(/\s/g,"%20");
            alert("llego a valUser");
            $("#tablaMain").load("php/insertarUser.php?v_cod="+v_cod+"&v_usu="+v_usu+"&v_nom="+v_nom+"&v_ape="+v_ape+"&v_ema="+v_ema+"&v_rol="+v_rol+"&v_con="+v_con+"&v_vco="+v_vco);
        }; 
        //
        function verificaDatos(){
            alert("llego a verificaDatos");
            var v_codigo               = $("#v_codigo").val();
            var v_usuario              = $("#v_usuario").val();
            var nombre                 = $("#nombre").val();
            var apellido               = $("#apellido").val();
            var email                  = $("#email").val();
            var validacion_email       = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/; 
            var rol                    = $("#rol").val();
            var v_contrasena           = $("#v_contrasena").val();
            var conf_contrasena        = $("#conf_contrasena").val();
            //
            if (v_usuario == "") {
                alert("Digite el Nombre de Usuario a crear.");
                $("#v_usuario").focus();
                return false;
            }
            else if(nombre == ""){
                alert("Digite su Nombre.");
                $("#nombre").focus();
                return false;
            }
            else if(apellido == ""){
                alert("Digite su Apellido.");
                $("#apellido").focus();
                return false;
            }
            else if(email == "" || !validacion_email.test(email)){
                alert("Digite correctamente su Correo Electrónico.");
                $("#email").focus();
                return false;
            }
            else if(v_contrasena == ""){
                alert("Digite su Clave.");
                $("#v_contrasena").focus();
                return false;
            }
            else if(conf_contrasena == ""){
                alert("Digite nuevamente su Clave.");
                $("#conf_contrasena").focus();
                return false;
            }
            else if(v_contrasena != conf_contrasena){
                alert("¡La contraseñas ingresadas al sistema son distintas!");
                $("#v_contrasena").focus();
                return false;
            }
            else{
                valUser(v_codigo,v_usuario,nombre,apellido,email,rol,v_contrasena,conf_contrasena);
            }
        };
    </script>
</head>
<body>
	
	
	<?php
	$consulta = mysql_query("SELECT ID, USUARIO, NOMBRE, APELLIDO, PERFIL, DES_PERFIL, EMAIL
							   FROM USUARIOS, PERFILES
							  WHERE USUARIOS.ID = ".$id_user."
							    AND USU_PERFIL = PERFIL;
							");
	//IMPRIMIR CONSULTA
	$resultado = mysql_fetch_array($consulta);
	do{ 
		if($resultado['PERFIL'] == 1){ $PERMISO = '
            <option values="ADMINISTRADOR" selected>Administrador</option>
			<option values="CONSULTA" >Cunsulta</option>';
        }else{ 
        	$PERMISO = '
            <option values="ADMINISTRADOR" >Administrador</option>
			<option values="CONSULTA" selected>Cunsulta</option>';
        }
	?>
    <h2 class="tituloDep">Modificar Usuario <?php echo $resultado['USUARIO'] ?> </h2>
	<form id="infoUser" action="#" method="POST"> 
        <input id="v_codigo" type="hidden" name="CODIGO" value="<?php echo $resultado['ID'] ?>" >
        <input id="v_usuario" type="hidden" name="USUARIO"    type="text" placeholder="" value="<?php echo $resultado['USUARIO'] ?>" ><br />
        <label for="nombre">Nombre:</label><br />
        <input id="nombre"  name="NOMBRE"     type="text" placeholder="" value="<?php echo $resultado['NOMBRE'] ?>" ><br />
        <label for="apellido">Apellido:</label><br />
        <input id="apellido" name="APELLIDO"   type="text" placeholder="" value="<?php echo $resultado['APELLIDO'] ?>" ><br />
        <label for="email">Correo Electr&oacute;nico:</label><br />
        <input id="email" name="EMAIL"      type="text" placeholder="" value="<?php echo $resultado['EMAIL'] ?>" ><br />
        <label for="rol">Tipo de Rol:</label><br />
        <select id="rol" name="ROL">
        	<?php echo $PERMISO; ?>				
		</select>
		<br />
        <label for="v_contrasena">Contrase&ntilde;a:</label><br />
        <input id="v_contrasena"  name="CONTRASENA" type="password" placeholder="" value="" ><br />
        <label for="conf_contrasena">Confirmar Contrase&ntilde;a:</label><br />
    	<input id="conf_contrasena" name="CONF_CONTRASENA" type="password" placeholder="" value="" ><br />
        <input class="botones_creauser" type="button"  value="Guardar" id="b_creaUser" onclick="verificaDatos()" />
        <input class="botones_creauser" type="button" value="Cancelar" id="b_cancelar" onclick="cancelar()" />
    </form>
	<?php	
	}while($resultado = mysql_fetch_array($consulta));
	?>
	<?php mysql_close($conexion); ?>
</body>	
</html>
