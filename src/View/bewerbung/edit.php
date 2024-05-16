<!-- src/View/bewerbung/edit.php -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewerbung bearbeiten</title> <!-- Title of the page -->
</head>
<body>
    <h1>Bewerbung bearbeiten</h1> <!-- Heading of the page -->
    
    <!-- Form to edit an application -->
    <form action="/bewerbung/update/<?= $bewerbung['id']; ?>" method="post">
        <!-- Label and input field for the title -->
        <label for="titel">Titel:</label>
        <!-- Pre-fill the input field with the current title, ensuring it is safely encoded -->
        <input type="text" id="titel" name="titel" value="<?= htmlspecialchars($bewerbung['titel']); ?>" required>
        <!-- Submit button to update the application -->
        <button type="submit">Aktualisieren</button>
    </form>
    
    <!-- Link to go back to the applications list -->
    <a href="/bewerbung">Zurück zu den Bewerbungen</a>
</body>
</html>
