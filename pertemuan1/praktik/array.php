<?php

//
// Associative array
// Multidimensial Array 

    // $fruits = ["Mangga", "Anggur", "Durian"];

    // foreach ($fruits as $fruit) {
    //     echo $fruit . " ";
        
    // }


    // $dinos = [
    //     "dinoName" => "Tirex",
    //     "dinoAge" => 200,
    //     "isMarried" => "false"
    // ];

    // foreach ($dinos as $dino){
    //     echo $dino;
    //     echo '<br>';
    // }

    $dinos = [
        [
            "dinoName" => "Tirex",
            "dinoAge" => 300
        ],
        [
            "dinoName" => "Tricera",
            "dinoAge" => 500
        ],
        [
            "dinoName" => "Preta",
            "dinoAge" => 250 
        ],
    ];

    foreach ($dinos as $dino){
        echo $dino["dinoName"] . " = " .$dino ["dinoAge"] . " Tahun ";
        echo '<br>';
    }

?>