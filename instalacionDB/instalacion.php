<?php
	//
	//CONEXION A LA BASE DE DATOS
	//
	$conexion = mysql_connect('localhost','admin','developer1');
	if(!$conexion){
		die ('Ha sido imposible establecer Conexion a la BD'.mysql_error());
	}
	//
	//CREAR BASE DE DATOS
	//
	mysql_query("CREATE DATABASE IF NOT EXISTS bd_investigacion DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci",$conexion);
	//
	//SELECCIONAR BASE DE DATOS
	//
	mysql_select_db('bd_investigacion',$conexion);
	//
	//CREAR TABLA guia_doc 
	//
	$consulta = "CREATE TABLE IF NOT EXISTS guia_doc (
	  CODIGO int(11) NOT NULL AUTO_INCREMENT,
	  ID_USUARIO int(11) NOT NULL,
	  NOM_INST varchar(200) NOT NULL,
	  NOM_DIRECTIVO varchar(200) NOT NULL,
	  CARGO varchar(100) DEFAULT NULL,
	  DIRECCION varchar(100) DEFAULT NULL,
	  TEL varchar(100) DEFAULT NULL,
	  EMAIL varchar(200) DEFAULT NULL,
	  PREG_1 text,
	  PREG_2 text,
	  PREG_3 text,
	  PREG_4 text,
	  PREG_5 text,
	  PREG_6 text,
	  PREG_7 text,
	  utc int(11) DEFAULT NULL,
	  FECHA varchar(20) NOT NULL,
	  MUNICIPIO varchar(50) NOT NULL,
	  ESTADO varchar(1) DEFAULT 'A',
	  PRIMARY KEY (CODIGO),
	  UNIQUE KEY CODIGO (CODIGO),
	  KEY FORANEA1_ENTRE_GUIA_DOCYUSUARIOS_FK (ID_USUARIO)
	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0";
	//
	//
	$resultado  = mysql_query($consulta);
	if(!$resultado){
		die ('Error = '.mysql_error());
	}
	//
	//CREAR TABLA guia_est 
	//
	$consulta = "CREATE TABLE IF NOT EXISTS guia_est (
	  CODIGO int(11) NOT NULL AUTO_INCREMENT,
	  ID_USUARIO int(11) NOT NULL,
	  NOM_INST varchar(200) NOT NULL,
	  CARACTER varchar(50) DEFAULT NULL,
	  DIRECCION varchar(100) DEFAULT NULL,
	  TEL varchar(100) DEFAULT NULL,
	  EMAIL varchar(200) DEFAULT NULL,
	  REP_LEGAL varchar(200) DEFAULT NULL,
	  PREG_1 text,
	  PREG_2 text,
	  PREG_3 text,
	  PREG_4 text,
	  PREG_5 text,
	  PREG_6 text,
	  PREG_7 text,
	  PREG_8 text,
	  PREG_9 text,
	  PREG_10 text,
	  PREG_11 varchar(1200) DEFAULT NULL,
	  PREG_12 text,
	  utc int(11) DEFAULT NULL,
	  FECHA varchar(20) NOT NULL,
	  MUNICIPIO varchar(50) NOT NULL,
	  ESTADO varchar(1) DEFAULT 'A',
	  PRIMARY KEY (CODIGO),
	  UNIQUE KEY CODIGO (CODIGO),
	  KEY FORANEA1_ENTRE_GUIA_ESTYUSUARIOS_FK (ID_USUARIO)
	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0";
	//
	//
	$resultado  = mysql_query($consulta);
	if(!$resultado){
		die ('Error = '.mysql_error());
	}
	//
	//CREAR TABLA perfiles 
	//
	$consulta = "CREATE TABLE IF NOT EXISTS perfiles (
	  PERFIL int(11) NOT NULL AUTO_INCREMENT,
	  DES_PERFIL varchar(50) NOT NULL,
	  PRIMARY KEY (PERFIL),
	  UNIQUE KEY PERFIL (PERFIL)
	) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0";
	//
	//
	$resultado  = mysql_query($consulta);
	if(!$resultado){
		die ('Error = '.mysql_error());
	}
	//
	$consulta = "INSERT INTO perfiles (PERFIL, DES_PERFIL) 
	VALUES (1, 'ADMINISTRADOR'), (2, 'CONSULTA')";
	//
	//
	$resultado  = mysql_query($consulta);
	if(!$resultado){
		die ('Error = '.mysql_error());
	}
	//
	//CREAR TABLA usuarios 
	//
	$consulta = "CREATE TABLE IF NOT EXISTS usuarios (
	  ID int(11) NOT NULL AUTO_INCREMENT,
	  NOMBRE varchar(50) NOT NULL,
	  APELLIDO varchar(50) NOT NULL,
	  USUARIO varchar(50) NOT NULL,
	  CONTRASENA varchar(100) NOT NULL,
	  EMAIL varchar(200) DEFAULT NULL,
	  ESTADO varchar(1) NOT NULL DEFAULT 'S',
	  USU_PERFIL int(11) NOT NULL,
	  VALIDA_CONTRASENA varchar(100) NOT NULL,
	  PRIMARY KEY (ID),
	  UNIQUE KEY ID (ID),
	  KEY FORANEA1_ENTRE_PERFILESYUSUARIOS_FK (USU_PERFIL)
	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0";
	//
	//
	$resultado  = mysql_query($consulta);
	if(!$resultado){
		die ('Error = '.mysql_error());
	}
	//
	//
	$consulta = "INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, CONTRASENA, EMAIL, ESTADO, USU_PERFIL, VALIDA_CONTRASENA) 
	VALUES ('DESARROLLADOR1', 'DESARROLLADOR1', 'DESARROLLADOR1', '202cb962ac59075b964b07152d234b70', 'LEYDI.CAMARGO@GMAIL.COM', 'S', 1, '202cb962ac59075b964b07152d234b70')";
	//
	//
	$resultado  = mysql_query($consulta);
	//
	if(!$resultado){
		die ('Error = '.mysql_error());
	}
	//
echo "Proceso Terminado con Exito!";
?>