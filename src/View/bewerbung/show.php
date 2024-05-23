<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewerbung anzeigen</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Bewerbung anzeigen</h1>
    </header>
    <main>
        <p><strong>Titel:</strong> <?= htmlspecialchars($bewerbung['titel']); ?></p>
        <a class="button" href="/bewerbung">Zurück zu den Bewerbungen</a>
    </main>
    <script src="/js/script.js"></script>
</body>
</html>
