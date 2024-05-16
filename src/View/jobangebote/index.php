// src/View/jobangebote/index.php
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jobangebote</title>
</head>
<body>
    <h1>Jobangebote</h1>
    <ul>
        <?php if (!empty($jobangebote)) : ?>
            <?php foreach ($jobangebote as $jobangebot) : ?>
                <li><?= htmlspecialchars($jobangebot['titel']); ?></li>
            <?php endforeach; ?>
        <?php else : ?>
            <li>Keine Jobangebote gefunden.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
