<!-- src/View/bewerbung/index.php -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewerbungen</title> <!-- Title of the page -->
</head>
<body>
    <h1>Bewerbungen</h1> <!-- Heading of the page -->
    <ul>
        <!-- Check if there are any applications to display -->
        <?php if (!empty($bewerbungen)) : ?>
            <!-- Loop through each application and display its title with actions -->
            <?php foreach ($bewerbungen as $bewerbung) : ?>
                <li>
                    <!-- Display the application title, ensuring it is safely encoded -->
                    <?= htmlspecialchars($bewerbung['titel']); ?> 
                    <!-- Link to show the application details -->
                    <a href="/bewerbung/show/<?= $bewerbung['id']; ?>">Anzeigen</a>
                    <!-- Link to edit the application -->
                    <a href="/bewerbung/edit/<?= $bewerbung['id']; ?>">Bearbeiten</a>
                    <!-- Form to delete the application, displayed inline -->
                    <form action="/bewerbung/delete/<?= $bewerbung['id']; ?>" method="post" style="display:inline;">
                        <button type="submit">Löschen</button>
                    </form>
                </li>
            <?php endforeach; ?>
        <!-- Message displayed if no applications are found -->
        <?php else : ?>
            <li>Keine Bewerbungen gefunden.</li>
        <?php endif; ?>
    </ul>
    <!-- Link to go back to the homepage -->
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
