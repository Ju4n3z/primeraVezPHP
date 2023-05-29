<?php

    /**
     ** Acá se incluye el código PHP que se desea ejecutar
     ** El código PHP se ejecuta en el servidor
     ** La estructura de las carpetas es la siguiente: carpeta css, carpeta imagenes, carpeta js, carpeta scripts, carpeta uploads, archivo index.php
     ** La estructura basica de PHP es la siguiente: <?php ?>, todo lo que se encuentre dentro de estas etiquetas se ejecuta en el servidor
     */

    /**
     ** Funciones de salida
     */

    /**
     ** echo: imprime una o mas cadenas de texto
     */
    
    echo "Texto a imprimir";

    /**
     ** printf: imprime una cadena de texto
     ** %s: indica la posición en donde se va a imprimir una cadena de texto
     */

    $texto = "Mundo";
    printf("Hola %s", $texto);

    /**
     ** sprintf: retorna una cadena de texto formateada
     */

    $texto = "Mundo";
    $mensaje = sprintf("Hola %s", $texto);
    echo $mensaje;
    
?>