<html>
<head>
</head>
<body>
    <h1>HOLA</h1>
    <?php
        $archivo = "contador.dat";
        if(file_exists($archivo) && filesize($archivo) > 0){
            $abrir = fopen($archivo, "r");
            $cont = fread($abrir, filesize($archivo));
            fclose($abrir);
            }
        else{
            $cont = 0;
        }
        $cont = $cont + 1;
        $abrir = fopen($archivo, "w");
        $guardar = fwrite($abrir, $cont);
        fclose($abrir);
        echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";
        // $message = "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";
?></body>
</html>