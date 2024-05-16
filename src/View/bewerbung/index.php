// src/View/bewerbung/index.php
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewerbung</title>
</head>
<body>
    <h1>Bewerbung</h1>
    <ul>
        <?php if (!empty($bewerbungen)) : ?>
            <?php foreach ($bewerbungen as $bewerbung) : ?>
                <li><?= htmlspecialchars($bewerbung['titel']); ?></li>
            <?php endforeach; ?>
        <?php else : ?>
            <li>Keine Bewerbungen gefunden.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
