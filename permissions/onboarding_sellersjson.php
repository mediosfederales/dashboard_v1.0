<?php

$jsonFile = '/home/eua0eye5a2mn/public_html/sellers.json';
$response = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = json_decode(file_get_contents('php://input'), true);
    
    if (empty($formData['domain']) || empty($formData['name']) || empty($formData['seller_id'])) {
        $response = "Please fill in all fields.";
    } else {
        $jsonContents = file_get_contents($jsonFile);
        $data = json_decode($jsonContents, true);

        $domainExists = false;
        foreach ($data['sellers'] as $seller) {
            if ($seller['domain'] === $formData['domain']) {
                $domainExists = true;
                break;
            }
        }

        if (!$domainExists) {
            $newSeller = [
                "domain" => $formData['domain'],
                "is_confidential" => intval($formData['is_confidential']),
                "name" => $formData['name'],
                "seller_id" => strval($formData['seller_id']),
                "seller_type" => $formData['seller_type']
            ];

            $data['sellers'][] = $newSeller;

            file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));

            $response = "JSON updated successfully!";
        } else {
            $response = "Domain already exists. Not added to JSON.";
        }
    }
}

echo $response;
?>