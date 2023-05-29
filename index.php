<?php

    /**
     ** Acá se incluye el código PHP que se desea ejecutar
     ** El código PHP se ejecuta en el servidor
     ** La estructura de las carpetas es la siguiente: carpeta css, carpeta imagenes, carpeta js, carpeta scripts, carpeta uploads, archivo index.php
     ** La estructura basica de PHP es la siguiente: <?php ?>, todo lo que se encuentre dentro de estas etiquetas se ejecuta en el servidor
     */

    /**
     *TODO Funciones de salida
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

    /**
     *TODO Variables y constantes
     */
    
    /**
     ** Las variables se declaran con el simbolo $ seguido del nombre de la variable
     ** Las variables pueden ser de tipo numerico, texto o booleano (true o false)
     */

    /**
     ** var_dump: imprime el tipo de dato y contenido de una variable
     */

    $edad = 25;
    $nombre = "Juan";
    $es_valido = true;

    echo var_dump($nombre);
    
    /**
     ** Las constantes se declaran con la función define
     ** El primer parametro es el nombre de la constante
     ** El segundo parametro es el valor de la constante
     ** El tercer parametro es opcional, si se coloca en true, la constante se declarará en mayusculas
     */
    
    define("PI", 3.1416);
    define("SALUDO", "Hola Mundo");
    define("ES_VALIDO", true);

    /**
     *TODO Tipos de datos:
     ** Integer (int): numeros enteros
     ** Float (float): numeros decimales
     ** String (string): cadenas de texto
     ** Boolean (bool): valores booleanos (true o false)
     ** Array (array): arreglos, se utiliza para almacenar varios valores en una colección de datos
     ** Object (object): objetos, se utiliza para almacenar instancias de clases
     ** Resource (resource): recursos, se utiliza para almacenar referencias como conexiones a bases de datos
     ** Null (null): valor nulo
     */
    
    $logueado = true;
    var_dump($logueado);

    $numero = 200;
    var_dump($numero);

    $float = 200.15;
    var_dump($float);

    $nombre = "Juan";
    var_dump($nombre);

    $array = [];
    var_dump($array);

    /**
     *TODO Números y operadores
     */
    
    /**
     *TODO Operadores aritmeticos:
     ** + = suma
     ** - = resta
     ** * = multiplicación
     ** / = división
     ** % = modulo
     ** ** = potencia 
     */

    /**
     *TODO Operadores de asignación:
     ** = asignación
     */

    /**
     *TODO Operadores de comparación:
     ** == igualdad
     ** === identico
     ** != diferente
     ** !== no identico
     ** < menor que
     ** > mayor que
     ** <= menor o igual que
     ** >= mayor o igual que
     ** <=> nave espacial
     ** <> diferente
     */
?>