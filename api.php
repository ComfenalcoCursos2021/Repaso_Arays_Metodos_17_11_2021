<?php
    header("Content-Type: application/json");
    $_DATA = file_get_contents("php://input");
    if($_DATA){
        $_DATA = json_decode($_DATA, true);
        extract($_DATA);
    }else{
        $nombre = (string) "";
    }

    
    for ($i=0; $i < 10; $i++) { 
        $array5[] = random_int(1, 100);
    };
    print_r($array5);

    $duplicado = (array) array_slice(
        array: $array5, 
        offset: 0,
        length: -5,
        preserve_keys: true
    );

    print_r($duplicado);













    // $array4 = (array) [];
    // array_push(
    //     $array4,
    //     "Miguel", "Angel", "Castro"
    // );
    // print_r($array4);
    
    // $res4 = array_shift(array: $array4);

    // print_r($array4);
    // print_r("\n");
    // print_r($res4);
    // print_r("\n");

    // $res4 = array_shift(array: $array4);

    // print_r($array4);
    // print_r("\n");
    // print_r($res4);
    








    // $i = (int) 1;
    // $config = (object) [];
    // $config->flags = EXTR_PREFIX_ALL;
    // $config->prefix = "array3_Eliminados";
    // $array3 = (array) [
    //     0 => "Miguel",
    //     1 => "Angel",
    //     2 => "Castro"
    // ];
    
    // $listaEliminados = function() use(&$array3, &$i):array{
    //     $Eliminados = (array) [
    //         $i => array_pop(array: $array3)
    //     ];
    //     $i++;
    //     return $Eliminados;
    // };
    // extract($listaEliminados(), $config->flags, $config->prefix );
    // extract($listaEliminados(), $config->flags, $config->prefix );

    // print_r($array3_Eliminados_1);
    // print_r($array3_Eliminados_2);
   
    












    // $array2 = (array) [];
    // $unshift = function(mixed $data) use(&$array2):void{
    //     (int) array_unshift(
    //         $array2,
    //         $data
    //     );
    // };

    // $unshift("Miguel"); 
    // $unshift("Angel");
    // $unshift("Castro");

    // print_r($array2);
    // print_r(count($array2));








    // $array = (array) [];
    // $res = (int) array_push(
    //     $array, 
    //     "Miguel","Angel","Castro"
    // );

    // print_r($array);
    // print_r($res);















    //Array Enumerados
    // $lista = (array) [];
    // $lista[0] = "Hola";
    // $lista[1] = 23;


    //Arrays Asociativos
    // $lista2 = (array) [
    //     "NOMBRE" => (string) "aaaa"
    // ];


    //Lista de Objetos
    // $obj = (object) [];
    // $obj->NOMBRE = (string) "aaaa";
    

    //Convertir un array 'Enumero o Asociativos' en objetos
    // settype($lista, "object");
    
?>