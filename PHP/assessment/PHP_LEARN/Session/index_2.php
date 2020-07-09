<?php
$car_brands = array("Toyota","Honda","Suzuki");
foreach ($car_brands as $car){
    echo $car;
}
echo "<br>";
foreach ($car_brands as $key =>$car){
    $key++;
    echo "Hãng xe đứng thứ $key tên $car <br>";
    --$key;
}
echo count($car_brands);
echo "<br>";
echo print_r($car_brands);
echo "<br>";
$top_car_brands = [
    "Toyota"=>"Japan",
    "Honda"=>"Japan",
    "BMW"=>"German",
    "Ford"=>"USA",
    "Hyundai"=>"Korea",
];
foreach ($top_car_brands as $car => $country){
    echo "$car là hãng xe của $country <br>";
}
echo "<br>";
$students = [
    ["student_code"=>"MSSV_k32",
        "name"=>"Nguyen Van A",
        "gender"=>"Nam",
        "age"=>22],
    ["student_code"=>"MSSV_k33",
        "name"=>"Nguyen Van B",
        "gender"=>"Nam",
        "age"=>22]
];
print_r($students);
print_r($students[0]);