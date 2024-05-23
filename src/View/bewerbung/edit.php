<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewerbung bearbeiten</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Bewerbung bearbeiten</h1>
    </header>
    <main>
        <form action="/bewerbung/update/<?= isset($bewerbung['id']) ? $bewerbung['id'] : 'new'; ?>" method="post">
            <label for="titel">Titel:</label>
            <input type="text" id="titel" name="titel" value="<?= isset($bewerbung['titel']) ? htmlspecialchars($bewerbung['titel']) : ''; ?>" required>
            <button type="submit" class="button">Aktualisieren</button>
        </form>
        <a class="button" href="/bewerbung">Zurück zu den Bewerbungen</a>
    </main>
    <script src="/js/script.js"></script>
</body>
</html>
