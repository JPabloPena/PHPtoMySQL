<?php
include("con_db.php");

//Verificar conexión con la base de datos
/*
if($conex){
    echo "Conectado con la base de datos!";
}
*/
if(isset($_POST['register'])){
    if( strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 ){ //Para saber si está vacío
        $name = trim($_POST['name']);
        $email = trim($_POST['email']); //trim() quita los espacios del inicio y del final
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name', '$email', '$fechareg')";
        $resultado = mysqli_query($conex, $consulta);

        if($resultado){
            ?>
            <h3 class="ok">Te has registrado correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">No te has podido registrar...</h3>
            <?php
        }
    }else{
        ?>
            <h3 class="bad">Por favor, complete los campos!</h3>
            <?php
    }
}

?>