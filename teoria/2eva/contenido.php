<?php
$contenidos = [
    "TIPOS DE DATOS Y VARIABLES" => "Variables
    Tipos de datos: cadenas
    Concatenación de cadenas
    Tipos de datos: números enteros
    Tipos de datos: punto flotante
    Tipo de dato: Booleano
    Variables de variables y constantes
    Secuencias de escape para caracteres Unicode
    Los tipos de datos compuestos y especiales
    Forzar el tipo de dato
    Eliminar una variable con unset()
    PHP 8.1: Notación numérica octal explícita
    PHP 8.2: Tipos stand-alone null, false, y true
    Apuntes a la sección 2: : Tipos de datos y variables",
    
    "OPERADORES PHP"=>"Introduccion a los operadores y sus conceptos en PHP
    Operadores aritméticos
    Los operadores de asignación y los operadores abreviados o atajos
    Operadores de bit a bit
    Operadores de comparación
    Operadores Lógicos
    Otros operadores en PHP
    La precedencia de los operadores
    El operador de fusión de null
    Operador nave espacial
    PHP 8: Operador nulo seguro: nullsafe
    PHP 8: Comparaciones inteligentes
    Apuntes a la sección 3: Operadores en PHP",

    "SENTENCIAS CONDICIONALES"=>"Sentencias condicionales
    Operadores condicionales anidados
    Crear rangos con operadores condicionales
    Sintaxis alterna a las sentencias condicionales
    Sintaxis alterna a las sentencias condicionales
    La estructura condicional switch
    PHP8: La estructura condicional match
    Apuntes a la sección 4: Estructuras condicionales",

    "ESTRUCTURAS CICLICAS"=>"El ciclo WHILE
    El ciclo do... while
    El ciclo for()
    Los comandos break y continue
    Apuntes a la sección 5: Estructuras Cíclicas",

    "CREACION Y MANEJO DE ARREGLOS"=>"Crear arreglos
    El ciclo foreach
    Arreglos asociativos
    Algunas funciones de los arreglos
    Ordenamiento de arreglos
    Ordenar los arreglos asociativos
    Desordenar un arreglo y selección aleatoria de elementos de un arreglo
    Funciones para ordenar arreglos en forma ascendente y descendente
    Funciones de navegación de elemento en un arreglo
    Arreglos constantes con define()
    La función var_dump() para mostrar el contenido de una variable
    La función print_r() para visualizar una variable, arreglo u objeto
    Los arreglos multidimensionales
    Arreglos globales o 'superglobals'
    El comando List() para asignar valores de arreglos
    Funciones para arreglos asociativos
    Cambia una clave de un arreglo asociativo en tiempo de ejecución
    Hacer referencia al resultado arreglo de funciones
    PHP 8.1: Desempaquetar (desestructuración) los arreglos con cadenas
    Apuntes a la sección 6: Arreglos",

    "CREACIÓN DE FUNCIONES PERSONALIZADAS"=>"Crear y llamar a una función
    El alcance de las variables
    Regresar un valor de una función
    Argumentos o parámetros por referencia o por valor
    Valores predeterminados de argumentos
    Declaraciones de tipo en las funciones
    Declaraciones de tipo de devolución
    Tipificación estricta
    Listas de argumentos de longitud variable
    Crear generadores en PHP
    Utilizar yield para facilitar valores con clave desde un generador
    El uso de la sentencia Return en los generadores
    Delegación de generadores
    El super arreglo \$GLOBALS vs. global
    Las funciones anónimas en PHP
    Tomar valores externos desde una función anónima
    Modificaciones al arreglo \$GLOBALS
    PHP 8.0: Parámetros nombrados
    PHP 8.0: Unión de tipos
    PHP 8.0: Comas finales en las listas de parámetros
    PHP 8.1: Aceptar la iniciación de objetos en los parámetros con new
    PHP 8.1: Tipo de retorno Never
    PHP 8.2: Tipos null, false y true
    Apuntes a la sección 7: Funciones",

    "VALIDACIÓN DE DATOS DE LOS FORMULARIOS"=>"Comunicación de un formulario con PHP
    Recibir variables simples
    Recibir variables múltiples
    Validación de cadenas
    Validación de arreglos con isset()
    Recibir campos ocultos de formas HTML
    Validar listas, primera parte
    Validar listas, segunda parte
    Validación de botones de radio
    Validar botones de verificación o checkboxes en un formulario
    Validar un formulario utilizando header()
    Usar plantillas de información desde un formulario HTML
    Apuntes a la sección 8: Validar formularios",

    "MANEJO DE FECHAS"=>"Uso de fechas con time() y date()
    La función getdate()
    La función mktime()
    Verificar una fecha con checkdate()
    Cambiar la zona horaria: date_default_timezone_set
    Convertir una cadena a fecha con strtotime()
    Microtime
    Ejemplo: calcular edades
    Apuntes a la sección 9: Manejo y verificación de fechas",

    "FORMATEO DE DATOS"=>"Formateo de un numero con printf()
    Salida a una cadena con sprinf()
    Formato de un número con number_format()
    Modificar la configuración local con setlocale()
    Serialización de objetos y arreglos
    Filtros para unserialize()
    Las funciones htmlentities y html_entity_decode
    Las funciones urlencode() y urldecode()
    Funciones addslashes() y stripslashes()
    Funciones htmlspecialchars() y strip_tags()
    Apuntes a la sección 10: Formateo de datos",

    "MANEJO DE CADENAS Y FUNCIONES MATEMATICAS"=>"Longitud de una cadena con strlen()
    Buscar una subcadena en una cadena: el comando strstr()
    Buscar una subcadena en una cadena: el comando strpos()
    Extraer una subcadena: el comando substr()
    Pasar una cadena a mayúsculas minúsculas: strtolower() y strtoupper()
    Reemplazar partes de una cadena: str_replace()
    Sanear una cadena con PHP, la función str_replace()
    Crear una cadena aleatoria con str_shuffle()
    Convertir caracteres especiales de texto a HTML
    Ajusta la longitud de una cadena: wordwrap()
    Dividir una cadena en diferentes cadenas: explode()
    Limpiar cadenas: trim(), ltrim() y rtrim()
    Cambiar la primera letra a mayúsculas
    Crear un identificador único con uniqid()
    Verificar si es un número con is_number
    Redondear valores
    Funciones trigonométricas
    La función range()
    Generar números aleatorios
    Exponentes y raíz cuadrada
    Cambio de bases
    Recuperar la parte entera y la parte decimal de una división
    Funciones de CSPRNG
    Funciones BC Math
    Otras funciones Random
    Apuntes de la sección 11: Funciones matemáticas y de cadenas",
    
    "MANEJO DE ARCHIVOS"=>"Verificar si exsite un archivo: file_exists()
    Determinar si es un archivo o un directorio: is_file(), is_dir()
    Propiedades de un archivo: file_size()
    Leer el contenido de un directorio: opendir() y readdir()
    Constantes predefinidas
    Leer el contenido de una carpeta o directorio con scandir()
    Conocer la ruta de un archivo con dirname(), basename(), realpath()
    Leer el nombre de los archivos y carpetas con glob()
    Utilizar recursivamente glob()
    El manejo de content-type con header()
    Apuntes a la sección 12: Manejo de archivos y directorios en el servidor",
    
    "ARCHIVOS DE DATOS EN EL SERVIDOR"=>"El comando touch()
    Borrar un archivo, el comando unlink()
    Modos de abrir un archivo
    Leer un archivo de datos
    Escribir en un archivo de datos
    Añadir datos a un archivo
    Proteger los archivos con flock()
    Copiar y renombrar archivos
    Leer un archivo CSV con fgetcsv()
    Crear un archivo con formato CSV
    Leer todo un archivo en una cadena con file_get_contents()
    Crear un contador de visitas con un archivo de datos
    Las clases file_get_contents() y file_put_contents()
    Apuntes a la sección 13: Archivos de datos",

    "CREAR, MODIFICAR Y ELIMINAR LAS GALLETAS O COOKIES"=>"Crear una cookie
    Leer una cookie
    Borrar una cookie
    Crear un contador de visitas con cookies
    Almacenar datos de configuración del usuario con cookies
    Almacenar los datos del usuario en un login con cookies
    Otros parámetros seguros de las galletas
    Crear una barra de verificación de políticas de Cookies: HTML
    Apuntes a la sección 14: Manejo de galletas o cookies",

    "CONEXION CON MYSQL"=>"
    Crear una tabla desde PHPMySQL
    Conectar una base de datos MySQL con PHP
    Las sentencias include y require
    Insertar un registro en la base de datos
    Borrar un registro de una tabla
    Modificar un registro de la tabla
    Seleccionar archivos de una tabla, el comando SELECT
    Establecer el conjunto de caracteres para la base de datos
    Recuperar el último “id” insertado
    Leer un archivo CSV e insertarlo en una tabla MySQL
    Verificar que los datos no se dupliquen.
    Bajar la información de MySQL a CSV
    Validar una cadena con mysqli_real_escape_string()
    Apuntes a la sección 15: Conexión a MySQL (procedural)",

    "MANEJO DE IMAGENES CON PHP"=>"Revisar e instalar la librería GD para manejar las imágenes de PHP
    Galería de fotos desde una carpeta
    Tabla de imágenes tomándola de una carpeta
    Advertencia para una imagen
    Borrar físicamente la imagen
    Parámetros para la optimización de una imagen
    Optimiza la imagen por un porcentaje
    Optimizar una imagen segunda parte
    Optimizar una imagen por su ancho en forma proporcional
    El uso de filtros a una imagen: imagefilter()
    El uso de filtros a una imagen (segunda parte): imagefilter()
    Subir un archivo desde la computadora al servidor
    Validar el tipo de archivo subido
    Subir una imagen de PHP a la base de datos MySQL
    Guardar la imagen y desplegar una tabla
    Desplegar una columna binaria de MySQL desde PHP
    De BLOB a un archivo de imagen
    Subir varios archivos de la máquina del cliente al servidor
    Leer una imagen en disco y cargarla a memoria en un objeto o resource
    Añadir una marca de agua a una imagen
    Cortar una imagen y almacenarla en diferentes archivos
    Crear una máscara circular a una imagen
    Rotar una imagen con imageflip()
    Rotar una imagen con imagerotate()
    Cambiar el tamaño de las imágenes con imagescale()
    Dibujar rectángulos con PHP función imagerectangle()
    Crear elipses o círculos con imagefilledellipse() y imageellipse()
    Dibujar arcos con PHP con la librería GD
    Dibujar un polígono con PHP con la librería GD
    Dibujar líneas con PHP y la librería GD
    Mezclar imágenes y añadir texto con PHP
    Uso de las fuentes True Type (ttf)
    Apuntes a la sección 16: Manejo de imágenes con PHP",

    "EJEMPLOS Y EJERCICIOS"=>"Utilizar un mismo archivo con estados en PHP
    Mandar un mail desde PHP
    Mandar un correo en formato HTML desde PHP
    Calcula las edades con PHP
    Leer y mostrar una tabla de la base de datos
    Paginación básica de una tabla de MySQL con PHP
    Crear los botones HTML para la paginación con PHP
    Crear los botones inicio-fin en la paginación de una tabla con PHP
    Crear la imagen de un captcha con PHP
    Generar el texto aleatorio en el Captcha con PHP
    Llamar al captcha y verificarlo desde un formulario con PHP
    Conocer la IP, el browser y el sistema operativo del usuario
    Exportar un archivo CSV e importarla en multiples tablas en la base de datos
    Apuntes a la sección 17: Ejemplos y ejercicios",

    "TRABAJAR CON XML Y JSON DESDE PHP"=>"Conceptos generales para leer un documento XML desde PHP
    Crear el programa que lee un documento XML con PHP
    Escribir un documento XML desde PHP
    Leer el contenido de un archivo JSON desde PHP
    Escribir un archivo con formato JSON desde PHP
    Apuntes a la sección 18: Trabajar con XML y JSON con PHP",

    "INTRODUCCION A GOOGLE CHART CON PHP Y MYSQL"=>"Trabajar con XML y JSON desde PHP
    Conectar las gráficas de Google Chart con PHP y MySQL
    Desplegar más de una gráfica con Google Chart y PHP
    Generar una gráfica desde un archivo plano leído por PHP
    Graficar los datos de un archivo JSON leídos desde PHP
    Graficar los datos de un documento XML leídos desde PHP",

    "CREAR UN ARCHIVO PDF DESDE PHP CON FPDF"=>"Crear un PDF desde PHP con la libreria FPDF
    Crear un encabezado y un pie de página con FPDF
    Leer textos externos y crear un archivo PDF con FPDF
    Manejo de columnas en texto con FPDF
    Crear una tabla dinámica con FPDF y PHP",
    
    "MANEJAR SESIONES CON PHP"=>"Crear páginas privadas con session_start()
    Validar y cerrar una sesión de PHP con session_destroy() y unset()
    Limitar el tiempo de las sesiones con el comando time()
    El arreglo en la función session_start()
    Apuntes a la sección 21: Manejar sesiones con PHP",
    
    "LAS EXPRESIONES REGULARES EN PHP"=>"Expresiones regulares y PHP
    Validar un correo electrónico con expresiones regulares
    preg_replace_callback_array()
    Apuntes a la sección 22: Las expresiones regulares y PHP",

    "DEPURAR NUESTRO CODIGO CON ASERCIONES"=>"Las funciones assert() y assert_options() para depurar el código en PHP 5 y 7
    La función assert_options() en PHP 5 y 7
    El manejo del comando assert en forma tradicional, PHP 5 y 7
    Manejar la función assert() o exceptions
    Apuntes a la sección 23: Depurar el código con aserciones",

    "CREAR UN FILTRO PARA SANAR Y VALIDAR DATOS DE ENTRADA"=>"Introduccion a los filtros: filter_list() y filter_id()
    La función filter_var para sanear y validar
    La función filter_input() para filtrar o validar variables externas
    La función filter_var_array() para sanear o filtrar varias variables en arreglo
    Manejo de banderas en diferentes filtros: filter_has_var()
    El uso de FILTER_CALLBACK
    Apuntes a la sección 24: Crear un filtro para sanear y validar datos externos",
    
    "PHP, XML, MYSQL Y AJAX (Y JS)"=>"Introducción a AJAX
    La instrucción XMLHTTPRequest
    Crear una solicitud o 'request': xmlhttp.send()
    Conceptos generales de un servidor Web
    Recuperar la información desde AJAX: responseText y responseXML
    El manejo de eventos en AJAX
    Llamar a archivos PHP desde AJAX
    Ligar el AJAX con Bases de datos (PHP+MySQL)
    Leer un archivo XML con AJAX generado desde PHP de una base de datos MySQL 1a
    Leer un archivo XML con AJAX generado desde PHP de una base de datos MySQL 2da
    Sugerir la captura de un archivo por medio de AJAX y PHP
    Crear filtros para la lectura de una tabla en MySQL con PHP y AJAX
    Leer un archivo XML desde PHP y desplegarlo en HTML por medio de AJAX
    Concluir la lectura de un catálogo XML con PHP y AJAX
    Crear un 'livesearch' con PHP, XML y AJAX, primera parte
    Crear un 'livesearch' con PHP, XML y AJAX, segunda parte
    Crear un lector de noticias RSS con AJAX y PHP, primera parte
    Crear un lector de noticias RSS con AJAX y PHP, segunda parte
    Crear una encuesta con PHP y MySQL
    Ejemplo: Crear un Scroll Infinito, el HTML
    Ejemplo: Crear un Scroll Infinito, el archivo PHP
    Ejemplo: Crear un Scroll Infinito, AJAX
    Ejemplo: Crear un Scroll Infinito, Desplegar
    Ejemplo: Crear un Scroll Infinito, Paginar
    Ejemplo: Crear un Scroll Infinito, manejar el scroll de la página
    Ejemplo: Botón de favorito con Ajax, HTML
    Ejemplo: Botón de favorito con Ajax, CSS
    Ejemplo: Botón de favorito con Ajax, el objeto XMLHttpRequest
    Ejemplo: Botón de favorito con Ajax, crear los archivos PHP
    Ejemplo: Botón de favorito con Ajax, crear una marca
    Ejemplo: Botón de favorito con Ajax, crear botón no-favorito
    Ejemplo: Botón de favorito con Ajax, manejo de sesiones
    Apuntes a la sección 25: PHP + MySQL + AJAX + XML + JSON + JS",

    "CREAR UNA APP DE ALTAS, BAJAS Y CAMBIOS (CRUD) DE UNA TABLA CON PHP"=>"Subir una imagen a una base de datos MySQL con PHP
    Desplegar una imagen almacenada en MySQL desde PHP
    Modificar y borrar un registro con imagen en MySQL
    Crear una pantalla de advertencia antes de borrar el registro
    Borrar definitivamente el registro de la base de datos
    Integrar el proceso de Alta en el archivo PHP
    Cambiar la imagen y su información en la base de datos
    Modificar el aspecto de la aplicación de alta, bajas y cambios con CSS
    Almacenar en un archivo en formato Base64 con PHP
    Apuntes a la sección 26: Crear una aplicación de altas, bajas y cambios",

    "CREAR ARCHIVOS PDF CON LA LIBRERIA HTML2PDF"=>"Instalar la libreria HTML2PDF y crear una salida 'Hola mundo'
    Algunos parámetros de la librería HTML2PDF
    Leer un archivo HTML externo
    Crear un botón y pasar parámetros
    Las etiquetas <page> y <bookmark> para crear un índice automático
    Apuntes a la sección 27: Crear archivos PDF con la librería HTML2PDF",

    "EL MANEJO DE ERRORES Y DE EXCEPCIONES EN PHP"=>"Manejo de errores en PHP
    Las sentencias die() y exit()
    Crear una rutina de error personalizada
    Enviar un mensaje de advertencia, error o noticia por el programador
    Modificar el error_log o enviar un correo cuando se lanza un error
    La creación de las excepciones
    'Atrapar' una excepción con try-throw-catch
    PHP 8: throw-expression
    Apuntes de la sección 28: Manejo de errores y excepciones en PHP",

    "ACCEDER A UNA BASE DE DATOS CON PDO"=>"Abrir una base de datos con PDO
    Realizar una transacción con PDO
    Crear una plantilla con PDO
    Crear una plantilla con arreglos
    Seleccionar los registros de la tabla SQLite con PDO
    Conectar MySQL con PDO (PHP Data Object)
    Insertar datos a una tabla MySQL con PDO
    Las instrucciones preparadas en MySQL con PDO
    Seleccionar los registros de la tabla MySQL con PDO",

    "ALGUNOS ASPECTOS DE SEGURIDAD EN PHP"=>"Parametros principales en php.ini
    Codificar y decodificar en Base64
    Encriptar y desencriptar una cadena con OpenSSL
    Encriptar una cadena por una vía con hash_hmac()
    Verificar las cadenas para la base de datos
    Encriptar una galleta o cookie
    Subir un archivo con PHP
    Principales validaciones al subir un archivo con PHP
    La clase finfo() para validar archivos
    Validar los errores y sanear el nombre del archivo al subir un archivo con PHP
    Cambiar el nombre del archivo subido con uniqid()
    Evitar la inyección de código PHP
    El operador de ejecución y la sentencia eval()
    Los mensajes de error en ambiente de Desarrollo y de Producción
    Restaurar claves de acceso
    Evitar un ataque 'por fuerza bruta' limitando el número de accesos
    Evitar un ataque 'por fuerza bruta' con reCaptcha",

    "CREAR SERVICIOS WEB O WEB SERVICES CON PHP"=>"Qué es un web service o servicio web
    CURL: Crear un servicio web o web service
    SOAP: Crear un servicio web
    SOAP: Pasar parámetros al servicio web
    WSDL: Web Services Description Language
    SOAP: Conectar un servicio web a una base de datos MySQL
    REST: Crear las bases de un servicio web
    REST: Modificar las URL para el servicio web
    REST: Conectar el servicio web a una base de datos
    REST: Crear los querys y consultar el servicio web
    REST: Usar los verbos de HTTP
    REST: Habilitar CORS
    REST: Conectar el servicio web con JavaScript y Ajax
    REST: Desplegar la información dinámicamente en un combo-box
    REST: Desplegar las imágenes en forma dinámica",

    "INTRO A POO EN PHP"=>"Principios generales de POO
    Crear una clase con PHP
    Crear un método de una clase con PHP
    Instanciar un objeto de una clase con PHP
    Crear propiedades de clase con PHP
    Crear el constructor de la clase
    Crear una función destruct para los objetos de nuestra clase
    Tipos de datos primitivos y tipos de clases
    Promoción de propiedades del constructor
    Conclusión a la sección 1: introducción a la creación de clases.
    Introducción a la programación orientada a objetos",

    "FUNDAMENTOS DE POO"=>"Introducción a Fundamentos a la POO
    La herencia en PHP, programación orientada a objetos
    Introducción al encapsulamiento en PHP
    Crear getters y setters
    Metodos mágicos __get y __set
    Métodos y propiedades estáticas con static
    Sobreescribir un método en una clase: overriding
    Scope resolution operator ::
    Clonar objetos en PHP con la sentencia clone
    PHP 8: Promoción de propiedades del constructor
    PHP 8.1: Propiedades de sólo lectura
    PHP 8.1: Aceptar la iniciación de objetos en los parámetros con new
    PHP 8.1: Constantes de clase final
    PHP 8.2. Clases de tipo readonly, sólo lectura
    PHP 8.2. Tipos de dato en formato DNF (Disjunctive Normal Form)
    Conclusión a la sección 2: Fundamentos a la programación orientada a objetos
    Fundamentos de la programación orientada a objetos",

    "OTROS TEMAS DE POO"=>"Introducción a otros temas a la POO
    Manejo de las constantes en clases
    Manejo de las clases en archivos externos
    Carga automática de clases externas con autoload
    Crear clases abstractas
    Crear interfaces en la programación orientada a objetos en PHP
    Iterar los elementos de una clase
    Terminar la jerarquía de clases y sobreescribir
    Comparación de instancias de clases
    Clases anónimas
    Los rasgos o traits
    Convertir una instancia de clase a cadena
    Métodos sobrecargados con __call()
    Verificar la existencia de una clase
    Verifica si existe un método
    La clase ReflectionClass
    Las constantes predefinidas en la programación orientada a objetos en PHP
    Heredar variables del ámbito padre en las funciones anónimas
    El uso \$this en las funciones anónimas
    Los métodos bind() y bindTo() de la clase Closure
    Closure::call()
    PHP 8.0: Permitir ::class en objetos
    PHP 8.2: Constantes en los traits
    Conclusión a la sección otros temas de la programación orientada a objetos",

    "ESPACIOS DE NOMBRE O NAMESPACE"=>"Introduccion a los espacios de nombres en PHP
    Introducción a la sección: espacios de nombres
    Los espacios de nombres o namespace en PHP
    Crear un sub espacio de nombres
    Definir varios espacios de nombres en un mismo archivo
    Llamar a los elementos de un espacio de nombres o namespace
    Uso dinámico de los elementos de los espacios de nombres en PHP
    La palabra reservada namespace y la constante __NAMESPACE__
    Uso de los espacios de nombres: el comando “use”
    Usar el espacio de nombres global
    Conclusión a la sección 4: Los espacios de nombres o namespace
    Espacios de nombre o namespaces",

    "CREAR UNA APP DE EJEMPLO"=>"Crear la clase para contactarnos a la base de datos
    Implementación de las tablas
    Crear la clase Album
    Crear las clases de Usuario y Estampa
    Métodos Select
    Crear la clase Sesión
    Crear la entrada a la aplicación o Login
    Proceso para validar el usuario
    Crear la página de inicio
    Obtener el identificador del usuario
    Crear el album del usuario
    Proceso de leer el álbum del usuario
    Desplegar el album del usuario
    Aplicar los estilos en cascada
    Crear el formulario para modificar el estado de una estampa
    Actualizar el estado de la estampa en la base de datos
    Obtener las estadísticas del álbum
    Desplegar la tabla de estadísticas
    Lanzar los parámetros de la búsqueda
    Cerrar la sesión del usuario
    Buscar una estampa faltante
    Apuntes de la sección 5: Desarrollar una aplicación de ejemplo",

    "OTRAS CLASES DEFINIDAS DE PHP"=>"Introducción a la clase DateTime
    Aritmética de fechas con DateTime()
    Introducción a la clase mysqli()
    Sentencias preparadas de mysqli()",

    "MANEJAR XML DESDE SIMPLEXML"=>"Herramientas para manejar XML desde PHP
    Cargar un documento XML con SimpleXML
    Acceder a los elementos y atributos con SimpleXML
    Manejo de cadenas en SimpleXML
    Etiquetas XML especiales
    Manejo de errores en SimpleXML
    El espacio de nombres en SimpleXML
    Obtener los espacios de nombres de un documento y un elemento
    Acceder a los elementos y atributos con espacios de nombres con SimpleXML
    SimpleXML y XPath
    Filtrar nodos por medio de XPath
    Modificar el prefijo de un Namespace con SimpleXML
    Editar y eliminar elementos en un documento XML
    Modificar, eliminar y almacenar documentos con NS
    Añadir nodos y atributos con simpleXML
    SimpleXML y DOMDocument
    Un iterador para SimpleXML
    Exportar un documento XML a una base de datos",

    "INTRODUCCIÓN A LAS LIBRERIAS ESTANDAR DE PHP (SPL)"=>"Introducción a la librería estándar de PHP (SPL) y los Iteradores
    El iterador de Directorios
    El iterador Filesystem
    El iterdaor RecursiveDirectoryIterator
    Información de los archivos
    Manejo de archivos con SPL
    Leer un archivo CSV
    Descargar un archivo temporal en formato CSV
    Filtrar los nombres de archivo con GlobIterator
    Iterador de expresiones regulares
    El iterador de expresiones regulares con XML
    El iterador LimitIterator
    Crear una paginación con LimitIterator, estructura
    Crear una paginación con LimitIterator, conclusión
    Crear un filtro con CallbackFilterIterator
    Crear una filtro recursivo con RecursiveCallbackFilterIterator
    Crear una filtro reusable
    Crear una filtro reusable recursivo
    Sobreescribir el constructor de RecursiveFilterIterator:
    Convertir arreglos a y un iterador a arreglo
    Leer un archivo en formato JSON
    Iterar en un arreglo múltiple
    Sobreescribir RecursiveIteratorIterator
    Combinar objetos iteradores con AppendIterator
    Mezclar iteradores con MultipleIterator
    Mezclar iteradores con MultipleIterator, ejemplo
    Crear un ciclo infinito con InfiniteIterator
    La clase CachingIterator
    La clase RecursiveCachingIterator
    RecursiveTreeIterator
    NoRewind y EmptyIterator
    Estructura de datos: Listas dobles
    Estructura de datos: Listas dobles FIFO, LIFO
    Estructura de datos: Stack y Queue",

    "FUNCIONES ANÓNIMAS"=>"Introducción a las funciones anónimas
    Tomar valores externos desde una función anónima
    Heredar variables del ámbito padre en las funciones anónimas
    El uso \$this en las funciones anónimas
    El SQL de SQLite
    El formato Heredoc de PHP para manejar cadenas
    Los métodos bind() y bindTo() de la clase Closure
    Bienvenida al curso de PHP y SQLite
    Introducción a SQLite
    Conectar una base SQLite a PHP
    Apuntes a la sección 1: Introducción a SQLite
    Closure::call()",

    "BONUS: HERRAMIENTA DE DESARROLLO WEB"=>"Seleccionar un color en una página web con ColorZilla
    Herramientas para encontrar colores armónicos
    Páginas para descargar fuentes e íconos
    Crear gradientes de forma sencilla por medio de dos herramientas
    Herramientas para las Cajas flexibles
    Herramientas para objetos SVG y Curvas Bezier Cuadráticas
    Herramienta para diseños display: grid;",

    "LAS ENUMERACIONES"=>"Introducción a las enumeraciones
    Valores de las enumeraciones
    Métodos e interfaces en las enumeraciones
    Métodos estáticos en los enumeradores
    Constantes y traits en las enumeraciones
    Uso de casos en las enumeraciones",

    "LAS FIBRAS O FIBERS"=>"Introducción a las fibras o fibers
    Crear una fibra
    Recuperar el valor final de una fibra
    Manejo de excepciones
    Detectar los estados de las fibras
    Ejemplo del uso de las fibras",

    "PHP 8.2: LA EXTENSION RANDOM"=>"Introducción a la extensión Random de la versión 8.2.",

    "A MANERA DE CONCLUSIÓN"=>"Despedida al curso 'Todo PHP, de novato a experto'
    Curso completo de PHP
    Curso de introducción a la programación orientada a objetos con PHP
    Ejercicios del curso Introducción a SQLite y PHP
    eBook del curso básico (pdf) y archivos del curso básico
    eBook del curso Programación Orientada a Objetos con PHP",
];

foreach ($contenidos as $key => $value) {
    var_dump(explode("\n", $contenidos[$key]));
}
?>
