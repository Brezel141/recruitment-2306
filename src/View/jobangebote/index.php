<!-- src/View/jobangebote/index.php -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jobangebote</title> <!-- Title of the page -->
</head>
<body>
    <h1>Jobangebote</h1> <!-- Heading of the page -->
    <ul>
        <!-- Check if there are any job offers to display -->
        <?php if (!empty($jobangebote)) : ?>
            <!-- Loop through each job offer and display its title with actions -->
            <?php foreach ($jobangebote as $jobangebot) : ?>
                <li>
                    <!-- Display the job offer title, ensuring it is safely encoded -->
                    <?= htmlspecialchars($jobangebot['titel']); ?> 
                    <!-- Link to show the job offer details -->
                    <a href="/jobangebote/show/<?= $jobangebot['id']; ?>">Anzeigen</a>
                    <!-- Link to edit the job offer -->
                    <a href="/jobangebote/edit/<?= $jobangebot['id']; ?>">Bearbeiten</a>
                    <!-- Form to delete the job offer, displayed inline -->
                    <form action="/jobangebote/delete/<?= $jobangebot['id']; ?>" method="post" style="display:inline;">
                        <button type="submit">Löschen</button>
                    </form>
                </li>
            <?php endforeach; ?>
        <!-- Message displayed if no job offers are found -->
        <?php else : ?>
            <li>Keine Jobangebote gefunden.</li>
        <?php endif; ?>
    </ul>
    <!-- Link to go back to the homepage -->
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
