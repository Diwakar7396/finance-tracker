<?php
$data = json_decode(file_get_contents("data.json"), true);

$name = $_GET["name"];

foreach ($data as $client) {
    if ($client["name"] === $name) {

        $totalGiven = 0;
        $totalPaid = 0;

        foreach ($client["transactions"] as $t) {
            $totalGiven += $t["amountGiven"];
            $totalPaid += $t["amountPaid"];
        }

        echo json_encode([
            "name" => $client["name"],
            "transactions" => $client["transactions"],
            "totalGiven" => $totalGiven,
            "totalPaid" => $totalPaid,
            "remaining" => $totalGiven - $totalPaid
        ]);
        exit;
    }
}

echo json_encode(["error" => "Not found"]);
?>