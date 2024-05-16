<!-- src/View/bewerbung/show.php -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewerbung anzeigen</title> <!-- Title of the page -->
</head>
<body>
    <h1>Bewerbung anzeigen</h1> <!-- Heading of the page -->
    <!-- Display the title of the application, ensuring it is safely encoded -->
    <p><strong>Titel:</strong> <?= htmlspecialchars($bewerbung['titel']); ?></p>
    <!-- Link to go back to the applications list -->
    <a href="/bewerbung">Zurück zu den Bewerbungen</a>
</body>
</html>
