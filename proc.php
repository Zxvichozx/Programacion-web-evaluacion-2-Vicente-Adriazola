<?php
    require_once  "conexion_.php";
    require_once 'phpqrcode/qrlib.php';

    $nombre_completo = $_POST["nombre_completo"];
    $RUT = $_POST["RUT"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $imagen =$_FILES["imagen"];
    
    function registrar_persona($conn, $nombre_completo, $RUT, $telefono, $imagen, $email){
        $sql = "
        INSERT INTO asistentes (nombre, RUT, Telefono, imagen, Email)
        VALUES ('$nombre_completo', '$RUT', $telefono, '".$imagen['name']."', '$email' )
        ";
    
        $resultado = mysqli_query($conn, $sql);
    }

    function subir_archivo($archivo){
        $archivo_nombre = $archivo["name"];
        $directorio = "imagenes/";
        $archivo_destino = $directorio . basename($archivo_nombre);
    
        if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)){
            echo "El archivo $archivo_nombre ha sido subido correctamente";
            return $archivo_destino;
        }else{
            echo "Ocurrió un error al subir el archivo";
            return "";
        }
    
    }
    function crear_qr($conn){
        $sql = "SELECT id FROM asistentes";
        $resultado = mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($resultado);
        $id = $row["id"];
        $url = "http://localhost/ver_asistente.php?id=$id";
        $filename= "qr/qr_$id.png";
        QRcode::png($url,$filename);
        $actualizar = "UPDATE asistentes SET qr_path = '$filename' WHERE id = $id";
        mysqli_query($conn, $actualizar);
    }
    
    
    subir_archivo($archivo);
    registrar_persona($conn,$nombre_completo,$RUT,$telefono,$imagen,$email);
    
    crear_qr($conn);
    mysqli_close($conexion);
?>