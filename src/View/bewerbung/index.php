<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewerbungen</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Bewerbungen</h1>
    </header>
    <main>
        <ul>
            <?php if (!empty($bewerbungen)) : ?>
                <?php foreach ($bewerbungen as $bewerbung) : ?>
                    <li>
                        <?= htmlspecialchars($bewerbung['titel']); ?>
                        <a class="button" href="/bewerbung/show/<?= $bewerbung['id']; ?>">Anzeigen</a>
                        <a class="button" href="/bewerbung/edit/<?= $bewerbung['id']; ?>">Bearbeiten</a>
                        <form action="/bewerbung/delete/<?= $bewerbung['id']; ?>" method="post" style="display:inline;">
                            <button type="submit" class="button">Löschen</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            <?php else : ?>
                <li>Keine Bewerbungen gefunden.</li>
            <?php endif; ?>
        </ul>
        <a class="button" href="/bewerbung/edit/new">Neue Bewerbung hinzufügen</a>
        <a class="button" href="/">Zurück zur Startseite</a>
    </main>
    <script src="/js/script.js"></script>
</body>
</html>
