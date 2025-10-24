<?php

echo "<h1>Holle werls:</h1><br>";

print_r("Matěj<br>");

var_dump("POMOC<br><br><br><br><br><br><br><br><br><br><br><br>");

$age = $_GET['age'] ?? 0;

if ($age >= 18 && $age <= 100) {
    echo "můžeš";
} else {
    echo "GET OUT";
}


$cars = [
    "Volvo",
    "BMW",
    "Toyota",
];

var_dump($cars);

foreach ($cars as $car) {
    echo $car . "<br>";
}

$buses = [
    ["volvo", "BMW", "Toyota"],
    ["volvo2", "BMW2", "Toyota2"],
    ["volvo3", "BMW3", "Toyota3"],
];

foreach ($buses as $school) {
    foreach ($school as $bus) {
        echo $bus . "<br>";
    }
}