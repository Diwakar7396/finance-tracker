<?php
$data = json_decode(file_get_contents("data.json"), true);

$input = json_decode(file_get_contents("php://input"), true);

$name = $input["name"];
$amountGiven = (int)$input["amountGiven"];
$interest = (int)$input["interest"];
$amountPaid = (int)$input["amountPaid"];
$date = $input["date"];

$found = false;

foreach ($data as &$client) {
    if ($client["name"] === $name) {
        $client["transactions"][] = [
            "amountGiven" => $amountGiven,
            "interest" => $interest,
            "amountPaid" => $amountPaid,
            "date" => $date
        ];
        $found = true;
        break;
    }
}

if (!$found) {
    $data[] = [
        "name" => $name,
        "transactions" => [[
            "amountGiven" => $amountGiven,
            "interest" => $interest,
            "amountPaid" => $amountPaid,
            "date" => $date
        ]]
    ];
}

file_put_contents("data.json", json_encode($data));

echo json_encode(["message" => "Added"]);
?>