<?php
// Check if the search query is submitted
$searchQuery = isset($_GET['query']) ? trim($_GET['query']) : '';
$meals = [];

if ($searchQuery !== '') {
    $encodedQuery = urlencode($searchQuery);
    $apiUrl = "https://www.themealdb.com/api/json/v1/1/search.php?s={$encodedQuery}";

    $response = file_get_contents($apiUrl);

    if ($response !== false) {
        $data = json_decode($response, true);
        if (!empty($data['meals'])) {
            $meals = $data['meals'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recipe Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .search-box input {
            padding: 10px;
            width: 300px;
        }
        .search-box button {
            padding: 10px 15px;
        }
        .recipe-card {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 20px 0;
            width: 500px;
        }
        .recipe-card img {
            width: 100%;
            max-width: 300px;
        }
    </style>
</head>
<body>
    <h1>Recipe Search with API</h1>
    <form class="search-box" method="get" action="">
        <input type="text" name="query" placeholder="Enter recipe name..." value="<?php echo htmlspecialchars($searchQuery); ?>">
        <button type="submit">Search</button>
    </form>

    <?php if ($searchQuery !== ''): ?>
        <h2>Search Results for "<?php echo htmlspecialchars($searchQuery); ?>"</h2>
        <?php if (count($meals) > 0): ?>
            <?php foreach ($meals as $meal): ?>
                <div class="recipe-card">
                    <h3><?php echo htmlspecialchars($meal['strMeal']); ?></h3>
                    <img src="<?php echo $meal['strMealThumb']; ?>" alt="<?php echo htmlspecialchars($meal['strMeal']); ?>">
                    <p><?php echo substr($meal['strInstructions'], 0, 200) . '...'; ?></p>
                    <?php if (!empty($meal['strSource'])): ?>
                        <a href="<?php echo $meal['strSource']; ?>" target="_blank">View Full Recipe</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No recipes found for your search.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
