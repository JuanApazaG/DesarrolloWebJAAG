><?php
if(isset($_POST['cadena'])){
    $cadena = $_POST['cadena'];
    echo "Cadena ingresada: $cadena<br>";
    if(strpos($cadena, 'SCRIPT') !== false){
        echo "¡La cadena tiene la palabra 'SCRIPT'<br>";
        $cadena = str_ireplace('SCRIPT', '', $cadena);
        echo "Cadena sin 'SCRIPT': $cadena";
    } else {
        echo "La cadena no tiene la palabra 'SCRIPT'.";
    }
} else {
    echo "No se recibió ninguna cadena.";
}
?>
