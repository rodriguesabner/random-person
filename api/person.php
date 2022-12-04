<?php

use utils\personGenerator;

header('content-type: application/json');

require_once '../utils/cpfGenerator.php';
require_once '../utils/personGenerator.php';
require_once '../vendor/autoload.php';

$personGenerator = new personGenerator();

$locale = isset($_REQUEST["locale"]) ? $_REQUEST["locale"] : "pt_BR";
$gender = isset($_REQUEST["gender"]) ? $_REQUEST["gender"] : "";
$person = $personGenerator->generate($locale, $gender);

echo json_encode($person);
