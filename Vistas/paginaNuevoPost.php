<html>
	<head>
		<title>Maqueta Blog Parcial Final</title>
		<link rel="stylesheet" href="../css/hojaEstilos.css" type="text/css"/>
		<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="hojaEstilos.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<div class="contenido">
			<div id="banner">
			<div id=inicioUsusarioLogueado>
				<a href="paginaUsuarioLogueadoPosteosFecha.php">BLOG</a>
				<br>
				<a href="paginaNuevoPost.html">NUEVO POST</a>
			</div>
			<div id=fotoPerfil>
			
			</div>
			<div id=usuariologueado>
				<label>USUARIO</label>
				<br>
				<label>Perfil</label>
				<br>
       			<button type="submit" class="btn btn-default" onclick="location.href='paginaprincipal.php';">Cerrar Sesion</button> 
			</div>
			</div>
			<div class="nuevoPostCuerpo">
				<form id="formularioRegistroPost" action="formularioRegistroPost.php" method="post">
					<div> 
						<div>
			                <input type="text" class="form-control" id="idtitulopost" name="TituloPost" maxlength="20" minlength="2" placeholder="TITULO" style="border:5px solid #f6f6f6" required>
			            </div>
						<div id="cuerpoPost">
			  				<textarea type="text" class="form-control" name="CuerpoPost" maxlength="1000" minlength="2" placeholder="POST"  required></textarea>
						</div>
						<div class="form-group">
			  				<button type="submit" class="btn btn-default">POSTEAR
			  				</button>
			            	<button type="submit" class="btn btn-default" onclick="location.href='paginaUsuarioLogueado.php';">CANCELAR
			            	</button> 
			            </div>
		        </div>
				</form>
			</div>
			<div id ="meses">
				<ul id="listameses">
					<li><a href="">Enero</a></li>
					<li><a href="">Febredo</a></li>
					<li><a href="">Marzo</a></li>
					<li><a href="">Abril</a></li>
					<li><a href="">Mayo</a></li>
					<li><a href="">Junio</a></li>
					<li><a href="">Julio</a></li>
					<li><a href="">Agosto</a></li>
					<li><a href="">Setiembre</a></li>
					<li><a href="">Octubre</a></li>
					<li><a href="">Noviembre</a></li>
					<li><a href="">Diciembre</a></li>
				</ul>	
			</div>
		</div>
	</body>
</html>