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

    /**
     *TODO Operadores de incremento y decremento:
     ** ++$a preincremento
     ** $a++ postincremento
     ** --$a predecremento
     ** $a-- postdecremento
     */

    /**
     *TODO Operadores lógicos:
     ** && and
     ** || or
     ** ! not
     ** xor
     ** and, or, xor
     */

    /**
     *TODO Operadores de arreglos:
     ** + union
     ** == igualdad
     ** === identico
     ** != diferente
     ** !== no identico
     ** <> diferente
     */

    /** 
     *TODO Operadores bitwise:
     ** & and
     ** ^ xor
     ** | not
     ** << desplazamiento a la izquierda
     ** >> desplazamiento a la derecha
     */

    /**
     *TODO Operadores de error:
     ** @ silenciar errores
     */

    /**
     *TODO Operados de ejecución:
     ** `` ejecutar comando
     */

    /**
     *TODO Operadores de cadenas:
     ** . concatenación
     ** .= concatenación y asignación
     */

     $numero1 = 20;
     $numero2 = 30;
     $numero3 = 30;
     $numero4 = '40';

    var_dump($numero1 > $numero2);
    echo "<br/>";

    var_dump($numero1 < $numero2);
    echo "<br/>";

    var_dump($numero1 >= $numero2);
    echo "<br/>";

    var_dump($numero1 <= $numero2);
    echo "<br/>";

    var_dump($numero2 == $numero3);
    echo "<br/>";

    var_dump($numero2 == $numero4);
    echo "<br/>";

    var_dump($numero2 === $numero4);
    echo "<br/>";

    var_dump($numero1 <=> $numero2);
    echo "<br/>";

    var_dump($numero2 <=> $numero3);
    echo "<br/>";

    var_dump($numero2 <=> $numero1);
    echo "<br/>";

    $nombreCliente = "Campers Campuslands";

    /**
     ** strlen: retorna la longitud de una cadena de texto
     */

    echo strlen($nombreCliente);

    /**
     ** trim: elimina espacios en blanco al inicio y al final de una cadena de texto
     */

    $texto = trim($nombreCliente);
    echo strlen($texto);

    /**
     ** strtoupper: convierte una cadena de texto a mayusculas
     */

    echo strtoupper($nombreCliente);

    /**
     ** strtolower: convierte una cadena de texto a minusculas
     */

    echo strtolower($nombreCliente);

    $mail1 = "correo@correo.com";
    $mail2 = "correo@correo.com";

    var_dump(strtolower($mail1) === strtolower($mail2));
    echo str_replace('Juan', 'J', $nombreCliente);

    /**
     ** strpos: retorna la posición de la primera ocurrencia de una cadena de texto
     */

    echo strpos($nombreCliente, 'Pedro');

    $tipoCliente = "Premium - Empresarial";

    echo "<br>";

    echo "El cliente " . $nombreCliente . " es " . $tipoCliente;

    echo "El cliente $nombreCliente es $tipoCliente";


    /**
     *TODO Arreglos, Arreglos asociativos y funciones para arreglos
     */

    /**
     ** Arreglos: se utilizan para almacenar varios valores en una colección de datos
     */

    $miArreglo = array('valor1', 'valor2', 'valor3');

    $carrito = ['Tablet', 'Television', 'Computadora'];

    /**
     ** Util para imprimir el contenido de un arreglo
     */

    echo "<pre>";
    var_dump($carrito);
    echo "</pre>";

    /**
     ** Acceder a un elemento de un arreglo
     */

    echo $carrito[1];

    /**
     ** Agregar un elemento a un arreglo en una posición especifica
     */

    $carrito[3] = 'Nuevo producto...';

    /**
     ** Agregar un elemento a un arreglo en la ultima posición
     */

    array_push($carrito, 'Audifonos');

    /**
     ** Agregar un elemento a un arreglo en la primera posición
     */

    array_unshift($carrito, 'Smartwatch');

    $clientes = array('cliente1', 'cliente2', 'cliente3');
    echo "<pre>";
    var_dump($clientes);
    echo "</pre>";

    echo $clientes[1];

    /**
     ** Arreglos asociativos: se utilizan para almacenar varios valores en una colección de datos, pero en este caso se accede a los valores a través de una clave
     */

     $miArrayAsociativo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

     /**
      ** Para acceder a un elemento de un arreglo asociativo se utiliza la clave
      */

    echo $miArrayAsociativo['clave1'];
    echo $miArrayAsociativo['clave2'];
    echo $miArrayAsociativo['clave3'];

    /**
     ** foreach: se utiliza para recorrer un arreglo
     */

    foreach ($miArrayAsociativo as $clave => $valor) {
        echo "Clave: " . $clave . ", Valor: " . $valor;
    }

    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 200,
        'informacion' => [
            'tipo' => 'Premium',
            'disponible' => 100
        ]
    ];

    echo "<pre>";
    var_dump($cliente['informacion']);
    echo "</pre>";

    echo $cliente['nombre'];
    echo $cliente['informacion']['disponible'];

    /**
     ** Para agregar un elemento a un arreglo asociativo se crea la clave y se asigna el valor
     */

    $cliente['codigo'] = 1209192012;

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    $carrito = ['Tablet', 'Television', 'Computadora'];

    /**
     ** in_array: se utiliza para verificar si un elemento existe en un arreglo
     */

    var_dump(in_array('Tablet', $carrito));
    var_dump(in_array('Audifonos', $carrito));

    /**
     ** sort: se utiliza para ordenar un arreglo de forma ascendente
     ** rsort: se utiliza para ordenar un arreglo de forma descendente 
     */

    $numeros = array(1,3, 4, 5, 1, 2);
    sort($numeros);
    rsort($numeros);

    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    $cliente = array(
        'saldo' => 200,
        'tipo' => 'Premium',
        'nombre' => 'Juan'
    );

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    /**
     ** asort: se utiliza para ordenar un arreglo asociativo de forma ascendente por valor, orden alfabetico
     ** arsort: se utiliza para ordenar un arreglo asociativo de forma descendente por valor, z de primero
     ** ksort: se utiliza para ordenar un arreglo asociativo de forma ascendente por clave, orden alfabetico
     ** krsort: se utiliza para ordenar un arreglo asociativo de forma descendente por clave, z de primero
     */

    asort($cliente);
    arsort($cliente);
    ksort($cliente);
    krsort($cliente);

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    /**
     ** Arreglos multidimensionales: se utilizan para almacenar varios valores en una colección de datos, pero en este caso se accede a los valores a través de una clave
     */

    $clientes = array(
        'Juan' => array('saldo' => 200, 'tipo' => 'Premium'),
        'Karen' => array('saldo' => 1000, 'tipo' => 'Premium'),
        'Antonio' => array('saldo' => 500, 'tipo' => 'Normal')
    );

    /**
     ** Para acceder a un elemento de un arreglo multidimensional se utiliza la clave  
     */

    echo $clientes['Juan']['saldo'];

    /**
     *TODO Metodos para arreglos
     */

    /**
     ** Array_flip: se utiliza para intercambiar las claves de un arreglo por sus valores
    */
    
    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_flip($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_fill: se utiliza para llenar un arreglo con valores en un rango especifico
     */

    $miArreglo = array_fill(0, 10, 'valor');

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_filter: se utiliza para filtrar los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_filter($miArreglo, function($elemento) {
        return $elemento > 5;
    });

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_map: se utiliza para modificar los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_map(function($elemento) {
        return $elemento * 2;
    }, $miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_reduce: se utiliza para reducir los elementos de un arreglo a un solo valor
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_reduce($miArreglo, function($elemento, $valor) {
        return $elemento + $valor;
    });

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_key_exists: se utiliza para verificar si una clave existe en un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    if(array_key_exists('clave1', $miArreglo)) {
        echo 'La clave existe';
    } else {
        echo 'La clave no existe';
    }

    /**
     ** in_array: se utiliza para verificar si un valor existe en un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    if(in_array('valor1', $miArreglo)) {
        echo 'El valor existe';
    } else {
        echo 'El valor no existe';
    }

    /**
     ** array_rand: se utiliza para obtener una o varias claves aleatorias de un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_rand($miArreglo, 2);

    /**
     ** array_unique: se utiliza para eliminar los valores duplicados de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10,1,2,3,4);

    $miArreglo = array_unique($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_intersect: se utiliza para obtener los valores que existen en dos o más arreglos
     */

    $miArreglo1 = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo2 = array(5,6,7,8,9,10,11,12,13,14);

    $miArreglo = array_intersect($miArreglo1, $miArreglo2);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_diff: se utiliza para obtener los valores que no existen en dos o más arreglos
     */

    $miArreglo1 = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo2 = array(5,6,7,8,9,10,11,12,13,14);

    $miArreglo = array_diff($miArreglo1, $miArreglo2);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_push: se utiliza para agregar uno o más elementos al final de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    array_push($miArreglo, 11, 12, 13, 14, 15);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_pop: se utiliza para eliminar el último elemento de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    array_pop($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_reverse: se utiliza para invertir el orden de los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_reverse($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_sum: se utiliza para obtener la suma de los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_sum($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_product: se utiliza para obtener el producto de los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_product($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_chunk: se utiliza para dividir un arreglo en arreglos más pequeños
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_chunk($miArreglo, 2);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_keys: se utiliza para obtener las claves de un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_keys($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_values: se utiliza para obtener los valores de un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_values($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_walk: se utiliza para recorrer un arreglo y aplicar una función a cada uno de sus elementos
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    function cuadrado($valor) {
        echo $valor * $valor . "<br>";
    }

    array_walk($miArreglo, 'cuadrado');

    /**
     *TODO Isset() y Empty()
     */

    /**
     ** isset: se utiliza para verificar si una variable está definida y tiene un valor
     ** isset también se utiliza para verificar si un arreglo está definido y tiene un valor
     ** isset también permite revisar si una propiedad de un arreglo asociativo está definida y tiene un valor
     */

    $miVariable = 'Hola';

    if (isset($miVariable)) {
        echo 'La variable está definida y tiene un valor';
    } else {
        echo 'La variable no está definida o no tiene un valor'; 
    }

    /**
     ** empty: se utiliza para verificar si una variable está vacia, también se utiliza para verificar si un arreglo está vacio
     */

    $miVariable = "";

    if(empty($miVariable)) {
        echo 'La variable está vacia o no está definida';
    } else {
        echo 'La variable tiene un valor';
    }

    $clientes = [];
    $clientes2 = array();
    $clientes3 = array('Pedro', 'Juan', 'Karen');
    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 200
    ];

    var_dump(empty($clientes));
    var_dump(empty($clientes3));
    var_dump(empty($clientes2));

    echo "<br>";
    var_dump(isset($clientes4));
    var_dump(isset($clientes));
    var_dump(isset($clientes2));
    var_dump(isset($clientes3));

    var_dump(isset($cliente['nombre']));
    var_dump(isset($cliente['codigo']));

    /**
     ** in_array: se utiliza para verificar si una variable es un arreglo
     */

    var_dump(in_array('Audifonos', $carrito));
    
?>