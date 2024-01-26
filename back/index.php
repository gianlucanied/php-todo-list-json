<?php

$lista_to_do = ["Fare spesa", "Portare il cane", "Chiamare mamma", "Scrivere al commercialista"];

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: http://localhost:5173/");

echo json_encode($lista_to_do);