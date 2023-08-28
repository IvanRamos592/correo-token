<?php 
    include "./conexion.php";
    $email =$_POST['email']?? null;
    $p1 =$_POST['p1']?? null;
    $p2 =$_POST['p2']?? null;
    if($p1 == $p2){
        $p1=sha1($p1);
        $conexion->query("update usuarios set password='$p1' where email='$email' ")or die($conexion->error);
        echo "todo bien";
        
    }else{
        echo "no coinciden";
    }
?>