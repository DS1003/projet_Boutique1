<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    <h1>Clients List</h1>
    <ul>
        <?php foreach ($clients as $client): ?>
            <li><?php echo htmlspecialchars($client['username']); ?> - <?php echo htmlspecialchars($client['email']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
