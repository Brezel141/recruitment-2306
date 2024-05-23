<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jobangebot bearbeiten</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Jobangebot bearbeiten</h1>
    </header>
    <main>
        <form action="/jobangebote/update/<?= isset($jobangebot['id']) ? $jobangebot['id'] : 'new'; ?>" method="post">
            <label for="titel">Titel:</label>
            <input type="text" id="titel" name="titel" value="<?= isset($jobangebot['titel']) ? htmlspecialchars($jobangebot['titel']) : ''; ?>" required>
            <button type="submit" class="button">Aktualisieren</button>
        </form>
        <a class="button" href="/jobangebote">Zurück zu den Jobangeboten</a>
    </main>
    <script src="/js/script.js"></script>
</body>
</html>
