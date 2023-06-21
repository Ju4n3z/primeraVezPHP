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

    function sumar(int $numero1 = 0, array $numero2): void {
        echo $numero1 + $numero2;
    }
    sumar(10, []);

    function sumar2(int $numero1 = 0, array $numero2) {
        echo $numero1 + $numero2;
    }
    sumar2(10, []);

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

    class Persona {
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

    echo Persona::saludar();

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

    class Persona {
        use Saludar;

        public function __construct(private string $nombre) {
        }
    }

    $persona = new Persona('Juan');
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

    $detalles = new Detalles();
    $clientes = new Clientes();

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
?>