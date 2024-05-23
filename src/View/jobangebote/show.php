<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jobangebot anzeigen</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Jobangebot anzeigen</h1>
    </header>
    <main>
        <p><strong>Titel:</strong> <?= htmlspecialchars($jobangebot['titel']); ?></p>
        <a class="button" href="/jobangebote">Zurück zu den Jobangeboten</a>
    </main>
    <script src="/js/script.js"></script>
</body>
</html>
