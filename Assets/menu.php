<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel ="icon" type="image/ico" href="../logo/sarco.ico"/>
	<title>Menu</title>
</head>
<body>
    <header>
<style type="text/css">
	

/* Add responsive styles here */
@media screen and (max-width: 768px) {
  .nav > li {
    display: block;
    width: 100%;
  }
  .nav li ul {
    position: relative;
    width: 100%;
	
  }
  .nav li ul li {
    padding: 5px;
  }
  .nav li ul li ul {
    left: 0;
    top: 0;
    right: auto;
  }
  #header {
    position: relative;
    width: 100%;
	
  }
   
    
  
}

/* Original styles */
.Estilo1 {
	font-size: 26px;
	font-family: "Lucida Calligraphy";
	font-weight: bold;
	color: #0060BF;

}
.Estilo2{
	font-family: "Bookman Old Style"
}
.Estilo3 {
	font-family: "Lucida Calligraphy";
	font-size: 16px;
	color: #0060BF;
	font-weight: bold;
}
.Estilo4 {
	color: #000000;
	font-size: 12px;
}
.Estilo5 {
	font-family: "Bookman Old Style";
	font-size: 18px;
	font-weight: bold;
}
.Estilo8 {	font-size: 16px;
	font-weight: bold;
}
.Estilo9 {font-family: "Bookman Old Style"; font-size: 10px; font-weight: bold; color: #FF0000; }
a:link {
	color: #0060BF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0060BF;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}




#header {
	background: #16A085;
	width:8%;
	font-family:Style Bookman Old ;
	font-weight:bold;
	position: fixed;
	top: 1;
	left: 1;
	z-index:0;

}

 .logo{
	 


}


ul, ol {
	list-style:none;
}

.nav > li {
	float:left;
}

.nav li a {
	background-color: #45B39D;
	color:#000000;
	text-decoration:none;
	padding:9px 10px;
	display:block;
	border:0px solid #0060BF;
	margin:1px;

}

.nav li .flecha{
	font-size: 7px;
	padding-left: 4px;
	display: none;
}

.nav li a:not(:last-child) 

.flecha {
	display: inline;
}

.nav li a:hover {
	background: #16A085;
	border :0 px solid;
}

.nav li ul {
	display:none;
	position:absolute;
	min-width:150px;
	padding:5px 10px;
	font-size:10px;
	border-radius:5px;
	padding:10px;
}

.nav li:hover > ul {
	display:block;
}

.nav li ul li {
	position:relative;
	padding:3px 10px;
}

.nav li ul li ul {
	right:-140px;
	top:0px;
}




</style>
</head>

<body>
<table width="1500px" border="0" align="left">
	 <tr class="Estilo3">
      <ul class="nav">
	  
          <li><a href="administrador.php">Inicio</a></li>
		  

         
          </li>
          <li><a href="">Estudiantes</a>

              <ul>
				  

                <li><a href="consultar_es.php">consultar</a></li>
				<li><a href=" registrar_es.php">registrar</a></li>
				 <li><a href="modificar_es.php">modificar</a></li>
				 <li><a href="eliminar_es.php">Eliminar</a></li>
				 <li><a href="reportes-es.php">Reportes</a></li>
				 </ul>

				 </li>
          <li><a href="">Representantes</a>
              <ul>

                <li><a href="consultar_repre.php">consultar</a></li>
				<li><a href=" registrar_repre.php">registrar</a></li>
				 <li><a href="modificar_repre.php">modificar</a></li>
				 <li><a href="eliminar_repre.php">Eliminar</a></li>
				 <li><a href="reportes-repre.php">Reportes</a></li>
				 </ul>

                </li>
               <li><a href="">Salas</a>
			   <ul>
                      <li><a href="registrar_sal.php">Registrar</a></li>
                      <li><a href="consultar_sal.php">Consultar</a></li>
					  <li><a href="modificar_sal.php">Modificar</a></li>
					  <li><a href="eliminar_sal.php">Eliminar</a></li>
					  <li><a href="reportes_sal.php">Reportes</a></li>
                    </ul>

					</li>
					 <li><a href="">Momentos</a>
					 <ul>

                <li><a href="reportes_momen.php">Reportes</a></li>
				<li><a href="registrar_momen.php">Registrar</a></li>
				<li><a href="consultar_momen.php">Consultar</a></li>
				<li><a href="modificar_momen.php">Modificar</a></li>
				<li><a href="eliminar_momen.php">Eliminar</a></li>
                </ul>
            
            
          </li>
          <li><a href="">Maestros</a>
		  <ul>

			         <li><a href="registrar_maes.php">Registrar</a></li>
                      <li><a href="/consultar_maes.php">Consultar</a></li>
					  <li><a href="modificar_maes.php">Modificar</a></li>
					  <li><a href="eliminar_maes.php">Eliminar</a></li>
					  <li><a href="reportes_maes.php">Reportes</a></li>
					  </ul>

          </li>
          <li><a href="">Observasiones</a>
		  <ul>

                <li><a href="reportes_ob.php">Reportes</a></li>
				<li><a href="registrar_ob.php">Registrar</a></li>
				<li><a href="consultar_ob.php">Consultar</a></li>
				<li><a href="modificar_ob.php">Modificar</a></li>
				<li><a href="eliminar_ob.php">Eliminar</a></li>
				</ul>

          </li>
          <li><a href="">periodos</a>
		  <ul>

                <li><a href="reportes_perio.php">Reportes</a></li>
				<li><a href="registrar_perio.php">Registrar</a></li>
				<li><a href="consultar-perio.php">Consultar</a></li>
				<li><a href="reportes_perio.php">Modificar</a></li>
				<li><a href="eliminar_perio.php">Eliminar</a></li>
				</ul>

          </li>
          <li><a href="">Respaldo</a>
		  <ul>

			  <li><a href="registrar_re.php">Registrar</a></li>
			  <li><a href="consultar_re.php">consultar</a></li>
			  <li><a href="modificar_re.php">Modificar</a></li>
			  <li><a href="eliminar_re.php">Eliminar</a></li>
			  <li><a href="respaldo_re.php">Reportes</a></li>
              </ul>

          </li>
          <li><a href="">Reportes</a>
		  <ul>

                <li><a href="registrar_repo.php">alumnos</a></li>
                <li><a href="consultar_repo.php">Salas</a></li>
                <li><a href="modificar_repo.php">Maestros</a></li>
             <li><a href="eliminar_repo.php">representantes</a></li>
            	
				</ul>

          </li>
          <li><a href="">Seguridad</a>
		  <ul>

              <li><a href="../Seguridad/BBDD/exportar.php">Respaldar</a></li>
                      <li><a href="../Seguridad/BBDD/importar.php">Restaurar</a></li>
                      <li><a href="../Seguridad/BBDD/backupBBDD.php">Extraer</a></li>
					   <li><a href="registro_usuario.html">Registrar</a></li>
                      <li><a href="listado_usuarios.php">Listado</a></li>
					  </ul>
					
					</li>
					
				</tr>
				
</table>
</body>

</html>

