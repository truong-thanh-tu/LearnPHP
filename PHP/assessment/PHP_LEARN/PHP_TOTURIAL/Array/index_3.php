<?php
$mark = array(
    "mohammad" =>array(
        "plysics" =>35,
        "math"=>30,
        "chemistry"=>39
    ),
    "qadir" => array (
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),

    "zara" => array (
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);
 /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $mark['mohammad']['plysics'] . "<br />";

         echo "Marks for qadir in maths : ";
         echo $mark['qadir']['maths'] . "<br />";

         echo "Marks for zara in chemistry : " ;
         echo $mark['zara']['chemistry'] . "<br />";
?>