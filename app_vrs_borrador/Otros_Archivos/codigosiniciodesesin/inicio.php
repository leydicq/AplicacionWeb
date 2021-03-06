<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
  <title>SAMYV</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

  <script type="text/javascript" src="js/pagina/funciones1.js"></script>  
  <script type="text/javascript" src="js/slider/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/slider/jquery.nivo.slider.js"></script>

  <link rel="stylesheet" type="text/css" href="css/style2.css" />
  <link rel="shortcut icon" href="favicon.ico">
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">

  $(document).ready(function(){
      $("#myController").jFlow({
      controller: ".jFlowControl", // must be class, use . sign
      slideWrapper : "#jFlowSlider", // must be id, use # sign
      slides: "#mySlides",  // the div where all your sliding divs are nested in
      selectedWrapper: "jFlowSelected",  // just pure text, no sign      
      effect: "flow", //this is the slide effect (rewind or flow)
      width: "940px",  // this is the width for the content-slider
      height: "300px",  // this is the height for the content-slider
      duration: 400,  // time in milliseconds to transition one slide     
      pause: 5000, //time between transitions
      prev: ".jFlowPrev", // must be class, use . sign
      next: ".jFlowNext", // must be class, use . sign
      auto: true  
    });
});
</script>
</head>
<body onload="javascript:cargar('1')">
  <div id="cuerpo">
  <div id="main">
    <header>
	<div id="banner">
			<object width="930" height="137" id="bannernow" align="middle">
				<param name="movie" value="images/banner/bannernow.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="images/banner/bannernow.swf" width="930" height="137">
					<param name="movie" value="images/banner/bannernow.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
      

      <!--<div id="banner">
        <center> <img src="images/banner.png"> </center>
      </div>-->
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a id="1" href="javascript:cargar('1')" onclick="cargar(1);">Inicio</a></li>
	  <li><a id="2" href="javascript:cargar('2')" onclick="cargar(2);">SAMYV</a></li>
	  <li><a id="3" href="javascript:cargar('3')" onclick="cargar(3);">Objetivos</a></li>
          <li><a id="4" href="javascript:cargar('4')" onclick="cargar(4);">Resultados</a></li>
	  <li><a href="#">Responsables</a>
            <ul>
              <li><a id="5" href="javascript:cargar('5')" onclick="cargar(5);">Autores</a></li>	      
            </ul>
          </li>
	  <li><a id="6" href="javascript:cargar('6')" onclick="cargar(6);">Documentacion</a></li>
	  <li><a id="10" href="php/contenido/iniciarSesion.html">Iniciar Sesi&oacute;n</a></li>
        </ul>
      </nav>
    </header>    <div id="site_content_inicio1">
     <div id="sidebar_container_inicio1">
        <!--<h1>SAMYV</h1>-->
        <div id="texto">
	  <br><br><br>
          <IMG SRC="images/pagina2.png" WIDTH=178 HEIGHT=200>
        </div>
    </div>
<!-- contenido -->         
        <!--<div id="content1"> 
            <div id="content2">
                <div id="ppal">
                    <div id="contenido" style="height: auto;"></div>	 
                </div>
            </div>	
        </div>-->
<div id="content_inicio1" style="height: auto;"></div>	 
      <!--<div id="content">
        <h2><b>SAMYV: </b></h2>
        <h2>SAMYV<a href="#">SAMYV</a></h2>   
      <center>
        <img src="images/s3.jpg">
      </center>

      </div>-->
    </div>
    <footer>
      <div class="footer"><a href="http://www.unillanos.edu.co" target="unillanos"><img src="images/logo.unillanos.png"></a>
        <a href="http://gitecx.unillanos.edu.co" target="gitecx"><img id="gitecx" src="images/gitecx.jpg"></a>
      </div>
       <p>Copyright &copy; Sistema Automático de Monitorización y Vigilancia de Salas de Computo SAMYV</p>
      
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</div>
</body>
</html>
