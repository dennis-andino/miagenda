<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=o, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0">
	<title>MI AGENDA</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_agenda" aria-expanded="false">
        <span class="sr-only">Desplegar/Ocultar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mi Agenda</a>
    </div>

    <!--inicia menu-->
    <div class="collapse navbar-collapse" id="menu_agenda">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eventos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nuevo Evento</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Eventos Eliminados</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</header>
	<section class="jumbotron">
		<div class="container">
			<h1>Bienvenido</h1>
		</div>
	</section>
<div>
	<table class="table table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Asunto</th>
		<th>Inicio</th>
		<th>Fin</th>
		<th>Tiempo(min)</th>
		<th>Prioridad</th>
		<th>Descripcion</th>
		<th>Acciones</th>
	</tr>

<?php 
$archivo=fopen("./eventos/proyecto1.txt","r");
$numlinea=0;
$disponibles=0;

while ($linea=fgets($archivo)) {
	//echo $linea.'<br/>';
	$aux[]= $linea;
	if (strlen($linea)==2) {
		$vacios[]=$numlinea;
		$disponibles++;
		$numlinea++;
		echo "<tr><td>"."**"."</td><td>"."**"."</td><td>"."**"."</td><td>"."**"."</td><td>"."**"."</td><td>"."**"."</td><td>"."**"."</td></tr>";
	}else{
		$numlinea++;
		$campos=explode("_",$linea);
		echo "<tr><td>".$campos[0]."</td><td>".$campos[1]."</td><td>".$campos[2]."</td><td>".$campos[3]."</td><td>".$campos[4]."</td><td>".$campos[5]."</td><td>".$campos[6]."</td></tr>";
	}
}
fclose($archivo);
 ?>
</table>
</div>
<div>

<button class="btn btn-primary" type="button">Registros  <span class="badge">
	<?php
	echo ($numlinea-$disponibles)."\t";
	//print_r($vacios);
	?>	
	</span>
</button>

<button class="btn btn-primary" type="button">Disponibles  <span class="badge">
	<?php
	echo $disponibles;
	?>	
	</span>
</button>



</div>

<footer></footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>