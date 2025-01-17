<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro de Usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login2</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <!-- CARGA DE LOGO CDA -->
    <nav class="nav-wrapper">
        <div class="nav-wrapper indigo text darken-4">
          <img class="responsive-img" src="images/Foto Luisca2.jpg" class="materialboxed responsive-img" alt="">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med">
            <div 
            class="col s12 m12"><a href="#" class="brand-logo center">USUARIOS</a>
            </div>
            <li><a href="index2.html">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </nav>
</header>
    <main class="container">
        <div class="row">
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s3">
                <div class="card-content">
                <p></p>
                <h3 class="brand-logo center">REGISTRO DE USUARIO</h3>
                <form method="post" action="registrar_usuario.php">
                <div>
                <label for="id_usuario">Cédula:</label>
                <input type="text" id="id_usuario" name="id_usuario" required>
                </div>
                <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                </div>
                <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
                </div>
                <div>
                <label for="domicilio">Domicilio:</label>
                <input type="text" id="domicilio" name="domicilio" required>
                </div>
                <div>
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
                </div>
                <button type="submit">Registrar</button>
                </form>
                </div>
                </div>
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s1"></div>
        </div>
    </main>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $domicilio = $_POST['domicilio'];
    $telefono = $_POST['telefono'];

    if (empty($id_usuario) || empty($nombre) || empty($apellido) || empty($domicilio) || empty($telefono)) {
        echo "Todos los campos son requeridos.";
    } else {
        $sql = "INSERT INTO usuario (id_usuario, nombre, apellido, domicilio, telefono) VALUES (?, ?, ?, ?, ?)";
        
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssss", $id_usuario, $nombre, $apellido, $domicilio, $telefono);

            if ($stmt->execute()) {
                echo "Registro exitoso";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error en la preparación de la declaración: " . $conn->error;
        }
    }
    $conn->close();
}
?>
<form method="get" action="">
<button type="submit" name="clear" value="true">Borrar Pantalla</button>
<a href="index_usuario.php" class="btn">Volver a la página principal</a>
</form>
</header> 
<!-- FOOTER O PIE DE PAGINA -->
<footer class="page-footer indigo darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s6">
                <h3 class="white-text">Mapa de Navegación</h3>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="agenda2.html">Agenda de Citas</a></li>
                    <li><a class="grey-text text-lighten-3" href="llamadas.html">Llamadas</a></li>
                    <li><a class="grey-text text-lighten-3" href="usuario.html">Clientes</a></li>
                    <li><a class="grey-text text-lighten-3" href="Vehiculos.html">Vehículos</a></li>
                    <li><a class="grey-text text-lighten-3" href="index2.html">Inicio</a></li>
                </ul>
            </div>
            <div class="col l4 offset-l2 s12">
              <h3 class="white-text">Redes Sociales</h3>
              <ul class="icons">
                  <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
                  <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
              </ul>
          </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2024 Todos los derechos reservados, Compañía CDA
        </div>
    </div>
</footer>

<!-- IMPORTACION DE MATERIALIZE JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    <!-- Compiled and minified JavaScript -->
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" 
</script>
<script src="forind.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<!-- Compiled and minified CSS 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->
</body>
</html>
