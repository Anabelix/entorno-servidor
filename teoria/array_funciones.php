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
?>