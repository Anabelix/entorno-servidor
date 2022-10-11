<?php
    require('printeoRechulon.php');
    
    /* 
    ARRAY_CHUNK: Divide un array en fragmentos.
    array_chunk(array $array, int $size, bool $preserve_keys = false): array
    */

    $array = [1,2,3,4,5];
    printeoDump($array);
    $fragmentado=array_chunk($array, 2);
    printeoMono($fragmentado, "array_chunk");
    echo "<hr>";

    /*
    ARRAY_COMBINE: Crea un array utilizando un primer array para las claves y un segundo para el valor. Lanza un error si el numero de elementos del primer array no coincide con el numero de elementos del segundo array.
    array_combine(array $keys, array $values): array
    */

    $array1=["a", "b", "c"];
    printeoDump($array1);
    $array2=["calabaza", "fantasmita", "bruja"];
    printeoDump($array2);
    $combinacion=array_combine($array1, $array2);
    printeoMono($combinacion, "array_combine");
    echo "<hr>";

    /* 
    ARRAY_FILTER: filtra elementos de un array utilizando una funcion anonima. Si no especificamos la funcion entonces filtrará los elementos del array quitando los que son FALSE.
    array_filter(array $array, ?callable $callback = null, $flag): array
    
    $flag:
    -ARRAY_FILTER_USE_KEY: Se le pasa a la funcion las claves como el valor con el que trabajar. 
    -ARRAY_FILTER_USE_BOTH: Se le pasa a la funcion las claves y el valor. */
    $numeros = [1,2,3,4,5,6,7,8,9,10];
    printeoDump($numeros);

    /* -----------------EXPRESION LAMBDA DE LA FUNCION-----------------
    $even=array_filter($numeros, fn($num) => $num%2==0);
    
    --------CREACION DE LA FUNCION Y LUEGO LLAMADA A LA FUNCION--------
    function pares ($array) {
        return ($array % 2 == 0);
    }
    $even=array_filter($numeros, "pares"); */

    /* -----FUNCION CON SINTAXIS COMPLETA EN EL MISMO ARRAY_FILTER-----*/
    $pares=array_filter($numeros, function ($numeros) {
        return ($numeros%2==0);
    });

    printeoMono($pares, "array_filter");

    $numeros = [1,2, false, 4, [], 0, 7, null, 9, '0'];
    $filtradoFalse = array_filter($numeros);
    printeoMono($filtradoFalse, "array_filter sin funcion callback");
    echo "<hr>";

    /* 
    ARRAY_VALUES: devuelve todos los valores de un array reindexado numericamente.
    array_values(array $array): array
    */
    $reindexado=array_values($pares);
    printeoMono($reindexado, "array_values");
    echo "<hr>";

    /* 
    ARRAY_KEYS: devuelve todas las claves de un array o las claves que especificamos que queremos buscar pasandole determinado valor. 
    array_keys(array $array): array
    array_keys(array $array, mixed $search_value, bool $strict = false): array
    
    $strict: realiza una comparacion estricta === durante la busqueda. 
    Ej: '15' no es lo mismo que 15.
    */
    $arr = ["a"=> 10, "b"=> 12, "c"=>30, "d"=>45, "e"=>"10"];
    printeoDump($arr);

    $clavesArray = array_keys($arr);
    printeoMono($clavesArray, "array_keys");
    
    $clavesArray = array_keys($arr, 10);
    printeoMono($clavesArray, "array_keys con busqueda especifica sin strict");

    $clavesArray = array_keys($arr, 10, true);
    printeoMono($clavesArray, "array_keys con busqueda especifica con strict");
    echo "<hr>";

    /*
    ARRAY_MAP: Ejecuta una funcion a todos los elementos del array. 
    Devuelve el array modificado.
    array_map(callable $callback, array $array1, array $... = ?): array
    */
    $num=[1,2,3,4,5];
    printeoDump($num);

    $mapeado=array_map( function ($numero) {
        return 2*$numero;
    }, $num );
    printeoMono($mapeado, "array_map");

    /*Si se envía un solo array entonces conserva las claves.
    Si se le envian dos arrays, el array resultante es reindexado.
    Si los arrays no tienen el mismo tamaño entonces los valores que faltan se resuelven como 0*/
    $arr1=['a'=>1, 'b'=>2];
    printeoDump($arr1);
    $arr2=['d'=>4, 'e'=>3, 'f'=>5];
    printeoDump($arr2);

    $mapeadoDos=array_map(fn($nm1, $nm2)=> ($nm1*$nm2), $arr1, $arr2);
    printeoMono($mapeadoDos, "array_map con 2 arrays de distinto tamaño");
    echo "<hr>";

    /* 
    ARRAY_MERGE: Permite combinar multiples arrays. Devuelve un array.
    Cuando tienen las mismas claves numericas no se sobreesciben, se añaden al final.
    El array resultante es reindexado. 
    array_merge(array $array1, array $... = ?): array
     */
    $arrayNum1=[1,2,3];
    $arrayNum2=[4,5,6];
    $arrayNum3=[7,8,9];
    printeoDump($arrayNum1);
    printeoDump($arrayNum2);
    printeoDump($arrayNum3);

    $merged=array_merge($arrayNum1, $arrayNum2, $arrayNum3);
    printeoMono($merged, "array_merged con tres arrays indexados");

    /* Cuando se trata de combinar arrays asociativos, las valores de las claves repetidas son sobreescritas. */
    $arrayNum1=['a'=>1, 'b'=>2, 'c'=>3];
    $arrayNum2=[4,5,6];
    $arrayNum3=['a'=>7, 'b'=>8, 'c'=>9];
    printeoDump($arrayNum1);
    printeoDump($arrayNum2);
    printeoDump($arrayNum3);

    $merged=array_merge($arrayNum1, $arrayNum2, $arrayNum3);
    printeoMono($merged, "array_merged con 1 array indexado y 2 asociativos");
    echo '<hr>';

    /* ARRAY_REDUCE: devuelve un unico valor al aplicar a todos los elementos del array indicados una función llamada de retorno.
    array_reduce(array $array, callable $callback, mixed $initial = null): mixed
    */
    $productos=[
        ['precio'=>2.5, 'cantidad'=>2],
        ['precio'=>7.25, 'cantidad'=>5],
        ['precio'=>3.99, 'cantidad'=>8],
        ['precio'=>0.55, 'cantidad'=>1],
    ];
    printeoDump($productos);

    $total = array_reduce($productos, 
    fn($retornado, $valor) => $retornado+=($valor['precio']*$valor['cantidad'])
    );
    printeoMono($total, "array_reduce: calcular el total de una compra");
    echo '<hr>';

    /* 
    ARRAY_SEARCH: Busca un valor determinado en un array y devuelve la clave que le corresponde si se ha encontrado y false si no. Es case sentive y además si el ultimo parametro se define como true hará una comparacion estricta de tipos ===.
    array_search(mixed $needle, array $haystack, bool $strict = false): mixed
    */
    $pajar=['rojo', 'azul', 'verde', 'amarillo', 'rosa', 'morado', 'naranja', 'rosa'];
    printeoDump($pajar);

    $palabraBuscar = 'rosa';
    $aguja=array_search($palabraBuscar, $pajar);

    $txtEncontrado ='<pre>La palabra '.$palabraBuscar.' se encuentra en el array';
    $txtNoEncontrado ='<pre>La palabra '.$palabraBuscar.' no se encuentra en el array</pre>';
    echo 'ARRAY_SEARCH: ';
    if ($aguja==false) {
        echo $txtNoEncontrado;
    } else {
        echo $txtEncontrado.' en la posicion '.$aguja.'</pre>';
    }
    echo '<hr>';

    /*
    IN_ARRAY: Comprueba si existe un valor en el array. Devuelve un boleano: true si lo encuentra, false si no.
    in_array(mixed $needle, array $haystack, bool $strict = false): bool
    */
    echo 'IN_ARRAY: ';
    $encontrado=in_array($palabraBuscar, $pajar);
    if (!$encontrado) {
        echo $txtNoEncontrado;
    } else {
        echo $txtEncontrado.'</pre>';
    }
?>