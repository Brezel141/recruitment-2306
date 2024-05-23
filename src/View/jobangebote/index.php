<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jobangebote</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Jobangebote</h1>
    </header>
    <main>
        <ul>
            <?php if (!empty($jobangebote)) : ?>
                <?php foreach ($jobangebote as $jobangebot) : ?>
                    <li>
                        <?= htmlspecialchars($jobangebot['titel']); ?>
                        <a class="button" href="/jobangebote/show/<?= $jobangebot['id']; ?>">Anzeigen</a>
                        <a class="button" href="/jobangebote/edit/<?= $jobangebot['id']; ?>">Bearbeiten</a>
                        <form action="/jobangebote/delete/<?= $jobangebot['id']; ?>" method="post" style="display:inline;">
                            <button type="submit" class="button">Löschen</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            <?php else : ?>
                <li>Keine Jobangebote gefunden.</li>
            <?php endif; ?>
        </ul>
        <a class="button" href="/jobangebote/create">Neues Jobangebot hinzufügen</a> ---------------------------------------------------
        <a class="button" href="/">Zurück zur Startseite</a>
    </main>
    <script src="/js/script.js"></script>
</body>
</html>
