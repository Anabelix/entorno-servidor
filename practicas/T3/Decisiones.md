# Bucles y funciones
## Decisiones

    Crea una página web que genere 3 números aleatorios "mt_rand()", con sentencias condicionales los asigna a tres variables: mayor, mediano y pequeño. Después los mostrará en h1, h2 y h3 respectivamente.

## Bucles

    Crea una página web que recorra una variable de tipo cadena accediendo a cada letra y escriba cada una en un h4. Usa for

    Crea una web similar a la anterior pero que pare al finalizar la cadena o al encontrar el carácter 'a', tanto minúscula como mayúscula. Usa While

    Crea una página web que escriba span con números aleatorios entre 0 y 100, el proceso parará cuando el número acabe en 17 o sea primo.

    Crea una función que escriba lo parámetros recibidos por la URL en una tabla.

    index.php?valor=estoy&act=recorriendo&un=array
    Table 	Valor
    valor 	estoy
    act 	recorriendo
    un 	array


## Funciones

    [15 min] Crea una función que sume todos los números entre dos parámetros dados: inicio y fin. PRUEBAS: Escribe una web que llame a la función 10 veces con números aleatorios entre 0 y 20.

    [15 min] Crea una función que concatene todas las cadenas pasadas como parámetro utilizando el primer parámetro como seprador. PRUEBAS: Escribe una web que llame a la función 3 veces con cadenas.

    echo concatena(" ", "Hola", "mundo", "!"); // Hola mundo !
    echo concatena(".", "Esto", "son", "varias", "cadenas", "puntos"); //Esto.son.varias.cadenas.puntos

    [25 min] Crea una función que genere un array asociativo que contenga información de los parámetros. La función irá descubriendo los tipos

    Funciones: gettype, array_key_exists o in_array o isset

    $analisis = analizParámetros(3, "h", 'hola', [1,2,3], [1], "h");
    print_r($analisis)

    Imprime:

    >[
    >'int' => 1,
    >'string' => 3,
    >'array' => 2
    >]
