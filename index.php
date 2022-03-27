<?php 

    $num = 5;
    $str = "kyaw kyaw";

    $arr = ["x","y","z"];

    $asso = [

        "name" => "kyaw pyae sone",
        "age" => 26,
        "status" => false

    ]; 

    echo $num;
    echo "<br/>";

    echo $str;
    echo "<br/>";

    print_r($arr);
    echo "<br/>";

    print_r($asso);
    echo "<br/>";

    function phpfun(){

        echo "hay hay boi";
    };

    phpfun();

    echo "<br/>";


    $x = true;

    if($x){

        echo "true statement";

    }else{

        echo "false statement";

    };

    echo "<br/>";

    var_dump($x);

    for($i=0 ; $i < 10 ; $i++){

        echo "looping $i <br/>";

    };