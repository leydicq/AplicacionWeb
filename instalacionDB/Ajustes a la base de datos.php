   <?php
   $consulta = " CREATE TABLE PERFILES ( 
        PERFIL INTEGER NOT NULL UNIQUE AUTO_INCREMENT, 
        DES_PERFIL VARCHAR(50) NOT NULL
      
        ) 
    ";   

    $consulta ="ALTER TABLE PERFILES  
    ADD PRIMARY KEY (PERFIL)";
  
    $consulta =" ALTER TABLE PERFILES   
    ADD CONSTRAINT FORANEA1_ENTRE_USUARIOSYPERFILES_FK  
    FOREIGN KEY (ID_USUARIO)  
    REFERENCES USUARIOS (ID) 
    "; 
  
    
    ALTER TABLE  `usuarios` ADD CONSTRAINT `FORANEA1_ENTRE_PERFILESYUSUARIOS_FK`  
    FOREIGN KEY (`USU_PERFIL`)  
    REFERENCES `PERFILES` (`PERFIL`)

    CREATE TABLE `perfiles` ( 
        `PERFIL`  INTEGER NOT NULL UNIQUE AUTO_INCREMENT, 
        `DES_PERFIL` VARCHAR(50) NOT NULL

        ) 

INSERT INTO `bd_investigacion`.`perfiles` (`PERFIL`, `DES_PERFIL`, `ID_USUARIO`) VALUES (1, 'ADMINISTRADOR', 1)

ALTER TABLE  `guia_doc` ADD  `ESTADO` VARCHAR( 1 ) NOT NULL DEFAULT  'S'

ALTER TABLE  `usuarios` ADD  `ESTADO` VARCHAR( 1 ) NOT NULL DEFAULT  'S'

UPDATE  `bd_investigacion`.`usuarios` SET  `ESTADO` =  'S' WHERE  `usuarios`.`ID` =1;

DROP TABLE `PERFILES`;

ALTER TABLE `PERFILES`  ADD PRIMARY KEY (`PERFIL`)

ALTER TABLE  `usuarios` ADD  `USU_PERFIL` INTEGER NOT NULL

// --------------------------------------

ALTER TABLE  `usuarios` ADD  `VALIDA_CONTRASENA` varchar(50) NOT NULL      

//---------------------------------------
dejar el campo fecha de guia estu y gia doc como varchar

cambiar campo contraseña y valida_contraseña de usuarios a 100 caracteres