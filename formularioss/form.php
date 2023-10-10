<?php
$nombre = $_POST["txtnombre"];
$edad = $_POST["txtedad"];
$correo = $_POST["txtcorreo"];
$contraseña = $_POST["txtcontra"];
?>

<?php
include "head.php";
?>
<body>
    <div class="container">
        <h1>Formulario Datos</h1>
        <div class="form-row">
            <label for="txtnombre">Nombre del Alumno:</label>
            <p><?php echo $nombre; ?></p>
        </div>
        <div class="form-row">
            <label for="txtedad">Edad:</label>
            <p><?php echo $edad; ?></p>
        </div>
        <div class="form-row">
            <label for="txtcorreo">Correo electronico:</label>
            <p><?php echo $correo; ?></p>
        </div>
        <div class="form-row">
            <label for="txtcontra">Contraseña:</label>
            <p><?php echo $contraseña; ?></p>
        </div>
        <a href='index.php' class="btn">Introducir nuevos datos</a>
    </div>
</body>
</html>
<?php
include "footeer.php";
?>
