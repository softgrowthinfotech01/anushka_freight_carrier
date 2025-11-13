<?php
header('Content-Type: application/json');

$data = [
    "data" => [
        [
            "id" => "1",
            "name" => "Tiger Nixon",
            "position" => "System Architect",
            "salary" => "$320,800",
            "start_date" => "2011-04-25",
            "office" => "Edinburgh",
            "extn" => "5421",
            "in" => "123456",
            "ind" => "12/12/2025",
            "ina" => "3000",
            "bn" => "1234",
            "cr" => "Arjun Patel",
            "ce" => "Dev Rathi"
        ],
        [
            "id" => "2",
            "name" => "Garrett Winters",
            "position" => "Accountant",
            "salary" => "$170,750",
            "start_date" => "2011-07-25",
            "office" => "Tokyo",
            "extn" => "8422",
            "in" => "123456",
            "ind" => "12/12/2025",
            "ina" => "3000",
            "bn" => "2311",
            "cr" => "Raj Patel",
            "ce" => "Viraj Rathi"
        ],
        [
            "id" => "3",
            "name" => "Ashton Cox",
            "position" => "Junior Technical Author",
            "salary" => "$86,000",
            "start_date" => "2009-01-12",
            "office" => "San Francisco",
            "extn" => "1562",
            "in" => "123456",
            "ind" => "12/12/2025",
            "ina" => "3000",
            "bn" => "9856",
            "cr" => "Ram Patel",
            "ce" => "Adi Rathi"
        ]
    ]
];
echo json_encode($data);
exit;

