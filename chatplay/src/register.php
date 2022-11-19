<?php
include("db/connect.php");

if (isset($_POST['register'])) {
    # code...
    if (strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 ) {
        # code...
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta  = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        /*if ($resultado) {
            # code...
            ?>
            
            <?php
        }*/

    }
}


?>