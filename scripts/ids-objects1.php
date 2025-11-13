<?php

header('Content-Type: application/json');

// Load data array
require __DIR__ . "/sample_data1.php";

// Output JSON
echo json_encode($data);
exit;
