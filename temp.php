<?php
if (isset($_GET['query'])) {
    $query = urlencode($_GET['query']);
    $apiUrl = "https://www.themealdb.com/api/json/v1/1/search.php?s={$query}";

    $response = file_get_contents($apiUrl);
    if ($response !== false) {
        header('Content-Type: application/json');
        echo $response;
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to fetch data from API.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'No search query provided.']);
}
?>
