<?php

    /**
     *! PHP básico
     */

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
    
    /**
     *TODO Estrucutras de control
     */

    /**
     ** Las estructuras de control nos permiten controlar el flujo de ejecución de nuestro código
     ** Las estructuras de control más comunes son: estructuras de control condicionales, estructuras de control de repetición y estructuras de control de excepciones
     */

    /**
     *TODO Estructuras de control condicionales
     */

    /**
     ** if: se utiliza para ejecutar una o más instrucciones si se cumple una condición
     */

    if (10 > 3) {
        echo '10 es mayor que 3';
    }

    if (10 > 3) {
        echo '10 es mayor que 3';
    } else {
        echo '10 no es mayor que 3';
    }

    if (10 > 3) {
        echo '10 es mayor que 3';
    } elseif (10 < 20) {
        echo '10 es menor que 20';
    } else {
        echo '10 no es mayor que 3 y 10 no es menor que 20';
    }

    /**
     ** switch: se utiliza para ejecutar una o más instrucciones si se cumple una condición, dependiendo del valor de una variable. Despues de cada case se debe colocar la palabra reservada break
     */

    $autenticado = true;
    $admin = false;

    if ($autenticado && $admin) {
        echo 'Usuario autenticado correctamente';
    } else {
        echo 'Usuario no autenticado, inicia sesión';
    }

    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 0,
        'informacion' => [
            'tipo' => 'Regular'
        ]
    ];

    echo "<br>";

    if (!empty($cliente)) {
        echo 'El arreglo de cliente no está vacio';

        if ($cliente['saldo'] > 0) {
            echo 'El cliente tiene saldo disponible';
        } else {
            echo 'No hay saldo';
        }
    }

    echo "<br>";

    if($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo';
    } else if ($cliente['informacion']['tipo'] === 'Premium') {
        echo 'El cliente es premium';
    } else {
        echo 'No hay cliente definido o no tiene saldo o no es premium';
    }

    echo "<br>";

    $tecnologia = 'HTML';

    switch ($tecnologia) {
        case 'PHP':
            echo 'PHP, un excelente lenguaje';
            break;
        case 'JavaScript':
            echo 'Genial, el lenguaje de la web';
            break;
        case 'HTML':
            echo 'Emmm...';
            break;
        default:
            echo 'Algo lenguaje que no se cual es';
            break;
    }

    /**
     *TODO Estructuras de control de repetición
     */

    /**
     ** while: se utiliza para ejecutar una o más instrucciones mientras se cumpla una condición
     ** do while: se utiliza para ejecutar una o más instrucciones mientras se cumpla una condición, la diferencia con el while es que el do while se ejecuta al menos una vez
     ** for: se utiliza para ejecutar una o más instrucciones un número específico de veces
     */

    $i = 0;

    while ($i < 10) {
        echo $i . '<br>';
        $i++;
    }

    echo "<br>";

    $i = 0;

    do {
        echo $i . '<br>';
        $i++;
    } while ($i < 10);

    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        echo $i . '<br>';
    }

    echo "<br>";

    $clientes = ['Pedro', 'Juan', 'Karen'];

    foreach ($clientes as $cliente):
        echo $cliente . '<br>';
    endforeach;

    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 200,
        'tipo' => 'Premium'
    ];

    foreach ($cliente as $key => $valor):
        echo $key . ' - ' . $valor . '<br>';
    endforeach;

    $productos = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true
        ],
        [
            'nombre' => 'Television',
            'precio' => 300,
            'disponible' => true
        ],
        [
            'nombre' => 'Monitor',
            'precio' => 400,
            'disponible' => false
        ]
    ];

    foreach ($productos as $producto) { ?>
        <li>
            <p>Producto: <?php echo $producto['nombre']; ?></p>
            <p>Precio: <?php echo $producto['precio']; ?></p>
            <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?></p>
        </li>
    <?php
    }

    /**
     *TODO Estructuras de control de excepciones
     */

    /**
     ** try catch: se utiliza para capturar errores en tiempo de ejecución. El código que puede generar un error se coloca dentro del bloque try, y el código que se ejecuta en caso de que se genere un error se coloca dentro del bloque catch
     */

    try {
        // Código que puede generar un error
    } catch (Exception $e) {
        // Código que se ejecuta en caso de error
    }

    try {
        if (isset($cliente)) {
            echo 'El cliente existe';
        } else {
            throw new Exception('El cliente no existe');
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    /**
     *TODO Funciones definidas por el usuario
     */

    /**
     ** Las funciones definidas por el usuario nos permiten reutilizar código. Las funciones se definen con la palabra reservada function, seguida del nombre de la función y paréntesis. Dentro de los paréntesis se colocan los parámetros de la función, separados por comas. Después de los paréntesis se coloca el bloque de código de la función, el cual puede contener uno o más instrucciones. Para ejecutar una función, se coloca el nombre de la función seguido de paréntesis, y dentro de los paréntesis se colocan los argumentos de la función, separados por comas. Son una herramienta muy poderosa para reutilizar código y hacerlo más mantenible.
     */

    /**
     *TODO Funciones en PHP
     */

    function saludar() {
        echo 'Hola';
    }

    saludar();
    
    /**
     *TODO Funciones que no retornan valor
     */

    /**
     ** Las funciones que no retornan valor se utilizan para ejecutar una o más instrucciones, pero no retornan un valor. Para definir una función que no retorne valor, se coloca la palabra reservada void después del paréntesis de la función
     */

    //declare(strict_types=1);

    /*
    function sumar(int $numero1 = 0, array $numero2): void {
        echo $numero1 + $numero2;
    }
    sumar(10, []);

    function sumar2(int $numero1 = 0, array $numero2) {
        echo $numero1 + $numero2;
    }
    sumar2(10, []);
    */

    /**
     *TODO Funciones que retornan valor
     */

    /**
     ** Las funciones que retornan valor se utilizan para ejecutar una o más instrucciones y retornar un valor. Para definir una función que retorne valor, se coloca el tipo de dato que retorna la función después del paréntesis de la función
     */

    //declare(strict_types=1);
    //include 'includes/header.php';
    function usuarioAutenticado(bool $autenticado): ?string {
        if ($autenticado) {
            return 'El usuario está autenticado';
        } else {
            return null;
        }
    }

    $usuario = usuarioAutenticado(false);
    echo $usuario;
    //include 'includes/footer.php';

    /**
     *TODO include, require, include_once, require_once
     */

    /**
     ** include: incluye y ejecuta el archivo especificado
     ** require: incluye y ejecuta el archivo especificado, si el archivo no existe o tiene un error, se detiene la ejecución del programa
     ** include_once: incluye y ejecuta el archivo especificado, si el archivo ya ha sido incluido, no lo incluye nuevamente
     ** require_once: incluye y ejecuta el archivo especificado, si el archivo ya ha sido incluido, no lo incluye nuevamente, si el archivo no existe o tiene un error, se detiene la ejecución del programa
     */

    echo <<<HTML
    <header>
        <?php include(includes/header.php') ?>
    </header>
    HTML;

    /**
     *TODO Json_encode y json_decode
     */

    /**
     ** json_encode: convierte un array de PHP a formato JSON
     */

    $productos = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true
        ],
        [
            'nombre' => 'Television',
            'precio' => 300,
            'disponible' => true
        ],
        [
            'nombre' => 'Monitor',
            'precio' => 400,
            'disponible' => false
        ]
    ];

    var_dump($productos);
    $json = json_encode($productos, JSON_UNESCAPED_UNICODE);
    var_dump($json);

    /**
     ** json_decode: convierte un string en formato JSON a un array de PHP
     */

    $json = '[{"nombre":"Tablet","precio":200,"disponible":true},{"nombre":"Television","precio":300,"disponible":true},{"nombre":"Monitor","precio":400,"disponible":false}]';

    var_dump($json);

    $productos = json_decode($json);

    var_dump($productos);

    /**
     *! PHP intermedio
     */

    /**
     *TODO Programación orientada a objetos
     */

    /**
     ** La programación orientada a objetos es un paradigma de programación que se basa en la definición de clases y objetos. Una clase es una plantilla que define las propiedades y métodos comunes a un grupo de objetos. Un objeto es una instancia de una clase. Las propiedades son las características que definen a un objeto. Los métodos son las acciones que puede realizar un objeto.
     */

    /**
     ** Clase: una clase es una plantilla que define las propiedades y métodos comunes a un grupo de objetos
     ** Objeto: un objeto es una instancia de una clase. Represente un individuo o una entidad de la clase
     ** Atributo: un atributo es una propiedad de un objeto
     ** Método: un método es una acción que puede realizar un objeto
     ** Encapsulamiento: es el principio que establece que los atributos y metodos de una clase deben estar definidos con un nivel de acceso, estos pueden ser public, protected o private
     ** Herencia: es el principio que establece que una clase puede heredar los atributos y métodos de otra clase. La clase que hereda se conoce como clase hija o subclase, y la clase de la cual hereda se conoce como clase padre o superclase
     ** Polimorfismo: es el principio que establece que una clase puede tener varios métodos con el mismo nombre, pero con diferente comportamiento
     */

    /**
     *TODO Modificadores de acceso
     */

    /**
     ** Los modificadores de acceso nos permiten establecer el nivel de acceso de los atributos y métodos de una clase. Los modificadores de acceso son public, protected y private
     */

     /**
      ** public: los atributos y métodos definidos como public pueden ser accedidos desde cualquier lugar
      ** protected: los atributos y métodos definidos como protected solo pueden ser accedidos desde la clase que los define y desde las clases heredadas. No pueden ser accedidos desde fuera de la clase
      ** private: los atributos y métodos definidos como private solo pueden ser accedidos desde la clase que los define. No pueden ser accedidos desde las clases heredadas ni desde fuera de la clase
      */

    /**
     *TODO clases
     */

    class Persona {

        public function __construct(private string $nombre, protected int $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }

        private function saludar() {
            echo 'Hola, mi nombre es ' . $this->nombre;
        }
    }

    $alumno = new Persona('Juan', 20);

    echo $alumno->getNombre();
    echo $alumno->getEdad();

    echo "<br>";

    /**
     *TODO Métodos estáticos
     */

    /**
     ** Los métodos estáticos son aquellos que pueden ser accedidos sin necesidad de instanciar la clase. Para definir un método estático se utiliza la palabra reservada static
     ** No requieren una instancia de la clase para ser accedidos
     ** Se acceden utilizando el operador de resolución de ámbito (::)
     ** No pueden acceder a los atributos de la clase utilizando $this
     ** No puede acceder a propiedades de instancia
     */

    class Persona2 {
        private string $nombre;
        protected int $edad;
        private static $nombreAux;

        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            self::$nombreAux = $nombre;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }

        public static function saludar() {
            echo 'Hola como estas ' . self::$nombreAux;
        }
    }

    echo Persona2::saludar();

    /**
     *TODO Herencia
     */

     /**
      ** La herencia es el principio que establece que una clase puede heredar los atributos y métodos de otra clase. La clase que hereda se conoce como clase hija o subclase, y la clase de la cual hereda se conoce como clase padre o superclase
      */

    /**
     ** Clase padre o superclase: es la clase de la cual hereda otra clase. Define los atributos y métodos comunes a un grupo de clases
     ** Clase hija o subclase: es la clase que hereda de otra clase. Hereda los atributos y métodos de la clase padre, y puede definir sus propios atributos y métodos
     ** Herencia simple: es cuando una clase hereda de una sola clase
     ** Herencia múltiple: es cuando una clase hereda de dos o más clases
     ** Polimorfismo: es la capacidad de un objeto de una clase derivada de comportarse como un objeto de otra clase. Se puede lograr mediante la herencia y la sobrecarga de métodos. La sobrecarga de métodos es cuando una clase hija redefine un método de la clase padre
     */

    class Transporte {
        public function __construct(protected int $ruedas, protected int $capacidad) {
           
        }

        public function getInfo() {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
        }

        public function getRuedas() {
            return $this->ruedas;
        }
    }

    class Bicicleta extends Transporte {
        public function __construct(protected int $ruedas, protected int $capacidad) {
            parent::__construct($ruedas, $capacidad);
        }

        public function getInfo() {
            return "La bicicleta tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
        }
    }

    class Automovil extends Transporte {
        public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) {
            parent::__construct($ruedas, $capacidad);
        }

        public function getInfo() {
            return "El automovil tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
        }

        public function getTransmision() {
            return $this->transmision;
        }
    }

    $bicicleta = new Bicicleta(2, 1);

    echo $bicicleta->getInfo();
    echo $bicicleta->getRuedas();

    echo "<br>";

    $automovil = new Automovil(4, 5, 'manual');
    echo $automovil->getInfo();
    echo $automovil->getTransmision();

    /**
     *TODO Clases abstractas
     */

    /**
     ** Las clases abstractas son aquellas que no pueden ser instanciadas, y que pueden contener métodos abstractos. Para definir una clase abstracta se utiliza la palabra reservada abstract
     ** Sirve como plantilla para definir clases hijas
     ** Una clase hija puede heredar de una sola clase padre abstracta
     ** Una clase hija debe proporcionar una implementación de los métodos abstractos de la clase padre, la implementacion debe tener la misma firma que el método abstracto
     */

    abstract class Animal {
        abstract public function hacerSonido();
    }

    class Perro extends Animal {
        public function __construct() {
        }
        public function hacerSonido() {
            echo 'Guau';
        }
    }

    class Gato extends Animal {
        public function __construct() {
        }
        public function hacerSonido() {
            echo 'Miau';
        }
    }

    $perro = new Perro();
    $perro->hacerSonido();

    echo "<br>";

    $gato = new Gato();
    $gato->hacerSonido();

    /**
     *TODO Interfaces
     */

    /**
     ** Las interfaces son un tipo especial de clase abstracta que define un conjunto de métodos que deben ser implementados por una clase hija. Para definir una interfaz se utiliza la palabra reservada interface. No especifican la implementación de los métodos, solo su firma.
     ** Una clase puede implementar varias interfaces, pero no puede heredar de varias clases, ya que PHP no soporta la herencia múltiple, pero si soporta la implementación múltiple de interfaces. Para implementar una interfaz se utiliza la palabra reservada implements.
     */

    interface Figura {
        public function calcularArea();
    }

    class Circulo implements Figura {
        public function __construct(private int $radio) {
        }

        public function calcularArea() {
            return 3.14 * $this->radio * $this->radio;
        }
    }

    $circulo = new Circulo(10);
    echo $circulo->calcularArea();

    echo "<br>";

    /*
    interface TransporteInterfaz {
        public function getInfo() : string;
        public function getRuedas(): int;
    }

    class Transporte implements TransporteInterfaz {
        public function __construct(protected int $ruedas, protected int $capacidad) {
           
        }

        public function getInfo() {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
        }

        public function getRuedas() {
            return $this->ruedas;
        }
    }
    */

    /**
     *TODO Traits
     */

    /**
     ** Los traits son una forma de reutilizar código en clases. Los traits son similares a las clases, pero no pueden ser instanciados. Para definir un trait se utiliza la palabra reservada trait. Para utilizar un trait en una clase se utiliza la palabra reservada use
     */

    trait Saludar {
        public function saludar() {
            echo 'Hola';
        }

        public function despedir() {
            echo 'Adios';
        }

        public function decirNombre() {
            echo 'Mi nombre es ' . $this->nombre;
        }
    }

    class Persona3 {
        use Saludar;

        public function __construct(private string $nombre) {
        }
    }

    $persona = new Persona3('Juan');
    $persona->saludar();
    $persona->despedir();
    $persona->decirNombre();

    /**
     *TODO Polimorfismo
     */

    /**
     ** El polimorfismo es la capacidad de un objeto de una clase derivada de comportarse como un objeto de otra clase. Se puede lograr mediante la herencia y la sobrecarga de métodos. La sobrecarga de métodos es cuando una clase hija redefine un método de la clase padre
     ** La sobrecarga de métodos es cuando una clase hija redefine un método de la clase padre
     ** El polimorfismo se logra mediante la herencia y la sobrecarga de métodos
     ** El polimorfismo se utiliza para crear código más mantenible y reutilizable
     */

    /*
    interface TransporteInterfaz {
        public function getInfo() : string;
        public function getRuedas(): int;
    }

    class Transporte implements TransporteInterfaz {
        public function __construct(protected int $ruedas, protected int $capacidad) {
           
        }

        public function getInfo() {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
        }

        public function getRuedas() {
            return $this->ruedas;
        }
    }

    class Automovil extends Transporte implements TransporteInterfaz {
        public function __construct(protected int $ruedas, protected int $capacidad, protected string $color) {
            parent::__construct($ruedas, $capacidad);
        }

        public function getInfo() {
            return "El automovil tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y es de color " . $this->color;
        }

        public function getColor() {
            return $this->color;
        }
    }

    $automovil = new Automovil(4, 5, 'rojo');
    echo $automovil->getInfo();
    echo $automovil->getRuedas();
    echo $automovil->getColor();
    */

    /**
     *TODO Autoload
     */

    /**
     ** El autoload es una función que se ejecuta cuando se intenta utilizar una clase que no ha sido definida. El autoload nos permite cargar las clases de forma dinámica, sin necesidad de utilizar la función include o require, no es necesario incluir los archivos de las clases manualmente
     ** el autoloading se basa en la funcion spl_autoload_register, que permite registrar una o más funciones que se ejecutan cuando se intenta utilizar una clase que no ha sido definida
     */

    /*
    function my_autoload($clase){
        //requiere __DIR__. '/' . $clase . '.php';
    }

    spl_autoload_register('my_autoload');
    */

    //$detalles = new Detalles();
    //$clientes = new Clientes();

    /**
     * TODO Namespaces
     */

    /**
     ** Los namespaces nos permiten agrupar clases y evitar conflictos de nombres. Para definir un namespace se utiliza la palabra reservada namespace, seguida del nombre del namespace. Para utilizar una clase de un namespace se utiliza el operador de resolución de ámbito (::)
     */

    //namespace App;

    class Cliente {
        public function __construct() {
            echo 'Desde la clase cliente';
        }
    }

    class Detalles {
        public function __construct() {
            echo 'Desde la clase detalles';
        }
    }

    //use App\Cliente;

    function my_autoload($clase){
        $fileClass = explode('\\', $clase);
        //requiere __DIR__. '/' . $fileClass[1] . '.php';
    }

    spl_autoload_register('my_autoload');

    $cliente = new Cliente();
    $detalles = new Detalles();

    /**
     *TODO Composer
     */

    /**
     ** Composer es un administrador de paquetes para PHP, que nos permite instalar y actualizar librerías de terceros. Composer nos permite instalar librerías de terceros de forma sencilla, y nos permite mantenerlas actualizadas. Composer nos permite definir las dependencias de nuestro proyecto en un archivo llamado composer.json, y nos permite instalar las dependencias de nuestro proyecto con el comando composer install
     */

    /**
     ** Autoload: composer nos permite definir el autoload de nuestro proyecto en el archivo composer.json, y nos permite generar el autoload con el comando composer dump-autoload
     */

    /*
    {
        "autoload": {
            "psr-4": {
                "App\\": "app/"
            }
        }
    }

    require __DIR__ . '/vendor/autoload.php';
    use App\Cliente;
    use App\Detalles;


    $cliente = new Cliente();
    $detalles = new Detalles();
    */

    /**
     *! PHP avanzado
     */

    /**
     *TODO Integración de PHP con MySQL
     */

     /**
      ** La integración de bases de datos con PHP es una de las características más importantes de PHP. PHP nos permite conectarnos a una base de datos MySQL, y ejecutar consultas SQL. Para conectarnos a una base de datos MySQL utilizamos la función mysqli_connect, y para ejecutar consultas SQL utilizamos la función mysqli_query
      */

    /**
     *TODO Bases de datos relacionales
     */

    /**
     ** Las bases de datos relacionales son aquellas que almacenan los datos en tablas, y que establecen relaciones entre las tablas. Las bases de datos relacionales son las más utilizadas en la actualidad, y son las más utilizadas en el desarrollo de aplicaciones web. Las bases de datos relacionales son muy eficientes para almacenar grandes cantidades de datos, y son muy eficientes para realizar consultas a los datos almacenados
     ** Sistema de gestión de bases de datos relacionales (SGBD): es un sistema que permite almacenar y gestionar datos en una base de datos relacional. Los sistemas de gestión de bases de datos relacionales más utilizados son MySQL, PostgreSQL, Oracle, SQL Server y SQLite
     ** En una base de datos relacional, los datos se almacenan en tablas, y las tablas se relacionan entre sí mediante llaves primarias y llaves foráneas. Cada fila corresponde a una instancia de la entidad que representa la tabla, y cada columna corresponde a un atributo de la entidad que representa la tabla
     ** Llave primaria: es un atributo o conjunto de atributos que identifica de forma única a cada fila de una tabla. La llave primaria no puede tener valores nulos, y no puede repetirse en ninguna otra fila de la tabla
     ** Llave foránea: es un atributo o conjunto de atributos que establece una relación entre dos tablas. La llave foránea debe tener el mismo tipo de dato que la llave primaria a la que hace referencia, y debe tener el mismo nombre que la llave primaria a la que hace referencia
     ** Las bases de datos relacionales se basan en el modelo relacional, que fue propuesto por Edgar Frank Codd en 1970, y en el lenguaje de consulta estructurado (SQL).
     */

    /**
     ** Un sistema de gestión de bases de datos relacionales (RDBMS) es un sistema que permite almacenar y gestionar datos en una base de datos relacional. Los sistemas de gestión de bases de datos relacionales más utilizados son MySQL, PostgreSQL, Oracle, SQL Server y SQLite.
     ** El usuario suele elegir un nombre relacionado con los datos que se almacenarán en la tabla; por ejemplo, STUDENTS, CUSTOMERS, etc
     ** Ventajas de RSBMS:
     ** Menos redundancia de datos
     ** Menos inconsistencia de datos
     ** Mejor integridad de datos
     ** Mejor seguridad de datos
     ** Mejor rendimiento de datos 
     */

    /**
     ** Reglas para tablas de bases de datos relacionales:
     ** Cada tabla debe tener un nombre único
     ** Cada tabla debe tener una columna o conjunto de columnas que identifiquen de forma única cada fila de la tabla
     ** Cada columna debe tener un nombre único
     ** Las entradas de una columna deben ser del mismo tipo de dato
     ** Cada fila debe ser única
     ** El orden de las filas y las columnas no es importante
     ** Cada tabla puede contener varias filas
     */

    /**
     *TODO Entidades y atributos
     */

    /**
     ** Entidad: es un objeto o concepto del mundo real que se puede distinguir de otros objetos. Por ejemplo, una persona, un producto, una venta, etc
     ** Tipos de entidades: principal (Existe de forma independiente), caracteristicas(Existe gracias a otra entidad) y de intersección(Existe gracias a dos o más entidades)
     ** Las entidades contienen instancias, una instancia de entidad es una única incidencia de una entidad. Por ejemplo, una persona, un producto, una venta, etc. Lan entidades representan un juegos de instancias que son de interés para el usuario
     */

    /**
     *TODO Identificadores únicos
     */

    /**
     ** Identificador único: es un atributo o conjunto de atributos que identifica de forma única a cada fila de una tabla. La llave primaria no puede tener valores nulos, y no puede repetirse en ninguna otra fila de la tabla
     */

    /**
     ** Caracterisis de identificadores únicos:
     ** No puede tener valores nulos
     ** No puede repetirse en ninguna otra fila de la tabla
     ** Deben ser estables y no cambiar con el tiempo
     ** Deben ser indexados
     ** Pueden utilizarse como referencia en otras tablas
     */

    /**
     *TODO Relaciones entre tablas
     */

    /**
     ** Relación: es una asociación entre dos o más entidades. Las relaciones se representan mediante llaves foráneas. Las relaciones se clasifican en uno a uno, uno a muchos y muchos a muchos
     ** Una relación representa las reglas de negocio que enlazan dos o más entidades. Cada relación siempre tiene dos reglas de noegocio.
     */
    
    /**
     *TODO Clave ajena o foránea
     */

    /**
     ** Clave ajena o foránea: es un atributo o conjunto de atributos que establece una relación entre dos tablas. La llave foránea debe tener el mismo tipo de dato que la llave primaria a la que hace referencia, y debe tener el mismo nombre que la llave primaria a la que hace referencia
     ** cuando una tabla tiene una clave foránea, se dice que la tabla depende de la tabla a la que hace referencia la clave foránea
     */

    /**
     ** Características de las claves foráneas:
     ** Relación entre tablas, las claves foráneas establecen una relación entre dos tablas
     ** Integridad referencial, las claves foráneas garantizan la integridad referencial entre dos tablas
     ** Restricciones de integridad: las claves foráneas permiten definir restricciones de integridad referencial entre dos tablas
     ** Consultas y operaciones: las claves foráneas permiten realizar consultas y operaciones entre dos tablas
     ** Mantenimiento de la consistencia: las claves foráneas permiten mantener la consistencia entre dos tablas
     */

    /**
     *TODO Normalización de bases de datos
     */

    /**
     ** La normalización de bases de datos es el proceso mediante el cual se optimiza la estructura de una base de datos relacional. La normalización de bases de datos se basa en el modelo relacional, que fue propuesto por Edgar Frank Codd en 1970, y en el lenguaje de consulta estructurado (SQL)
     */

    /**
     ** Tres formas más comunes de normalización:
     ** Primera forma normal (1FN): elimine los grupos repetidos de datos en una tabla. Cree una tabla independiente para cada grupo de datos relacionados e identifíquelos mediante una clave primaria
     ** Segunda forma normal (2FN): cree tablas independientes para conjuntos de valores que se relacionan con un subconjunto de una clave primaria, relacione estas tablas con una clave foránea
     ** Tercera forma normal (3FN): elimine los campos que no dependen de la clave primaria
     */

    /**
     *TODO MySQL
     */

    /**
     ** MySQL es un sistema de gestión de bases de datos relacionales (RDBMS) que permite almacenar y gestionar datos en una base de datos relacional. MySQL es un software de código abierto, y es el sistema de gestión de bases de datos relacionales más utilizado en el mundo
     ** Ha sido integrada con otras herramientas de software libre, como PHP y Apache, para crear un sistema de desarrollo de aplicaciones web conocido como LAMP (Linux, Apache, MySQL y PHP)
     */

    /**
     *TODO Caracteristicas de MySQL
     */

    /**
     ** Velocidad: MySQL es muy rápido en la lectura de datos, debido a que utiliza un motor de almacenamiento basado en tablas hash
     ** Seguridad: MySQL permite cifrar los datos que se almacenan en la base de datos, y permite utilizar conexiones seguras mediante SSL
     ** Portabilidad: MySQL es un sistema multiplataforma, y puede ejecutarse en diferentes sistemas operativos, como Windows, Linux, Mac OS, etc
     ** Facilidad de uso: MySQL es muy fácil de utilizar, y permite realizar tareas de administración de bases de datos de forma sencilla
     ** Conectividad: MySQL permite conectarse a la base de datos mediante diferentes lenguajes de programación, como PHP, Java, Python, etc
     ** Soporta el lengueje SQL: MySQL soporta el lenguaje SQL, que es un lenguaje de consulta estructurado que permite crear, modificar y eliminar bases de datos, tablas, registros, etc
     ** Robusteza: MySQL es un sistema de gestión de bases de datos muy robusto, y permite gestionar grandes cantidades de datos
     */

    /**
     *TODO Consola de MySQL
     */

    /**
     ** Para acceder a la consola de MySQL, se debe ejecutar las siguientes instrucciones:
     */

    echo <<<HTML

        <img src="images/1.png" alt="1">
        <br>
        <img src="images/2.png" alt="2">
        <br>
        <img src="images/3.png" alt="3">
        <br>
        <img src="images/4.png" alt="4">

    HTML;

    /**
     *TODO Tipos de datos en MySQL
     */

    /**
     ** Tipos de datos enteros:
     ** TINYINT: es un entero de 1 byte, que puede almacenar valores entre -128 y 127
     ** SMALLINT: es un entero de 2 bytes, que puede almacenar valores entre -32768 y 32767
     ** MEDIUMINT: es un entero de 3 bytes, que puede almacenar valores entre -8388608 y 8388607
     ** INT: es un entero de 4 bytes, que puede almacenar valores entre -2147483648 y 2147483647
     ** BIGINT: es un entero de 8 bytes, que puede almacenar valores entre -9223372036854775808 y 9223372036854775807
     ** BIT: es un entero de 1 bit, que puede almacenar valores entre 0 y 1
     */

    /**
     ** Tipos de datos de coma flotante:
     ** FLOAT: es un número de coma flotante de 4 bytes, que puede almacenar valores entre -3.402823466E+38 y -1.175494351E-38, 0 y 1.175494351E-38, 3.402823466E+38
     ** DOUBLE: es un número de coma flotante de 8 bytes, que puede almacenar valores entre -1.7976931348623157E+308 y -2.2250738585072014E-308, 0 y 2.2250738585072014E-308, 1.7976931348623157E+308
     ** DECIMAL: es un número de coma flotante de 8 bytes, que puede almacenar valores entre -9999999999999999999999999999.99999999 y 9999999999999999999999999999.99999999
     */

    /**
     ** Tipos de datos de cadena:
     ** CHAR: es una cadena de longitud fija, que puede almacenar hasta 255 caracteres, para mantener la longitud fija, los espacios en blanco al final de la cadena se rellenan
     ** VARCHAR: es una cadena de longitud variable, que puede almacenar hasta 65535 caracteres, los espacios en blanco al final de la cadena se eliminan
     ** TINYTEXT: es una cadena de longitud variable, que puede almacenar hasta 255 caracteres
     ** TEXT: es una cadena de longitud variable, que puede almacenar hasta 65535 caracteres, distingue entre mayúsculas y minúsculas
     ** MEDIUMTEXT: es una cadena de longitud variable, que puede almacenar hasta 16777215 caracteres
     ** LONGTEXT: es una cadena de longitud variable, que puede almacenar hasta 4294967295 caracteres
     ** BLOB: es una cadena de longitud variable, que puede almacenar hasta 65535 bytes, y que se utiliza para almacenar datos binarios como imágenes, archivos de audio, etc
     */

    /**
     ** Tipos de datos de fecha y hora:
     ** DATE: es una fecha en formato AAAA-MM-DD, que puede almacenar valores entre 1000-01-01 y 9999-12-31
     ** DATETIME: es una fecha y hora en formato AAAA-MM-DD HH:MM:SS, que puede almacenar valores entre 1000-01-01 00:00:00 y 9999-12-31 23:59:59
     ** TIMESTAMP: es una fecha y hora en formato AAAA-MM-DD HH:MM:SS, que puede almacenar valores entre 1970-01-01 00:00:01 y 2038-01-19 03:14:07
     ** TIME: es una hora en formato HH:MM:SS, que puede almacenar valores entre -838:59:59 y 838:59:59
     */

    /**
     ** Modificadores o constrains:
     ** NOT NULL: indica que el campo no puede contener valores nulos
     ** DEFAULT: indica el valor por defecto del campo
     ** AUTO_INCREMENT: indica que el campo es autoincremental
     ** PRIMARY KEY: indica que el campo es la clave primaria de la tabla
     ** UNIQUE: indica que el campo no puede contener valores duplicados
     */

    /**
     *TODO SQL (Structured Query Language)
     */

    /**
     ** SQL es un lenguaje de consulta estructurado que permite crear, modificar y eliminar bases de datos, tablas, registros, etc.
     */

    /**
     ** SQL se divide en cuatro comandos principales:
     ** DDL (Data Definition Language): se utiliza para crear, modificar y eliminar bases de datos, tablas, etc
     ** DML (Data Manipulation Language): se utiliza para insertar, modificar y eliminar registros
     ** DQL (Data Query Language): se utiliza para realizar consultas a la base de datos
     ** DCL (Data Control Language): se utiliza para controlar los permisos de acceso a la base de datos
     */

    /**
     *TODO Que se puede hacer con SQL
     */

    /**
     ** Crear y administrar bases de datos: una base de datos es un conjunto de tablas que se relacionan entre sí
     ** Insertar, modificar y eliminar registros: un registro es un conjunto de datos que se almacenan en una tabla
     ** Realizar consultas a la base de datos: una consulta es una instrucción que se utiliza para recuperar datos de una o más tablas
     ** Filtrar, ordenar y agrupar registros: filtrar registros es una operación que se utiliza para seleccionar los registros que cumplen una determinada condición
     ** Agregar funciones y calculos: una función es una operación que se utiliza para realizar un cálculo sobre un conjunto de registros
     ** Crear vistas: una vista es una tabla virtual que se crea a partir de una consulta
     ** Estables restricciones de integridad: las restricciones de integridad se utilizan para garantizar la integridad de los datos
     */

    /**
     *TODO Comandos DDL (Data Definition Language)
     */

    /**
     ** Los comandos DDL se utilizan para crear, modificar y eliminar bases de datos, tablas, etc.
     */

    /**
     ** SHOW DATABASES: muestra las bases de datos que existen en el servidor. Sintaxis: SHOW DATABASES
     ** CREATE DATABASE: crea una base de datos. Sintaxis: CREATE DATABASE nombre_base_datos
     ** DROP DATABASE: elimina una base de datos. Sintaxis: DROP DATABASE nombre_base_datos
     ** USE: selecciona una base de datos. Sintaxis: USE nombre_base_datos
     ** CREATE TABLE: crea una tabla. Sintaxis: CREATE TABLE nombre_tabla (nombre_campo tipo_dato, nombre_campo tipo_dato, ...)
     ** SHOW TABLES: muestra las tablas que existen en la base de datos. Sintaxis: SHOW TABLES
     ** DESCRIBE: muestra la estructura de una tabla. Sintaxis: DESCRIBE nombre_tabla
     ** ALTER TABLE: modifica la estructura de una tabla. Sintaxis: ALTER TABLE nombre_tabla accion. Acciones: ADD nombre_campo tipo_dato, DROP nombre_campo, MODIFY nombre_campo tipo_dato, RENAME TO nuevo_nombre_tabla
     ** DROP TABLE: elimina una tabla. Sintaxis: DROP TABLE nombre_tabla
     */

    /**
     *TODO Constraints
     */

    /**
     ** Los constraints se utilizan para establecer reglas que permiten garantizar la integridad de los datos
     */

    /**
     ** PRIMARY KEY: indica que el campo es la clave primaria de la tabla. Solo puede haber una clave primaria por tabla y no puede contener valores nulos
     ** UNIQUE: indica que el campo no puede contener valores duplicados
     ** NOT NULL: indica que el campo no puede contener valores nulos
     ** FOREIGN KEY: indica que el campo es una clave foránea que hace referencia a la clave primaria de otra tabla
     ** CHECK: indica que el campo debe cumplir una determinada condición
     */

    /**
     *TODO Primary key
     */

    /**
     ** Sintaxis: nombre_campo tipo_dato PRIMARY KEY
     */

    /**
     *TODO MyPHPAdmin
     */

    echo <<<HTML

        <h1>MyPHPAdmin</h1>

        <p>MyPHPAdmin es una herramienta que permite administrar bases de datos MySQL</p>

        <p>Para acceder a MyPHPAdmin, se debe ingresar a la siguiente URL: <a href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a></p>

        <br>

        <p>Para ingresar a MyPHPAdmin, se debe utilizar el usuario root y la contraseña que se estableció durante la instalación de MySQL</p>

        <br>

        <p>MyPHPAdmin permite crear, modificar y eliminar bases de datos, tablas, registros, etc.</p>

        <br>

        <img src="images/5.png" alt="5">
        <br>
        <img src="images/6.png" alt="6">
        <br>
        <img src="images/7.png" alt="7">
        <br>
        <img src="images/8.png" alt="8">

    HTML;

    /**
     *TODO Comandos DML (Data Manipulation Language)
     */

    /**
     ** Los comandos DML se utilizan para insertar, modificar y eliminar registros
     */

    /**
     ** INSERT INTO: inserta un registro en una tabla. Sintaxis: INSERT INTO nombre_tabla (nombre_campo, nombre_campo, ...) VALUES (valor_campo, valor_campo, ...)
     ** UPDATE: modifica uno o más registros de una tabla. Sintaxis: UPDATE nombre_tabla SET nombre_campo = valor_campo, nombre_campo = valor_campo, ... WHERE condicion
     ** DELETE FROM: elimina uno o más registros de una tabla. Sintaxis: DELETE FROM nombre_tabla WHERE condicion
     */

    /**
     *TODO Comandos DQL (Data Query Language)
     */

    /**
     ** Los comandos DQL se utilizan para realizar consultas a la base de datos
     */

    /**
     ** SELECT: realiza una consulta a la base de datos. Sintaxis: SELECT nombre_campo, nombre_campo, ... FROM nombre_tabla WHERE condicion
     ** DISTINCT: indica que se deben mostrar solo los valores distintos. Sintaxis: SELECT DISTINCT nombre_campo, nombre_campo, ... FROM nombre_tabla WHERE condicion
     ** FROM: indica la tabla de la cual se deben recuperar los datos. Sintaxis: SELECT nombre_campo, nombre_campo, ... FROM nombre_tabla WHERE condicion
     ** WHERE: indica la condición que deben cumplir los registros que se van a recuperar. Sintaxis: SELECT nombre_campo, nombre_campo, ... FROM nombre_tabla WHERE condicion
     ** ORDER BY: indica el orden en el que se deben mostrar los registros. Sintaxis: SELECT nombre_campo, nombre_campo, ... FROM nombre_tabla WHERE condicion ORDER BY nombre_campo [ASC|DESC]
     ** GROUP BY: agrupa los registros que tienen el mismo valor en un campo. Sintaxis: SELECT nombre_campo, nombre_campo, ... FROM nombre_tabla WHERE condicion GROUP BY nombre_campo
     ** HAVING: indica la condición que deben cumplir los grupos que se van a recuperar. Sintaxis: SELECT nombre_campo, nombre_campo, ... FROM nombre_tabla WHERE condicion GROUP BY nombre_campo HAVING condicion
     */

    /**
     *TODO Operadores lógicos
     */

    /**
     ** Los operadores lógicos se utilizan para combinar dos o más condiciones, se usan para filtrar los resultados de una consulta
     */

    /**
     ** AND: indica que se deben cumplir dos o más condiciones. Sintaxis: condicion1 AND condicion2
     ** OR: indica que se debe cumplir una condición u otra. Sintaxis: condicion1 OR condicion2
     ** NOT: indica que se debe cumplir la condición contraria. Sintaxis: NOT condicion
     */

    /**
     *TODO Operador LIKE
     */

    /**
     ** El operador LIKE se utiliza para buscar registros que contengan un determinado patrón. Sintaxis: campo LIKE 'patron'
     ** El patrón puede contener los siguientes caracteres especiales:
     ** %: representa cero, uno o varios caracteres
     ** _: representa un solo caracter
     */

    /**
     *TODO Between
     */

    /**
     ** El operador BETWEEN se utiliza para buscar registros que se encuentren dentro de un rango. Sintaxis: campo BETWEEN valor1 AND valor2
     */

    /**
     *TODO Introducción a PDO
     */

    /**
     ** PDO (PHP Data Objects) es una extensión de PHP que permite acceder a bases de datos, utilizando una interfaz orientada a objetos. Soporta los siguientes gestores de bases de datos: MySQL, PostgreSQL, SQLite, Oracle, etc.
     ** Unas de las principales ventajas de PDO es su capacidad para trabajar con parametros vinculados y consultas preparadas, lo cual permite evitar ataques de inyección SQL
     */

    /**
     ** Sintaxis para conectarse a una base de datos:
     ** $conexion = new PDO('mysql:host=nombre_servidor;dbname=nombre_base_datos', 'nombre_usuario', 'contraseña');
     */

    /**
     *TODO Excepciones y opciones de PDO
     */

    /**
     ** Las excepciones son errores que se producen durante la ejecución de un programa. En PHP, las excepciones se manejan utilizando bloques try/catch
     */

    /**
     ** PDO::ERRMODE_SILENT: es el modo por defecto, no lanza excepciones
     ** PDO::ERRMODE_WARNING: lanza una advertencia
     ** PDO::ERRMODE_EXCEPTION: lanza una excepción
     */

    /**
     *TODO Conexión a la base de datos
     */

    echo <<<HTML

        <img src="images/9.png" alt="9">
        <br>
        <img src="images/10.png" alt="10">

    HTML;

    /**
     *TODO Registro de datos
     */

    /**
     ** La clase PDOstatement contiene los métodos necesarios para ejecutar consultas SQL
     ** Una instancia de la clase PDOstatement se obtiene mediante el método prepare() de la clase PDO
     */

    /**
     ** Sintaxis para registrar datos:
     ** $sql = "INSERT INTO nombre_tabla (nombre_campo, nombre_campo, ...) VALUES (:nombre_campo, :nombre_campo, ...)";
     ** $sentencia = $conexion->prepare($sql);
     ** $sentencia->bindParam(':nombre_campo', $variable);
     ** $sentencia->execute();
     */

    /**
     *TODO API REST
     */

    /**
     ** API (Application Programming Interface) es un conjunto de funciones que permiten la comunicación entre aplicaciones. Un API proporciona una forma estandarizada y estructurada de comunicarse entre aplicaciones. Existen diferentes tipos de API: SOAP, REST, XML-RPC, etc.
     ** REST (Representational State Transfer) es un estilo de arquitectura de software que define un conjunto de restricciones para crear servicios web
     */

    /**
     *TODO Métodos API
     */

    /**
     ** GET: se utiliza para obtener datos de un recurso
     ** POST: se utiliza para crear un nuevo recurso
     ** PUT: se utiliza para actualizar un recurso
     ** DELETE: se utiliza para eliminar un recurso
     */

    /**
     *TODO Códigos de estado en Response HTTP
     */

    /**
     *TODO Respuestas informativas
     */

    /**
     ** 100 Continue: indica que todo está bien y que el cliente puede continuar con la petición
     ** 101 Switching Protocols: indica que el servidor va a cambiar el protocolo
     ** 102 Processing: indica que el servidor ha recibido la petición y que la está procesando
     ** 103 Early Hints: indica que el servidor está enviando información adicional antes de que se envíe la respuesta final
     */

    /**
     *TODO Respuestas satisfactorias
     */

    /**
     ** 200 OK: indica que la petición se ha realizado correctamente
     ** 201 Created: indica que la petición se ha realizado correctamente y que se ha creado un nuevo recurso
     ** 202 Accepted: indica que la petición se ha recibido pero que aún no se ha procesado
     ** 203 Non-Authoritative Information: indica que la petición se ha realizado correctamente pero que el contenido de la respuesta puede provenir de un servidor diferente
     ** 204 No Content: indica que la petición se ha realizado correctamente pero que no hay contenido para enviar
     ** 205 Reset Content: indica que la petición se ha realizado correctamente pero que el cliente debe restablecer la vista que está mostrando
     ** 206 Partial Content: indica que la petición se ha realizado correctamente pero que solo se ha enviado una parte del contenido
     ** 207 Multi-Status: indica que la petición se ha realizado correctamente pero que hay más de un resultado
     ** 208 Already Reported Multi-Status: indica que la petición se ha realizado correctamente pero que el resultado ya se ha enviado en una respuesta anterior
     ** 226 IM Used: indica que la petición se ha realizado correctamente pero que el servidor está devolviendo una respuesta diferente a la que se esperaba
     */

    /**
     *TODO Redirecciones
     */

    /**
     ** 300 Multiple Choices: indica que la petición tiene más de una posible respuesta
     ** 301 Moved Permanently: indica que el recurso solicitado se ha movido permanentemente a una nueva URL
     ** 302 Found: indica que el recurso solicitado se ha movido temporalmente a una nueva URL
     ** 303 See Other: indica que el recurso solicitado se ha movido temporalmente a una nueva URL y que se debe utilizar el método GET para obtenerlo
     ** 304 Not Modified: indica que el recurso solicitado no se ha modificado desde la última vez que se solicitó
     ** 305 Use Proxy: indica que el recurso solicitado solo está disponible a través de un proxy
     ** 306 Switch Proxy: este código de estado ya no se utiliza
     ** 307 Temporary Redirect: indica que el recurso solicitado se ha movido temporalmente a una nueva URL y que se debe utilizar el mismo método para obtenerlo
     ** 308 Permanent Redirect: indica que el recurso solicitado se ha movido permanentemente a una nueva URL y que se debe utilizar el mismo método para obtenerlo
     */

    /**
     *TODO Errores del cliente
     */

    /**
     ** 400 Bad Request: indica que la petición no se ha podido procesar debido a un error del cliente
     ** 401 Unauthorized: indica que la petición no se ha podido procesar porque el cliente no está autorizado
     ** 402 Payment Required: este código de estado ya no se utiliza
     ** 403 Forbidden: indica que la petición no se ha podido procesar porque el servidor se niega a responder
     ** 404 Not Found: indica que el recurso solicitado no existe
     ** 405 Method Not Allowed: indica que el método utilizado en la petición no está permitido
     ** 406 Not Acceptable: indica que el servidor no puede devolver el contenido solicitado en el encabezado Accept de la petición
     ** 407 Proxy Authentication Required: indica que el cliente debe autenticarse en el proxy antes de poder realizar la petición
     ** 408 Request Timeout: indica que el servidor ha cerrado la conexión debido a que la petición ha tardado demasiado
     ** 409 Conflict: indica que la petición no se ha podido procesar debido a un conflicto
     ** 410 Gone: indica que el recurso solicitado ya no está disponible y que no se conoce una nueva URL
     ** 411 Length Required: indica que la petición no se ha podido procesar porque falta el encabezado Content-Length
     ** 412 Precondition Failed: indica que la petición no se ha podido procesar porque no se cumple una condición previa
     ** 413 Payload Too Large: indica que la petición no se ha podido procesar porque el cuerpo es demasiado grande
     ** 414 URI Too Long: indica que la petición no se ha podido procesar porque la URL es demasiado larga
     ** 415 Unsupported Media Type: indica que la petición no se ha podido procesar porque el tipo de contenido no es compatible
     ** 416 Range Not Satisfiable: indica que la petición no se ha podido procesar porque el rango solicitado no es válido
     ** 417 Expectation Failed: indica que la petición no se ha podido procesar porque el servidor no puede cumplir con los requisitos del encabezado Expect de la petición
     ** 418 I'm a teapot: indica que la petición no se ha podido procesar porque el servidor es una tetera
     ** 421 Misdirected Request: indica que la petición no se ha podido procesar debido a que está dirigida a un servidor que no puede producir una respuesta
     ** 422 Unprocessable Entity: indica que la petición no se ha podido procesar porque el cuerpo de la petición no se puede analizar
     ** 423 Locked: indica que la petición no se ha podido procesar porque el recurso está bloqueado
     ** 424 Failed Dependency: indica que la petición no se ha podido procesar porque falla una dependencia
     ** 426 Upgrade Required: indica que la petición no se ha podido procesar porque el cliente debe actualizar a un protocolo superior
     ** 428 Precondition Required: indica que la petición no se ha podido procesar porque el servidor requiere que se cumpla una condición previa
     ** 429 Too Many Requests: indica que la petición no se ha podido procesar porque el cliente ha realizado demasiadas peticiones
     ** 431 Request Header Fields Too Large: indica que la petición no se ha podido procesar porque el servidor no puede procesar los encabezados de la petición
     ** 451 Unavailable For Legal Reasons: indica que la petición no se ha podido procesar debido a restricciones legales
     */

    /**
     *TODO Errores del servidor
     */

    /**
     ** 500 Internal Server Error: indica que la petición no se ha podido procesar debido a un error del servidor
     ** 501 Not Implemented: indica que la petición no se ha podido procesar porque el servidor no admite el funcionamiento requerido
     ** 502 Bad Gateway: indica que la petición no se ha podido procesar porque el servidor ha recibido una respuesta no válida
     ** 503 Service Unavailable: indica que la petición no se ha podido procesar porque el servidor no está disponible
     ** 504 Gateway Timeout: indica que la petición no se ha podido procesar porque el servidor no puede obtener una respuesta a tiempo
     ** 505 HTTP Version Not Supported: indica que la petición no se ha podido procesar porque la versión HTTP no es compatible
     ** 506 Variant Also Negotiates: indica que la petición no se ha podido procesar porque el servidor ha detectado una referencia circular al procesar la negociación de contenido
     ** 507 Insufficient Storage: indica que la petición no se ha podido procesar porque no hay suficiente espacio de almacenamiento
     ** 508 Loop Detected: indica que la petición no se ha podido procesar porque el servidor ha detectado un bucle infinito
     ** 510 Not Extended: indica que la petición no se ha podido procesar porque no se ha extendido el protocolo
     ** 511 Network Authentication Required: indica que la petición no se ha podido procesar porque el cliente debe autenticarse para poder realizar la petición
     */

    /**
     *TODO Tipos de autenticación
     */

    /**
     ** Autenticación basada en token (Token-based authentication): el cliente envía un token en cada petición y el servidor lo valida
     ** Autenticación básic (Basic authentication): el cliente envía el nombre de usuario y la contraseña codificados en Base64 en el encabezado Authorization de la petición
     ** Autenticación mediante API keys (API key authentication): el cliente envía una clave de API en el encabezado Authorization de la petición
     ** Autenticación mediante OAuth (OAuth authentication): el cliente envía un token de acceso en el encabezado Authorization de la petición
     */

    /**
     *TODO Implementando ApiRest (Slim)
     */

    /**
     ** Slim Framework es un micro framework PHP que permite crear aplicaciones web y API RESTful de forma rápida y sencilla. Slim Framework es un micro framework PHP que permite crear aplicaciones web y API RESTful de forma rápida y sencilla.
     */

    /**
     ** Características de Slim Framework:
     ** Enrutamiento: Slim Framework permite definir rutas para responder a las peticiones HTTP.
     ** Manejo de solicitudes y respuestas: Slim Framework permite manejar las solicitudes y respuestas HTTP.
     ** Contenedores de dependencias: Slim Framework permite definir contenedores de dependencias para gestionar las dependencias de la aplicación.
     ** Middleware: Slim Framework permite definir middleware para ejecutar código antes o después de que se ejecute la ruta.
     ** Plantillas: Slim Framework permite definir plantillas para generar el contenido de las respuestas.
     */

    /**
     ** Para crear un proyecto se siguen los siguientes pasos:
     ** Cree una carpeta para el proyecto.
     ** Haciendo uso de Composer cree un archivo composer.json con el siguiente contenido: { "require": { "slim/slim": "^3.0" } }
     ** Configure el sistema PSR 6 y el server request handler haciendo uso de Composer: composer require slim/psr7
     ** Cree un archivo index.php
     */

    /**
     *TODO Creación de una aplicación usando PHP+MySQL+PDO
     */

    echo <<<HTML

        <img src="images/11.png" alt="11">
        <br>
        <img src="images/12.png" alt="12">
        <br>
        <img src="images/13.png" alt="13">
        <br>
        <img src="images/14.png" alt="14">
        <br>
        <img src="images/15.png" alt="15">
        <br>
        <img src="images/16.png" alt="16">
        <br>
        <img src="images/17.png" alt="17">
        <br>
        <img src="images/18.png" alt="18">

    HTML;
?>