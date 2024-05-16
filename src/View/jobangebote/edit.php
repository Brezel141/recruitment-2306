<!-- src/View/jobangebote/edit.php -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jobangebot bearbeiten</title> <!-- Title of the page -->
</head>
<body>
    <h1>Jobangebot bearbeiten</h1> <!-- Heading of the page -->

    <!-- Form to edit a job offer -->
    <form action="/jobangebote/update/<?= $jobangebot['id']; ?>" method="post">
        <!-- Label and input field for the title -->
        <label for="titel">Titel:</label>
        <!-- Pre-fill the input field with the current title, ensuring it is safely encoded -->
        <input type="text" id="titel" name="titel" value="<?= htmlspecialchars($jobangebot['titel']); ?>" required>
        <!-- Submit button to update the job offer -->
        <button type="submit">Aktualisieren</button>
    </form>

    <!-- Link to go back to the job offers list -->
    <a href="/jobangebote">Zurück zu den Jobangeboten</a>
</body>
</html>
