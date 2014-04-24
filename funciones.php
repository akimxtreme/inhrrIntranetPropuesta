<?php
function html_inicio($titulo){
	echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	
	echo'<html xmlns="http://www.w3.org/1999/xhtml">';
	
	echo'<head>';
	
	echo'<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	
	echo'<title>'. $titulo .'</title>';
	
	echo'
		<!-- CSS -->
		<link rel="stylesheet" href="css/normalize.css" /> 
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/global.css" />
		<!-- Javascript -->
  		<script src="js/vendor/custom.modernizr.js"></script>
		';
	
	echo'</head>';
	echo'<body>';
}

function html_cierre(){
	echo"<script>
  			document.write('<script src=' +
  			('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') + '.js><\/script>')
  			</script>";
	
	echo'<script src="js/foundation.min.js"></script>';
    echo '
	<!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  ';
  
  echo'<script>
    	$(document).foundation();
  	   </script>
	  ';
  echo'</body>';
  
  echo'</html>';
}

function banner(){
	echo'<!-- Banner -->
		<div class="row">
			<img  src="img/banner.png" style="width:1000px;"/> 
			<!--<div class="large-12 columns" id="banner"><h1 style=" text-shadow: 0px 0px 3px #FFF; text-align:center;">Propuesta Intranet - Domingo Ilarreta</h1></div>-->
		</div>';
	}
function pie(){
	echo'<!-- Pie -->
		<div class="row">
			<div class="large-12 columns" id="pie">
			<p style=" font-size:11px; color:#FFFFFF; text-align:center;"><br>Ciudad Universitaria UCV, Los Chaguaramos, Caracas - República Bolivariana de Venezuela. Cod. 1041.<br>
			Teléfonos (0058-0212) 219-1654 / 219-1622 RIF G-20000101-1</p>
		</div>
		</div>';
	}

function menu_horizontal(){
	echo '<!-- Menú Horizontal -->
<div class="row">
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="#">Principal</a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
	  <!-- Información Institucional -->
      <li class="divider blue"></li>
      <li class="has-dropdown" ><a href="#">Información Institucional</a>

        <ul class="dropdown blue">
          <li><label>Nuestro Instituto</label></li>
          <li class="has-dropdown"><a href="#">Reseña Histórica</a></li>
          <li class="has-dropdown"><a href="#">Misión</a></li>
          <li class="has-dropdown"><a href="#">Visión</a></li>
          <li class="has-dropdown"><a href="#">Valores</a></li>
          
          <li class="has-dropdown"><a href="#">Políticas</a></li>
          <li class="has-dropdown"><a href="#">Organigrama</a></li>
          <li class="has-dropdown"><a href="#">Miembros del Consejo</a></li>
          <li class="has-dropdown"><a href="#">Tren Ejecutivo</a></li>
           <li class="divider"></li>
           <li class=""><a href="#"></a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="divider"></li>
      <!-- Control de Espacios -->
      
      <li><a href="#">Control de Espacios</a></li>
      <li class="divider"></li>
      <li class="divider"></li>
      <!-- Gestión de Calidad -->
      
      <li><a href="#">Gestión de Calidad</a></li>
      <li class="divider"></li>
      <li class="divider"></li>
      <!-- Adquisición de Vehículos -->
      
      <li><a href="#">Adquisición de Vehículos</a></li>
      <li class="divider"></li>
      <li class="divider"></li>
      <!-- Gestión Informática -->
      
      <li><a href="#">Gestión Informática</a></li>
	  
      
      	
      
    </ul>
  </section>
</nav>
</div>';
	}
function menu_vertical(){
	echo'
<div class="">
    <div class="section-container vertical-nav" data-section>
      <section class="section">
        <p class="title"><a href="#">Correo Institucional</a></p>
      </section>
      <section class="section">
        <p class="title"><a href="#">Recibos de Pago</a></p>
      </section>
      <section class="section">
        <p class="title"><a href="#">Registro de Información<br /> de Cargos</a></p>
      </section>
      <section class="section">
        <p class="title"><a href="#">Directorio Telefónico</a></p>
      </section>
      <section class="section">
        <p class="title"><a href="#">Gestión de Documentos</a></p>
      </section>
      <section class="section">
        <p class="title"><a href="#">Préstamo de Adquisición<br />de Vehículos</a></p>
      </section>
      <section class="section">
        <p class="title"><a href="#">Asistencia Técnica</a></p>
      </section>
      <section class="section">
        <p class="title"><a href="#">Biblioteca &raquo;</a></p>
        <div class="content">
          <ul class="side-nav">
          <li><label>Biblioteca</label></li>
          <li class="divider"></li>
            <li><a href="#">Dpto. de Información y Divulgación Científica</a></li>
            <li class="divider"></li>
            <li><a href="#">Colección</a></li>
            <li class="divider"></li>
            <li><a href="#">Servicios</a></li>
            <li class="divider"></li>
            <li><a href="#">Revistas Suscritas</a></li>
            <li class="divider"></li>
            <li><a href="#">Publicaciones Institucionales</a></li>
            <li class="divider"></li>
            <li><a href="#">Nuevas Adquisiciones</a></li>
          </ul>
        </div>
      </section>
      <section class="section">
        <p class="title"><a href="#">Información de la Aseguradora</a></p>
      </section>
    </div>
  </div>
  		';
}

function slide(){
echo'
<!-- Basic orbit markup -->
        <div class="large-6 columns" id="slide">
        <ul data-orbit>
          <li>
            <img src="img/img1.png"/>
            <div class="orbit-caption"><h3><small>Lorem Ipsum</small></h3><p>Lorem Ipsum lorem lorem ipsum ipsum lorem</p></div>
          </li>
          <li>
            <img src="img/img2.png" />
            <div class="orbit-caption"><h3><small>Lorem Ipsum</small></h3><p>Lorem Ipsum lorem lorem ipsum ipsum lorem</p></div>
          </li>
          <li>
            <img src="img/img3.png" />
            <div class="orbit-caption"><h3><small>Lorem Ipsum</small></h3><p>Lorem Ipsum lorem lorem ipsum ipsum lorem</p></div>
          </li>
        </ul>
        
        </div>

';	
	}

function noticia_externa($titulo){
	   echo '<span class="label large-3 columns">'. $titulo .'</span>';
	   echo '<div class="large-3 regular panel columns" id="noticia_externa">';
	   		//////////////////////////////////////////////////////////////////
			for($i=0;$i<=5;$i++){
			echo '<div class="radius panel">';
			//Consulta con la Base de Datos 
			// Ejemplo de Noticia (Borrar Ejemplo luego de tener las noticia en la base de datos)
				echo '<h6 class="subheader">';
					echo '<a href="#" target="_blank" title="">Mensaje en el Día Internacional de la Mujer &raquo;</a>';
				echo '</h6>';
			echo '</div>' ;
			}
			//////////////////////////////////////////////////////////////////
	   echo '</div>';
	   }

function circulares($titulo) {
	echo '<span class="label radius columns">'. $titulo .'</span>';
	echo '<div class="regular panel" style="height:200px; overflow:scroll;">';
		// Ejemplo de Circular
		for($i=0;$i<=5;$i++){
			echo'<a href="archivos/prueba.pdf" target="_blank" class="large-12 tiny button split radius" style="text-align:left;">Politicas de la Calidad del INHRR<span></span></a>';
		}
	echo '</div>';
	}


function noticia_principal($titulo){
	echo '<span class="label success large-9 columns">'. $titulo .'</span>  ';
	echo '<div class="large-9 regular panel columns" style="height:410px; overflow:scroll; ">';
	echo '<div class="callout panel">';
		// Noticia de Ejemplo
		echo '<h6 class="subheader" style=" text-align:justify;">Fortalecimiento de los Laboratorios de Alimentos del Instituto Nacional de Higiene "Rafael Rangel" - (INHRR)</h6>';
		echo '<div class="small-4 columns">';
		echo '<img class="th " src="img/principal.png" style="width:200px; height:200px;">';
		echo '<blockquote style=" background:#FFC;"><small>Laboratorios de Alimentos<cite>Caracas, 11 de Marzo del 2013</cite></small></blockquote>';
		echo '</div> ';
		echo '<p style="font-size:11px; text-align:justify;">La Ciudadana Ministra del Poder Popular para la Salud, Dra. Eugenia Sader Castellano aprobó el proyecto del Instituto Nacional de Higiene “Rafael Rangel” relacionado con el Fortalecimiento del Laboratorio Nacional de Control de Alimentos, otorgando financiamiento para la adquisición de equipos de alta tecnología, tales como: Termociclador Rotor-gene para pruebas microbiológicas, HPLC masa-masa para ensayos de residuos veterinarios, residuos de plaguicidas, melanina, entre otros; 2 Sistemas de Cromatografía Liquidas para determinar micotoxinas y aminoácidos, un sistema gamma espectrométrico con detector de germanio hiperpuro para determinar isótopos radioactivos en alimentos, Lector de placas de absorbancia, luminiscencia, fluorescencia y fluorescencia polarizada para de terminación de alérgenos, micotoxinas y algunas vitaminas. </p>';
		echo '<p style="font-size:11px; text-align:justify;">Por otra parte; el Instituto Nacional de Higiene “Rafael Rangel” adquirió con ingresos propios un Espectrómetro de Emisión Óptica por Plasma Acoplado Inductivamente (ICP) que servirá para ampliar la respuesta en el área de contaminantes químicos y los minerales investigados en los programas de enriquecimiento de alimentos. Con éste proyecto, se garantiza la inocuidad de los alimentos consumidos por la población venezolana, en virtud del impacto en la salud pública de enfermedades vinculadas a estos compuestos.</p>';
		echo '<a href="archivos/prueba.pdf" target="_blank" class="button secondary radius small">Descargar Archivo Adjunto &raquo;</a>';
		echo '<blockquote style=" color:#FFFFFF; font-size:11px;">Información del Instituto Nacional de Higiene "Rafael Rangel"<cite style="color:#CCCCCC;">Caracas, 11 de Marzo del 2013</cite></blockquote>';
	echo '</div>';
	echo '</div>';
	}

function acontecimientos($titulo){
		echo '<span class="label success columns">'. $titulo .'</span>  ';
		echo '<div class="regular panel" style=" overflow:scroll; height:400px;">';
		echo '<table>';
		echo '<thead>';
		echo '<tr>';
			echo'<th >Día</th>';
			echo'<th >Título</th>';
 		echo '</tr>';     
    	echo '</thead>';
		echo '<tbody>';
		for($i=date('d');$i>=1;$i--){
		echo '<tr>';
			echo '<td>'. $i .'</td>';
			echo ' <td><a href="#">Día Internacional de la Mujer &raquo;</a></td>';
		echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
			
		echo '</div>';
	
		}
function fecha(){
		$meses = array(
					'Enero','Febrero',
					'Marzo','Abril',
					'Mayo','Junio',
					'Julio','Agosto',
					'Septiembre','Octubre',
					'Noviembre','Diciembre'				
						);
						
					$mes = date('n') - 1;
					$dia = date('d');
					$anio = date('Y');
		$fecha = $dia . " " . "de" . " " . $meses[date($mes)] . " " . "del" . " " . $anio;
		
		echo '<span class=" large-3 columns radius secondary label">' . $fecha . '</span>';
		
		}

function noticias_secundarias($titulo){
	echo '<span class="label success large-9 columns">'. $titulo .'</span>';
	echo '<div class="large-9 callout panel columns" style="height:400px; overflow:scroll; ">';
	 $contenido = 'Reconocimiento a la labor de la Coordinación Farmacéutica del Centro Nacional de Vigilancia Farmacológica (CENAVIF) de la Gerencia de Registro y Control, en virtud del reconocimiento efectuado por la Agencia Española del Medicamento en relación a las Alertas de Calidad e Ilícitos de las Autoridades Regulatorias Iberoamericanas, catalogando la información publicada por nuestro Instituto como "Excelente".';
	for($i=0;$i<=6;$i++){
		  echo '
		  <div class="regular panel">
        	<h4 class="subheader"><small>Reconocimiento de Publicación de Alertas de Calidad e Ilícitos de Medicamentos</small></h4>
			<p class="large-10 columns" style=" text-align:justify; font-size:11px; color:#666;">'. $contenido .'</p>
			
			<a class="th radius" href="#">
			<img src="img/secundaria.png" style="width:100px; height:100px;">
			</a>
			<a href="archivos/prueba.pdf" target="_blank" class="button secondary radius small">Descargar Archivo Adjunto &raquo;</a>
          </div>
		  	   ';
		} 
	}
?>
