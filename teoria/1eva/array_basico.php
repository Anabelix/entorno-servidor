<?php
      /*---------------------------------------------------------------------------ARRAYS--------------------------------------------------------------
      Los arrays son mapas ordenados en donde una clave (indice) está asociado a un valor.
      Se puede escribir de las siguientes formas: */
      	$array = array(
      		"clave_uno"=>"valor_uno",
      		"clave_dos"=>"valor_dos",
      		"clave_xxx"=>"valor_xxx",
      	);

      //A partir de PHP 5.4
      	$array = [
      	  "clave_uno"=>"valor_uno",
      	  "clave_dos"=>"valor_dos",
      	  "clave_xxx"=>"valor_xxx",
      	];

      /*Las claves pueden ser un integer o un string. El valor puede ser de cualquier tipo. 
      Hay que tener en cuenta los siguientes aspectos con respecto las claves: 
      Si la clave es una cadena que contiene un número y no lleva delante el signo +, se transformará en integer entero valido 
      Ej: "8" -> 8. "08" -> No se convierte en 8. 
      Los decimales floats seran convertidos a integer sin la parte decimal: 
      Ej: 8.7 -> 8. 
      Los booleans se transformarán en enteros: 
      Ej: TRUE -> 1. FALSE -> 0. 
      Una clave null se almacenará como string vacío -> "" 
      Ej: null -> "" 
      Los arrays y objetos no se pueden utilizar como claves. 
      Si se utilizan claves con el mismo valor, se sobreescibirán quedando como clave final la última.
      EJEMPLO:*/
      $array = array(
                      1    => "a",
                      "1"  => "b",
                      1.5  => "c",
                      true => "d",
      );
      var_dump($array);
      /* //RESULTADO:
      	array(1) {
      		[1]=> string(1) "d"
      	}
      Por otro lado, la clave es opcional. Si no se especifica entonces la clave empezará en 0.
      
      ACCESO A LOS ELEMENTOS DE ARRAY CON SINTAXIS DE CORCHETE:
      Cuando usamos la expresion array[key] estamos accediendo a su valor.*/
      $array = [
      	          "foo" => "bar",
      	          42    => 24,
      	          "multi" => [ "dimensional" => ["array" => "foo"]
      			              ]
      ];
      var_dump($array["foo"]);
      var_dump($array[42]);
      var_dump($array["multi"]["dimensional"]["array"]);
      /* //RESULTADO:
      String "bar"
      Integer 24
      String "foo"
      
      MODIFICACION DEL VALOR DE UN ARRAY EN DETERMINADA CLAVE:*/
      $array = [2=>3, 5=>7];
      print_r($array);
      /* //RESULTADO
      Array
      (
          [2] => 3
          [5] => 7
      )*/
      
      $array[]="nuevo"; //Se añade un nuevo elemento cuya clave es el siguiente numero entero valido.
      print_r($array);
      /* //RESULTADO
      Array
      (
          [2] => 3
          [5] => 7
          [6] => nuevo
      )*/
      
      $array[2]="sustitucion"; //Al ya existir la clave, el valor se sobreescribe.
      print_r($array);
      /* //RESULTADO
      Array
      (
          [2] => sustitucion
          [5] => 7
          [6] => nuevo
      )*/
      
      /*CÓMO SABER SI EXISTE UNA CLAVE EN UN ARRAY
      Con la funcion isset() podemos saber si existe una clave determinada en un array. 
      Esta funcion nos devuelve un booleano.*/
      $frutasVerano=["piña", "melon", "sandia"];
      var_dump(isset($frutasVerano[2])); //true
      echo "<br>";
      var_dump(isset($frutasVerano[3])); //false
      echo "<br>";
      
      /*Con la funcion array_key_exists podemos saber si determinada key existe o no en el array.*/
      var_dump(array_key_exists(0, $frutasVerano)); //true
      
      /*-------------------ARRAY_KEY_EXISTS() VS ISSET()-----------------------
      Array:key_exists nos dice si una clave existe o no en el array. Nos devuelve un boleano.
      Isset nos dice si una clave existe y NO es nula en el array. Nos devuelve un boleano.
      */

      $arr = ["a"=>1, "b"=>null];
      var_dump(array_key_exists("b", $arr)); //True porque existe aunque sea de valor nulo.
      var_dump(isset($arr["b"]));  //False porque aunque existe posee un valor nulo.

      /*TAMAÑO DE UN ARRAY
      Con la funcion count() podemos saber el tamaño de un array.
      La funcion sizeof() es semejante a count() ya que también retorna el total de elementos que hay en el array*/
      $frutas=[ "verano"=> ["piña", "melon", "sandia"], 
                "invierno"=> ["naranja", "caqui", "chirimoya"], 
                "atemporales"=>["pera", "manzana", "platano"],
              ];
      echo count($frutas)."<br>"; //3
      echo sizeof($frutas)."<br>"; //3

      //Recursivo para saber la cantidad total de elementos y subelementos del array $frutas.
      echo count($frutas, 1)."<br>"; //12
      echo sizeof($frutas, 1)."<br>"; //12

      /*AÑADIR ELEMENTOS A UN ARRAY
      Con la expresion $array[]=valor podemos añadir un elemento a un array siempre y cuando no exista ya una clave nula. 
      Por otro lado, si usamos $array[key]=valor; y esa key no existe tambien añadimos ese elemento al array.

      Con la funcion array_push($array, valor1, valor2, ...) añadimos uno o varios elementos al final del array.*/
      $frutasVerano[]="cerezas";
      echo "<pre>";
      print_r($frutasVerano);
      echo "</pre>";

      array_push($frutasVerano, "higo", "paraguaya", "nectarina");
      echo "<pre>";
      print_r($frutasVerano);
      echo "</pre>";

      /*Si el array es del tipo asociativo entonces utilizaremos la sintaxis de corchete: $array[key]=value */
      $frutas["otoño"]=["kiwi", "granada", "uvas"];
      echo "<pre>";
      print_r($frutas);
      echo "</pre>";

      /*ELIMINAR ELEMENTOS DE UN ARRAY
      Con la funcion array_pop() eliminamos el ultimo elemento del array y nos retorna ese valor. 
      Con la funcion array_shift() eliminamos el primer elemento del array y nos retorna ese valor. 
      Cuando utilizamos esta funcion el array se reindexa automaticamente 
      pero si hay una clave asociativa esa permanece igual.*/
      $array = ["a", "b", 50 => "c", "d", "hehe"=> "e", "f", "g"];
      echo "<pre>";
      print_r($array);
      echo "</pre>";
      /* //RESULTADO:
      Array
      (
          [0] => a
          [1] => b
          [50] => c
          [51] => d
          [hehe] => e
          [52] => f
          [53] => g
      ) */
      
      echo array_pop($array);
      echo "<pre>";
      print_r($array);
      echo "</pre>";
      /* //RESULTADO:
      g
      Array
      (
          [0] => a
          [1] => b
          [50] => c
          [51] => d
          [hehe] => e
          [52] => f
      ) */

      echo array_shift($array);
      echo "<pre>";
      print_r($array);
      echo "</pre>";
      /* //RESULTADO:
      a
      Array
      (
          [0] => b
          [1] => c
          [2] => d
          [hehe] => e
          [3] => f
      ) */

      /*Con la funcion unset eliminamos el elemento o elementos que especificamos del array. 
      Si no especificamos la clave entonces se eliminará todo el array. Unset no reindexa el array.*/
      unset($array[1], $array[2]);
      echo "<pre>";
      print_r($array);
      echo "</pre>";
      /* //RESULTADO:
      Array
      (
          [0] => b
          [hehe] => e
          [3] => f
      ) */

      /*
      unset($array);
      echo "<pre>";
      print_r($array);
      echo "</pre>"; 

      //RESULTADO: PHP Warning:  Undefined variable $array in /workspace/Main.php on line 30 */

      /*Al no reindexar el array y eliminamos todas las claves existentes, el array queda vacio pero
      el proximo elemento tendra como clave el maximo numero entero que le corresponde.*/
      $numeros = [1,2,3];
      echo "<pre>";
      print_r($numeros);
      echo "</pre>";
      /* //RESULTADO:
      Array
      (
          [0] => 1
          [1] => 2
          [2] => 3
      ) */

      unset($numeros[0], $numeros[1], $numeros[2]);
      echo "<pre>";
      print_r($numeros);
      echo "</pre>";
      /* //RESULTADO:
      Array
      (
      ) */

      $numeros[]="nuevo elemento";
      echo "<pre>";
      print_r($numeros);
      echo "</pre>";
      /* //RESULTADO:
      Array
      (
          [3] => nuevo elemento
      ) */

      /*CASTING
      Podemos convetir variables en arrays realizando un casting. 
      Cuando la variable es null entonces se crea un array vacio*/
      $x=null;
      $y=5;
      $z="hoja";

      print_r((array) $x);
      /* //RESULTADO: 
      Array
      (
      ) */

      print_r((array) $y);
      /* //RESULTADO
      Array
      (
          [0] => 5
      ) */

      print_r((array) $z);
      /* //RESULTADO
      Array
      (
          [0] => hoja
      ) */
?>
