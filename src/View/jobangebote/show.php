<!-- src/View/jobangebote/show.php -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jobangebot anzeigen</title> <!-- Title of the page -->
</head>
<body>
    <h1>Jobangebot anzeigen</h1> <!-- Heading of the page -->

    <!-- Display the title of the job offer, ensuring it is safely encoded -->
    <p><strong>Titel:</strong> <?= htmlspecialchars($jobangebot['titel']); ?></p>

    <!-- Link to go back to the job offers list -->
    <a href="/jobangebote">Zurück zu den Jobangeboten</a>
</body>
</html>
